<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('ads');
    }
    public function getCreateAd()
    {
        return view('edit');
    }
}
