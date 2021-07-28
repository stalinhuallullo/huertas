<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;

class NoveltiesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            "menu" => PageEnum::Novelties,
            "sub_menu" => "",
        ];
        return view('web.pages.novelties.index', $data);
    }
}
