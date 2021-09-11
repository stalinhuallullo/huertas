<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginAdminController extends Controller
{


    public function index()
    {
            return view('admin.pages.login.index', []);
            //return view('front.index', compact('ps','sliders','top_small_banners','feature_products'));
    }


    public function login(Request $request) {

        //if(session('id') != null) Redirect('admin.login.index')

        $user = User::where('user', $request->input('user'))->where('password', md5($request->input('password')))->first();

        if($user != null){
            session(['usr_id' => $user->id]);

            $_SESSION['tmp_uid'] = $user->id;

            return redirect()->route('admin.home.index')
                ->withSuccess('Signed in');
        } else {

            return Redirect()->back()->withErrors(['El usuario y/o contraseña son incorrectos']);
        }



/*
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
*/

//        dd($credentials);
    }


public function signOut() {
    Session::forget('usr_id');
        Session::flush();
        return Redirect()->route('admin.login.index');
    }

}
