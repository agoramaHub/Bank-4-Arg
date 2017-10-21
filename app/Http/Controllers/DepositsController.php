<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Deposits;

use App\Accounts;

use App\User;

class DepositsController extends Controller
{


      public function store(Request $request) {

        $this->validate(request(), ['argument' => 'required']);

        Deposits::create(['argument' => request('argument'),
                          'user_id'  => auth()->id()
        ]);

        return back();

      }

      public function value($id, Request $request) {

        $this->validate(request(), ['value' => 'required']);



        $deposit = Deposits::find($id);



        Accounts::create(['argument' => $deposit->argument,
                          'user_id'  => $deposit->user_id,
                          'value'    => request('value')
        ]);

        $deposit->delete();

        return redirect('/account/pending');

      }

}
