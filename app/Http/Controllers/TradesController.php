<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accounts;

use App\Trades;


class TradesController extends Controller
{

      public function __construct() {

          $user = $this->middleware('auth');
      }


      public function landscape1() {

          $selections = Accounts::all()->random(12);

          return view('trading_post.landscape1', compact('selections'));
      }


      public function landscape2() {

          $selections = Accounts::all()->shuffle();

          return view('trading_post.landscape2', compact('selections'));
      }

      public function show($id) {

          $arg = Accounts::find($id);

          $accounts = Accounts::where('user_id','=', ['id' => auth()->id()])->get();

          return view('trading_post.show', compact('arg','accounts'));
      }


      public function trade(Request $request) {

            $tradeFor_id = request('for_id');
            $tradeWith_id = request('with_id');
            $tradeWith = Accounts::find($tradeWith_id);
            $tradeFor = Accounts::find($tradeFor_id);

// Trade_with user_id change, i.e. id changes from active user to the passive user
            $tradeWith->user_id = $tradeFor->user_id;
            $tradeWith->exchanges = +1;
            $tradeWith->save();

// Trade_for user_id update, i.e. id changed for the user that is trading for it
            $tradeFor->user_id = auth()->id();
            $tradeFor->exchanges += 1;
            $tradeFor->save();




          return redirect('/account');
      }



}
