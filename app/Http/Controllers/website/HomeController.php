<?php

namespace App\Http\Controllers\website;
use App\Models\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $page = Page::where('slug', 'about')->first();
        abort_if(!$page, 404);

        return view('website/index',[ 'page'=> $page] );
    }

    public function pages($slug){
        $page = Page::where('slug', $slug)->first();
        abort_if(!$page, 404);

        return view('website/page',[ 'page'=> $page] );
    }
}

