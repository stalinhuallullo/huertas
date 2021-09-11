<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Session;

class InicioAdminController extends Controller
{
    public function __construct()
    {

        if(!Session::has('usr_id')) return redirect()->route('admin.login.index')->send();

    }

    public function index()
    {

        return view('admin.pages.inicio.index', []);
        //return view('front.index', compact('ps','sliders','top_small_banners','feature_products'));
    }
}
