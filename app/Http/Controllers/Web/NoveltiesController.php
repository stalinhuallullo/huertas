<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;
use App\Models\Novelties;

class NoveltiesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $novelties = Novelties::select(
            "novelties.id",
            "novelties.title",
            "novelties.slug",
            "novelties.resume",
            "novelties.resume",
            "novelties.dateCreate",
            "category.name as category_name",
            "cover.name as cover_name",
            "cover.type as cover_type",
            "cover.rute as cover_rute",
        )
        ->join('picture as cover', 'cover.id', '=', 'novelties.idCoverImagen')
        ->join('category as category', 'category.id', '=', 'novelties.idCategory')
        ->where("novelties.status", "1")
        ->paginate(6);

        $data = [
            "menu" => PageEnum::Novelties,
            "sub_menu" => "",
            "novelties" => $novelties
        ];
        return view('web.pages.novelties.index', $data);
    }
}
