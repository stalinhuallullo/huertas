<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use App\Models\PageSeo;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::find(1);

        return view('admin.pages.home.index', compact('home'));
    }

    private function fileImage($req, $id, $file) {
        $image =  $req->file($file)->store('public/imagenes');
        $url = Storage::url($image);
        $imput = $req->all();
        $imput[$req] = $url;
    }

    public function update(Request $request, $id)
    {
//        request()->validate(Home::$rules);

//        $image =  $request->file('image')->store('public/imagenes');
//        $url = Storage::url($image);
//        $imput = $request->all();
//        $imput['image'] = $url;

//        dd($request->file());
        $imput = $request->all();
        foreach ($request->file() as $index => $item) {
            $image = $request->file($index)->store('public/imagenes');
            $url = Storage::url($image);
            $imput[$index] = $url;
        }
//        dd($imput);
        Home::find($id)->update($imput);

        return redirect()->route('admin.home.index')
            ->with('success', 'Novelty updated successfully');
    }


}
