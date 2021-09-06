<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\ColorStyle;
use App\Models\PageSeo;
use App\Models\Picture;
use App\Models\Property;
use App\Models\PropertyGaller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $properties = Property::paginate();
        $seoPage = PageSeo::where('typePage', 'PROYECT')->first();

        return view('admin.pages.property.index', compact('properties', 'seoPage'))
            ->with('i', (request()->input('page', 1) - 1) * $properties->perPage());
    }




    public function parameter(Request $request, $id) //Request $request, $id
    {
//        request()->validate(PageSeo::$rules);

        PageSeo::find($id)->update($request->all());
        return redirect()->route('properties.index')->with('success', 'Service updated successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sliders = [];

        $property = new Property();

        $colorStyle = ColorStyle::all()->pluck('name', 'id');

        return view('admin.pages.property.create', compact('property','colorStyle', 'sliders'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Property::$rules);

        $input = $request->all();
        foreach ($request->file() as $index => $item) {
            if($index != 'sliders') {
                $image = $request->file($index)->store('public/imagenes');
                $url = Storage::url($image);
                $input[$index] = $url;
            }
        }
        $pro = Property::create($input);

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

            PropertyGaller::create(["idPicture" => $pi->id, "status" => 1, "idProperty" => $pro->id]);
            }
        }



        return redirect()->route('properties.index')
            ->with('success', 'Property created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);


        return view('admin.pages.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $sliders = PropertyGaller::select(
            "propertygallery.id",
            "cover.name as cover_name",
            "cover.type as cover_type",
            "cover.rute as cover_rute",
            "cover.id as cover_id",
        )
            ->join('picture as cover', 'cover.id', '=', 'propertygallery.idPicture')
            ->where('propertygallery.idProperty', $id)
            ->get();


        $property = Property::find($id);
        $colorStyle = ColorStyle::all()->pluck('name', 'id');

        return view('admin.pages.property.edit', compact('property','colorStyle', 'sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Property::$rules);

        $input =  $request->all();


        foreach ($request->file() as $index => $item) {
            if($index != 'sliders') {
                $image = $request->file($index)->store('public/imagenes');
                $url = Storage::url($image);
                $input[$index] = $url;
            }
        }


       Property::find($id)->update($input);

        $pro = Property::findOrFail($id);


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

                        PropertyGaller::create(["idPicture" => $pi->id, "status" => 1, "idProperty" => $pro->id]);
                    }
                }


                //$property->update($request->all());

                return redirect()->route('properties.index')
                    ->with('success', 'Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id)->delete();

        return redirect()->route('properties.index')
            ->with('success', 'Property deleted successfully');
    }
}
