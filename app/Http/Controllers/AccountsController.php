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

        $usersAcc = \DB::table('wallets')
                         ->leftJoin('users','users.id','=','user_id')
                         ->select(\DB::raw('count(user_id) as cnt, sum(tot_wc) as tot_wc, any_value(username) as username'))
                         ->where('user_id','<>',1)
                         ->groupBy('user_id')
                         ->get();

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
