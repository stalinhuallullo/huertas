<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Deluxe;
use App\Models\Gallery;
use App\Models\PageEnum;


class DeluxeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $sliders = Gallery::where('typepage', PageEnum::Deluxe)->get();


        $listDeluxe = [
            "APOLO-DELEX-01.png",
            "APOLO-DELEX-02.png",
            "APOLO-DELEX-03.png",
            "APOLO-DELEX-04.png",
            "APOLO-DELEX-05.png",
        ];

        $deluxe = Deluxe::find(1);

        $data = [
            "contactFloat" => true,
            "menu" => PageEnum::Deluxe,
            "sub_menu" => "",
            "select_form" => false,
            'listDeluxe' => $listDeluxe,
            "deluxe" => $deluxe,
            "sliders" => $sliders
        ];

        return view('web.pages.deluxe.index', $data);
    }

}
