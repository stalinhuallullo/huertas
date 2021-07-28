<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;

class ServicesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            "menu" => PageEnum::Service,
            "sub_menu" => "",
        ];
        return view('web.pages.services.index', $data);
    }

}
