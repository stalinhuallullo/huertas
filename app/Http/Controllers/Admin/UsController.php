<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSeo;
use App\Models\Service;
use App\Models\Us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;

/**
 * Class UsController
 * @package App\Http\Controllers
 */
class UsController extends Controller
{
    public function __construct()
    {

        if(!Session::has('usr_id')) return redirect()->route('admin.login.index')->send();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $us = Us::paginate();
//
//        $seoPage = PageSeo::where('typePage', 'us')->first();
//
//        return view('admin.pages.us.index', compact('us', 'seoPage'))
//            ->with('i', (request()->input('page', 1) - 1) * $us->perPage());
        $us = Us::where('id', '1')->first();
        //$us = Us::find($id);
        return view('admin.pages.us.edit', compact('us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $us = new Us();
        return view('admin.pages.us.create', compact('us'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Us::$rules);

        $us = Us::create($request->all());

        return redirect()->route('us.index')
            ->with('success', 'Us created successfully.');
    }



    public function parameter(Request $request, $id) //Request $request, $id
    {
//        request()->validate(PageSeo::$rules);

        PageSeo::find($id)->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $us = Us::find($id);
        return view('admin.pages.us.show', compact('us'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $us = Us::find($id);
        return view('admin.pages.us.edit', compact('us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Us $us
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        request()->validate(Us::$rules);
//        $image =  $request->file('image')->store('public/imagenes');
//        $url = Storage::url($image);
//        $imput = $request->all();
//        $imput['image'] = $url;


        $imput = $request->all();
        foreach ($request->file() as $index => $item) {
            $image = $request->file($index)->store('public/imagenes');
            $url = Storage::url($image);
            $imput[$index] = $url;
        }


        Us::find('1')->update($imput);

        return redirect()->route('admin.us.index')
            ->with('success', 'Us updated successfully');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $us = Us::find($id)->delete();

        return redirect()->route('us.index')
            ->with('success', 'Us deleted successfully');
    }
}
