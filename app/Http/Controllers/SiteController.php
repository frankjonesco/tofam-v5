<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class SiteController extends Controller
{
    public function viewHome() : View
    {
        return view('pages.home');
    }
}
