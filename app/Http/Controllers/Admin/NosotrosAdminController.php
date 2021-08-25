<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NosotrosAdminController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        
        return view('admin.pages.inicio.nosotros', []);
        //return view('front.index', compact('ps','sliders','top_small_banners','feature_products'));
    }
}
