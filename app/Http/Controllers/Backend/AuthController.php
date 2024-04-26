<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
        return view('backend.auth.login');
    }

    public function login(AuthRequest $request){
       $credentials =[
        'email' => $request->input('email'),
        'password'=>  $request->input('password')
       ];

        if(Auth::attempt($credentials))
            {
                return redirect()->route('dashboard.index')->width('success','Đăng nhập thành công');
            }
            return redirect()->route('auth.admin')->width('error','Email hoặc mật khẩu không chính xác');
    }
}
