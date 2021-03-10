<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\TviPage;
use Illuminate\Support\Facades\Http;

class AppController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = new TviPage(Http::get('https://tvi.liamthursfield.com/api/page?page_url=/')->json());
//        dd($page);
        return view('app.index', [
            'page' => $page
        ]);
    }

}
