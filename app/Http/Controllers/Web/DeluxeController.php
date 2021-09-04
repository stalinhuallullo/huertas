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

        $listDeluxe = [
            "APOLO-DELEX-01.png",
            "APOLO-DELEX-02.png",
            "APOLO-DELEX-03.png",
            "APOLO-DELEX-04.png",
            "APOLO-DELEX-05.png",
        ];

        $data = [
            "contactFloat" => true,
            "menu" => PageEnum::Deluxe,
            "sub_menu" => "",
            "select_form" => false,
            'listDeluxe' => $listDeluxe
        ];
        return view('web.pages.deluxe.index', $data);
    }

}
