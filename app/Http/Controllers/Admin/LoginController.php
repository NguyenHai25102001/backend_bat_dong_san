<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(){
        return view('admin.page.login');
    }
    public function dologin(Request $request){
        try {
            $arr=[
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ];
            $user=User::where('username',$arr['username'])->first();
            if(empty($user)){
                return redirect()->back()->with('error','Tài khoản không tồn tại');
            }
            if(Auth::guard('admin')->attempt($arr)){
                return redirect()->route('admin.dashboard');

            }

            return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng');

        }catch (\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());

        }
    }
}
