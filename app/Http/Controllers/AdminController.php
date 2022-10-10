<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $r)
    {
        $email = $r->email;
        $password = $r->password;

        $result = Admin::where(['email'=>$email, 'password'=>$password])->get();

        if(isset($result['0']->id)){

            $r->session()->put('Admin_login',true);
            return redirect('dashboard');
        }
        else{
            
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
    public function signout(Request $r){

        $r->session()->flush();

        return redirect('login');
    }
    
}
