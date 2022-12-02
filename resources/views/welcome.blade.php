@extends('layouts.core')

@section('title')
    Home | {{ config('app.name', 'Mimi') }} Wallet Connect
@endsection

@section('intro-title')
    <h3 class="text-uppercase">Wallet Connect</h3>
    <h3 class="text-uppercase">{{ config('app.name', 'Mimi') }} Support</h3>
@endsection

@section('tagline')
    Most secure tool for all wallet node correction featuring kyc and others interesting
    functions
@endsection

@section('intro-action')
    <a href="{{ route('wallets') }}" class="btn btn-primary text-uppercase py-3-mod px-5 action-btn">Select
        Wallet</a>
@endsection

@section('content')
    <section data-aos="fade-up" class="mt-5 pt-5 mb-4">
        <img src="{{ asset('images/banner.png') }}" alt="" class="image-fluid" width="100%">
    </section>

    <section data-aos="fade-up" class="my-5 w-100">
        <h3 class="node-fxn p-0">Node Functions</h3>
        <div class="node-desc-wrapper">
            <p class="node-fxn-description">
                • TOKEN SWAP & CLAIM TOKEN BRIDGE • LIQUIDITY POOL AND FARM •
                DEPOSITS AND WITHDRAWALS • TOKENS STAKE AND UNSTAKE • LEDGER AND
                TREZOR HARDWARE • DEX WEBSITE ERROR • KYC & WHITELIST & ALLOCATION •
                AIRDROPS • COMPROMISED WALLET RECLAIM • MISSING TOKENS • UNABLE TO
                ACCESS WALLET • NFT'S AND NFT'S RELATED ISSUES • GENERAL WALLET
                ISSUES
            </p>
        </div>
        <a href="{{ route('wallets') }}" class="btn btn-primary text-uppercase py-3-mod px-5 action-btn">Select Wallet</a>
    </section>
@endsection
