<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Novelty;
use Illuminate\Http\Request;

/**
 * Class NoveltyController
 * @package App\Http\Controllers
 */
class NoveltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novelties = Novelty::paginate();

        return view('admin.pages.novelty.index', compact('novelties'))
            ->with('i', (request()->input('page', 1) - 1) * $novelties->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $novelty = new Novelty();
        return view('admin.pages.novelty.create', compact('novelty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Novelty::$rules);

        $novelty = Novelty::create($request->all());

        return redirect()->route('novelties.index')
            ->with('success', 'Novelty created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $novelty = Novelty::find($id);

        return view('admin.pages.novelty.show', compact('novelty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $novelty = Novelty::find($id);

        return view('admin.pages.novelty.edit', compact('novelty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Novelty $novelty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Novelty::$rules);

        Novelty::find($id)->update($request->all());

        return redirect()->route('novelties.index')
            ->with('success', 'Novelty updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $novelty = Novelty::find($id)->delete();

        return redirect()->route('novelties.index')
            ->with('success', 'Novelty deleted successfully');
    }
}
