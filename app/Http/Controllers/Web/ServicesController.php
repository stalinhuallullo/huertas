<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;
use App\Models\Service;

class ServicesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $services = Service::all();
        $data = [
            "menu" => PageEnum::Service,
            "sub_menu" => "",
            "services" => $services
        ];

        return view('web.pages.services.index', $data);
    }

}
