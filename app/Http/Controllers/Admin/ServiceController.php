<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSeo;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services = Service::paginate();

        $seoPage = PageSeo::where('typePage', 'SERVICE')->first();

//        dd($seoPage->typePage);

        return view('admin.pages.service.index', compact('services', 'seoPage'))
            ->with('i', (request()->input('page', 1) - 1) * $services->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $service = new Service();
        return view('admin.pages.service.create', compact('service'));
    }


    public function parameter(Request $request, $id) //Request $request, $id
    {
//        request()->validate(PageSeo::$rules);

        PageSeo::find($id)->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Service::$rules);

        $image =  $request->file('image')->store('public/imagenes');
        $url = Storage::url($image);
        $imput = $request->all();
        $imput['image'] = $url;

        Service::create($imput);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('admin.pages.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('admin.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate(Service::$rules);

        $image =  $request->file('image')->store('public/imagenes');
        $url = Storage::url($image);
        $imput = $request->all();
        $imput['image'] = $url;

        Service::find($id)->update($imput);
//        $service->update($request->all());

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

    public function destroy($id)
    {
        $service = Service::find($id)->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully');
    }

}
