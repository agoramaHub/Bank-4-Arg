<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accounts;

use App\Deposits;

use App\User;

class AccountsController extends Controller
{



    public function __construct() {

        $user = $this->middleware('auth');
    }

//Display user's account information
    public function index() {

        $accounts = Accounts::where('user_id','=', ['id' => auth()->id()])->get();

        $allAccounts = Accounts::all();

        $userAcc = \DB::table('users')->leftJoin('accounts','users.id','=','accounts.user_id')->get();

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

        return view('account.account', compact('accounts','allAccounts','userAcc'));
    }


//Load deposit form view
    public function create() {

        return view('account.create');
    }



/***
* Administrational tools
***/

//view pending deposits index
    public function pending() {

        $pendings = Deposits::where('value', '=', NULL)->get();

        return view('admin.pending', compact('pendings'));
    }

//Show target deposit view
    public function show($id) {

        $deposit = Deposits::find($id);

        return view('account.deposit', compact('deposit'));
    }



}
