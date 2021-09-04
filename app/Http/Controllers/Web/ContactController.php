<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('web.pages.contact.index', []);
    }

    public function contactanos(Request $request){
        request()->validate(Inbox::$rules);

        $inbox = Inbox::create($request->all());
        return ["res" => "ok", "data" => $inbox];
    }

}
