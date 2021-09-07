<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Models\Deluxe;
use App\Models\Gallery;
use App\Models\Home;
use App\Models\PageEnum;
use App\Models\PageSeo;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

/**
 * Class DeluxeController
 * @package App\Http\Controllers
 */
class DeluxeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders = Gallery::where('typepage', PageEnum::Deluxe)->get();

        $deluxe = Deluxe::where('id', '1')->first();
        return view('admin.pages.deluxe.edit', compact('deluxe', 'sliders'));
    }

    public function removeimage($id) {
        Gallery::find($id)->delete();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deluxe = new Deluxe();
        return view('admin.pages.deluxe.create', compact('deluxe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Deluxe::$rules);

        $deluxe = Deluxe::create($request->all());

        return redirect()->route('deluxes.index')
            ->with('success', 'Deluxe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deluxe = Deluxe::find($id);

        return view('admin.pages.deluxe.show', compact('deluxe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deluxe = Deluxe::find($id);

        return view('admin.pages.deluxe.edit', compact('deluxe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Deluxe $deluxe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deluxe $deluxe)
    {

        request()->validate(Deluxe::$rules);


        $sliders = $request->file('images_ready');

        if( $sliders && count($sliders) > 0)
        {
            foreach ($sliders as $file) {
                $image = $file->store('public/imagenes');
                $url = "/public".Storage::url($image);
                $pi = new Gallery();
                $pi->name = "bbb";
                $pi->type = "any";
                $pi->rute = $url;
                $pi->nameRute = "/public/storage/imagenes/";
                $pi->description = '';
                $pi->typepage = PageEnum::Deluxe;
                $pi->status = 1;
                $pi->save();
            }
        }

        $imput = $request->all();

        foreach ($request->file() as $index => $item) {
            if($index != 'images_ready') {
                $image = $request->file($index)->store('public/imagenes');
                $url = Storage::url($image);
                $imput[$index] = $url;
            }
        }

        Deluxe::find(1)->update($imput);
//        PageSeo::find(1)->update($request->all());

//        $deluxe->update($request->all());

        return redirect()->route('admin.deluxes.index')
            ->with('success', 'Deluxe updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $deluxe = Deluxe::find($id)->delete();

        return redirect()->route('deluxes.index')
            ->with('success', 'Deluxe deleted successfully');
    }
}
