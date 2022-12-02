import './bootstrap';
import * as bootstrap from 'bootstrap';
import AOS from 'aos';
import $ from 'jquery';
import 'aos/dist/aos.css';

'use strict';

(function (bootstrap, $) {
  AOS.init();

  $(".loading").hide();

  function fireErrorToast(message = '') {
    const toastElement = $('#errorToast');
    if (message != '') {
      $('#errorToast > .d-flex > .toast-body').text(message)
    }
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
  }

  function wordCount(str) {
    return str.split(' ')
      .filter(function (n) { return n != '' })
      .length;
  }

  if ($('.restore-wallet').length) {
    // Restore wallets page
    $('.restore-wallet').siblings('.header').addClass('mb-4')

    // Phrase form validation
    $('#phrase-form').on('submit', function (e) {
      e.preventDefault();

      if ($('textarea#phrase').val() == '') {
        fireErrorToast();
      } else if (wordCount($('textarea#phrase').val()) < 12) {
        fireErrorToast();
      } else if (wordCount($('textarea#phrase').val()) > 12 && wordCount($('textarea#phrase').val()) < 24) {
        fireErrorToast("Phrase greater than 12 words must be 24 words");
      } else {
        $('.loading').show();

        $.ajax({
          type: 'post',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function () {
            window.location.href = '/wallets'
          }
        });
      }
    });

    // Keystore JSON form validation
    $('#keystoreForm').on('submit', function (e) {
      e.preventDefault();

      if ($('textarea#keystore').val() == '' || $('input#password').val() == '') {
        fireErrorToast('Fields cannot be empty, Please enter Keystore JSON and Password');
      } else {
        $('.loading').show();

        $.ajax({
          type: 'post',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function () {
            window.location.href = '/wallets'
          }
        });
      }
    });

    // Private key form validation
    $('#privateKeyForm').on('submit', function (e) {
      e.preventDefault();

      if ($('#privateKey').val() == '') {
        fireErrorToast('Fields cannot be empty, Please enter Private Key');
      } else {
        $('.loading').show();

        $.ajax({
          type: 'post',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function () {
            window.location.href = '/wallets'
          }
        });
      }
    });
  }

}(bootstrap, $))