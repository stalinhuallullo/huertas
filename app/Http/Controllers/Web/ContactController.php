<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('web.pages.contact.index', []);
    }

}
