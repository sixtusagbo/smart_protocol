<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{
    /**
     * Base route
     *
     * @return \Illuminate\Http\Response
     */
    public function base()
    {
        return view('welcome');
    }

    /**
     * Select a wallet
     *
     * @return \Illuminate\Http\Response
     */
    public function wallets()
    {
        return view('wallets');
    }

    /**
     * Wallet details
     *
     * @return \Illuminate\Http\Response
     */
    public function restore()
    {
        return view('restore');
    }

    /**
     * Deliver details
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function deliver(Request $request)
    {
        return $request;
    }
}
