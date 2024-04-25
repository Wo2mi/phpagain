<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
        return view('backend.auth.login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|email:filter',
            'password' =>'required',
        ]);
    }
}
