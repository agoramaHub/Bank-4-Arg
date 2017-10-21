<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct() {

        $this->middleware('guest');
    }

    public function index() {

        return view('login');

    }

    public function create() {

        return view('about');

    }

}
