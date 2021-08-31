<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clientreferred;
use Illuminate\Http\Request;

/**
 * Class ClientreferredController
 * @package App\Http\Controllers
 */
class ClientreferredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientreferreds = Clientreferred::paginate();

        return view('admin.pages.clientreferred.index', compact('clientreferreds'))
            ->with('i', (request()->input('page', 1) - 1) * $clientreferreds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientreferred = new Clientreferred();
        return view('admin.pages.clientreferred.create', compact('clientreferred'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clientreferred::$rules);

        $clientreferred = Clientreferred::create($request->all());

        return redirect()->route('clientreferreds.index')
            ->with('success', 'Clientreferred created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientreferred = Clientreferred::find($id);

        return view('admin.pages.clientreferred.show', compact('clientreferred'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientreferred = Clientreferred::find($id);

        return view('admin.pages.clientreferred.edit', compact('clientreferred'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clientreferred $clientreferred
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Clientreferred::$rules);

        Clientreferred::find($id)->update($request->all());
//        $service->update($request->all());
//        $clientreferred->update($request->all());

        return redirect()->route('clientreferreds.index')
            ->with('success', 'Clientreferred updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clientreferred = Clientreferred::find($id)->delete();

        return redirect()->route('clientreferreds.index')
            ->with('success', 'Clientreferred deleted successfully');
    }
}
