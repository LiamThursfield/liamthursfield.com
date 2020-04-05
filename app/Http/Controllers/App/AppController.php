<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class AppController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('app.index');
    }

}
