<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use App\Models\PageSeo;
use App\Models\Picture;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::find(1);
        $sliders = Banner::select(
            "banners.id",
            "cover.name as cover_name",
            "cover.type as cover_type",
            "cover.rute as cover_rute",
        )
            ->join('picture as cover', 'cover.id', '=', 'banners.idPictureBanner')
            ->get();

        return view('admin.pages.home.index', compact('home','sliders'));
    }

    public function update(Request $request, $id)
    {
//        request()->validate(Home::$rules);

//        $image =  $request->file('image')->store('public/imagenes');
//        $url = Storage::url($image);
//        $imput = $request->all();
//        $imput['image'] = $url;




        $sliders = $request->file('sliders');

        if( $sliders && count($sliders) > 0)
        {
            foreach ($sliders as $file) {
                $image = $file->store('public/imagenes');
                $url = "/public".Storage::url($image);

                $pi = new Picture();
                $pi->name = "bbb";
                $pi->type = "any";
                $pi->rute = $url;
                $pi->nameRute = "/public/storage/imagenes/";
                $pi->description = '';
                $pi->status = 1;
                $pi->save();
                Banner::create(["idPictureBanner" => $pi->id, "status" => 1, "idCompany" => 1]);
            }
        }



        $imput = $request->all();


        foreach ($request->file() as $index => $item) {
            var_dump($index);
            if($index != 'sliders') {
                $image = $request->file($index)->store('public/imagenes');
                $url = Storage::url($image);
                $imput[$index] = $url;
            }
        }

        Home::find($id)->update($imput);
        PageSeo::find(1)->update($request->all());

        return redirect()->route('admin.home.index')
            ->with('success', 'Novelty updated successfully');
    }


}
