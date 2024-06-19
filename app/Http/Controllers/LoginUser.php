<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginUser extends Controller
{
    public function login(){
        return view('sign-in');
    }

    public function adminlogin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = DB::table('admin')
        ->select('id','name','email')
        ->where('email', $email)
        ->where('password', $password)
        ->first();
        $request->session()->put('user', $admin);
        $sessionData = session()->get('user');
        if($admin && $sessionData){
              return redirect('/admin')->with('success', 'login successfully.');
        }else{
            return redirect('/admin/login')->with('failed', 'login not correct.');
        }
    }

    public function logout(){
            session()->flush();
            return redirect('/admin/login')->with('success', 'You have been logged out.');
    }
}   