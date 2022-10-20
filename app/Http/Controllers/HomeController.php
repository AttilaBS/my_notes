<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * The landing page of application.
     *
     * @return View
     */
    public function home(): View
    {
        return view('welcome');
    }
}
