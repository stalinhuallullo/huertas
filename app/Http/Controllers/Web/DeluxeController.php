<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;


class DeluxeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $data = [
            "contactFloat" => true,
            "menu" => PageEnum::Deluxe,
            "sub_menu" => "",
            "select_form" => true,
        ];
        return view('web.pages.deluxe.index', $data);
    }

}
