<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{


      public function store() {

        //Validate --To be fixed--
        $this->validate(request(), ['username' => 'required|string',
                                    'email'    => 'required|email',
                                    'password' => 'required|confirmed'
                                    ]);
        //Create and save user
        $user = User::create(['username' => request('username'),
                              'email'    => request('email'),
                              'password' => bcrypt(request('password'))
                              ]);

        //Sign them in
        auth()->login($user);

        //Redirect user
        return redirect('/account');

      }



}
