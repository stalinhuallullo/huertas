<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PageEnum;
use App\Models\Property;
use App\Models\ColorStyle;
use App\Models\PropertyBenefit;
use App\Models\PropertyGaller;
use Illuminate\Http\Request;


class ProyectController extends Controller
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
            "property.imagetop",
            "property.imagebot",
            "property.idPictureCoverPage",
            "property.province",
            "cover.name as cover_name",
            "cover.type as cover_type",
            "cover.rute as cover_rute",
        )
            ->join('picture as cover', 'cover.id', '=', 'property.idPictureCover')
            ->where("property.status", "1")
            ->paginate(6);


        $data = [
            "propertys" => $propertys,
            "menu" => PageEnum::Proyect,
            "sub_menu" => "",
            "select_form" => true,
        ];
        return view('web.pages.proyect.index', $data);
    }

    public function detail($slug)
    {
        $property = Property::select(
                "property.id",
                "property.name",
                "property.slug",
                "property.description",
                "property.youtube",
                "property.initialFeeSoles",
                "property.initialFeeDollars",
                "property.spotPriceSoles",
                "property.cashPriceDollars",
                "property.latitude",
                "property.longitude",
                "property.officeAddress",
                "property.projectAddress",
                "property.spotPriceSoles",
                "property.idColor",
                "property.imagetop",
                "property.imagebot",
                "property.phone",
                "property.spotPriceSoles",
                "property.idPictureCoverPage",
                "property.province",
                "cover.name as cover_name",
                "cover.type as cover_type",
                "cover.rute as cover_rute",
                "coverPage.name as coverPage_name",
                "coverPage.type as coverPage_type",
                "coverPage.rute as coverPage_rute",
                "coverIcon.name as coverIcon_name",
                "coverIcon.type as coverIcon_type",
                "coverIcon.rute as coverIcon_rute",
            )
            ->join('picture as cover', 'cover.id', '=', 'property.idPictureCover')
            ->join('picture as coverPage', 'coverPage.id', '=', 'property.idPictureCoverPage')
            ->join('picture as coverIcon', 'coverIcon.id', '=', 'property.idIconMap')
            ->where("property.slug", $slug)
            ->where("property.status", "1")
            ->first();

        $property_color = ColorStyle::select("url")
            ->where("id", $property->idColor)
            ->first();

        $property_benefits = PropertyBenefit::select(
                "propertybenefits.name",
                "cover.name as cover_name",
                "cover.type as cover_type",
                "cover.rute as cover_rute",
            )
            ->join('picture as cover', 'cover.id', '=', 'propertybenefits.idPicture')
            ->where("propertybenefits.idProperty", $property->id)
            ->orderBy("propertybenefits.number_order", 'ASC')
            ->get();

        $property_gallery = PropertyGaller::select(
                "cover.name as cover_name",
                "cover.type as cover_type",
                "cover.rute as cover_rute",
            )
            ->join('picture as cover', 'cover.id', '=', 'propertygallery.idPicture')
            ->where("propertygallery.idProperty", $property->id)
            ->orderBy("propertygallery.number_order", 'ASC')
            ->get();
        //echo json_encode($property_color);
        //exit;

        $data = [
            "contactFloat" => true,
            "property_single" => $property,
            "property_color" => $property_color,
            "property_benefits" => $property_benefits,
            "property_gallery" => $property_gallery,
            "menu" => PageEnum::Proyect,
            "sub_menu" => $slug,
            "select_form" => true,
        ];
        return view('web.pages.proyect.detail', $data);
    }

    public function coordinateVisit(Request $request){
        echo "mayli";
        /*$validated = $request->validate([
            'names' => 'required',
            'surnames' => 'required',
            'dni' => 'required',
            'phone' => 'required',
            'contactMedium' => 'required',
            'schedule' => 'required',
            'email' => 'required',
            'matter' => 'required',
            'message' => 'required',
            'terms' => 'required',
            'politics' => 'required',
        ]);*/


        /*$inputs = request()->all();

        $title = request()->get('title');
        $meaning = request()->get('meaning');*/

    }
}
