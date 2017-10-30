<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Deposits;

use App\Accounts;

use App\Wallet;

use App\User;

class DepositsController extends Controller
{

//user method
          public function store(Request $request) {

            $this->validate(request(), ['subject'    => 'required',
                                        'key_points' => 'required',
                                        'argument'   => 'required'
            ]);

            Deposits::create(['subject'    => request('subject'),
                              'key_points' => request('key_points'),
                              'argument'   => request('argument'),
                              'user_id'    => auth()->id(),
                              'creator_id' => auth()->user()->username
            ]);

            return back();

          }

      /***
      * Administrational tools
      ***/

      //view pending deposits index
          public function pending() {

              $pendings = Deposits::latest()->where('value', '=', NULL)->get();

              return view('admin.pending', compact('pendings'));
          }

      //Show target deposit view
          public function show($id) {

              $deposit = Deposits::find($id);

              return view('admin.deposit', compact('deposit'));
          }

//main method for creating account record and wallet record/update
          public function value($id, Request $request) {

            $this->validate(request(), ['value' => 'required']);

            $deposit = Deposits::find($id);

            Wallet::create(['tot_wc'  => request('value'),
                            'user_id' => $deposit->user_id
            ]);

            $coins = request('value');

            for ($i=0; $i < $coins; $i++) {
              Accounts::create(['subject'    => $deposit->subject,
                                'key_points' => $deposit->key_points,
                                'argument'   => $deposit->argument,
                                'user_id'    => $deposit->user_id,
                                'creator_id' => $deposit->creator_id,
                                'value'      => request('value')
              ]);
            }

            $deposit->delete();

            return redirect('/account/pending');
          }

}
