<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $sessionData = session()->get('user');
        return view('profile',['admin' => $sessionData]);
    }
}
