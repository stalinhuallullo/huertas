<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Company;
use App\Models\Banner;
use App\Models\PageEnum;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $propertys = Property::select(
                "property.id",
                "property.name",
                "property.slug",
                "property.idPictureCoverPage",
                "property.province",
                "cover.name as cover_name",
                "cover.type as cover_type",
                "cover.rute as cover_rute",
            )
            ->join('picture as cover', 'cover.id', '=', 'property.idPictureCover')
            ->where("property.status", "1")
            ->limit(6)
            ->get();

        $banners = Banner::select(
                "banners.id",
                "cover.name as cover_name",
                "cover.type as cover_type",
                "cover.rute as cover_rute",
            )
            ->join('picture as cover', 'cover.id', '=', 'banners.idPictureBanner')
            ->get();

        //echo json_encode($banners);
        //exit;

        $data = [
            "propertys" => $propertys,
            "menu" => PageEnum::Home,
            "sub_menu" => "",
            "banners" => $banners,
            "select_form" => false,
        ];

        return view('web.pages.home.index', $data);
        //return view('front.index', compact('ps','sliders','top_small_banners','feature_products'));
    }
}
