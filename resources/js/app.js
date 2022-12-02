import './bootstrap';
import AOS from 'aos';
import $ from 'jquery';
import 'aos/dist/aos.css';

(function () {
  if ($('.restore-wallet').length) {
    $('.restore-wallet').siblings('.header').addClass('mb-4')
  }
  AOS.init();
}())