<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;
use App\Models\Us;

class UsController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $us = Us::where('id', '1')->first();

        $data = [
            "menu" => PageEnum::Us,
            "sub_menu" => "",
            "us" => $us
        ];
        return view('web.pages.us.index', $data);
    }
}
