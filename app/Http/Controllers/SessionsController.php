<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

      public function store() {

        if (! auth()->attempt(request(['email', 'password'])) ) {

            return back();

          }

        return redirect()->home();

      }



      public function destroy() {

          auth()->logout();

          return view('logout');

      }

}
