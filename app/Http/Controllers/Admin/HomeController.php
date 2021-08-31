<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use App\Models\PageSeo;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::find(1);

        return view('admin.pages.home.index', compact('home'));
    }

    public function update(Request $request, $id)
    {
//        request()->validate(Home::$rules);

        Home::find($id)->update($request->all());

        return redirect()->route('admin.home.index')
            ->with('success', 'Novelty updated successfully');
    }


}
