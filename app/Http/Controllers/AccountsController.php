<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accounts;

use App\Wallet;

use App\User;

class AccountsController extends Controller
{



    public function __construct() {

        $user = $this->middleware('auth');
    }

//Display user's account information
    public function index() {

        $accounts = Accounts::latest()->where('user_id','=', ['id' => auth()->id()])->get();

        $wallet  = Wallet::where('user_id','=', ['id' => auth()->id()])->get();

// Admin area display //
        $allAccounts = Accounts::all();

        $usernames = User::all();

        $usersAcc = Wallet::all()->groupBy('user_id');

/*

// $total user holdings (working)

        DB::table('users')->leftJoin('accounts','accounts.user_id','=','users.id')
          ->where('users.id','=',3)
          ->select('accounts.value')
          ->get()
          ->count();

// $total WORDCOIN sum (working)
          $values = DB::table('users')->leftJoin('accounts','accounts.user_id','=','users.id')
          ->where('users.id','=',3)
          ->select('accounts.value')
          ->get();

*/

        return view('account.account', compact('accounts','wallet', 'allAccounts','usernames','usersAcc'));
    }

// show single argument from users dashboard //
    public function show($id) {

        $arg = Accounts::find($id);

        return view('account.show', compact('arg'));
    }


//Load deposit form view
    public function create() {

        return view('account.create');
    }


}
