<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;

class ShowDashboards extends Controller
{
    public function showApp()
    {
        return view('app');
    }

    public function showCategoryPage($slug)
    {
        if($slug === null){
            abort(404);
        }

        return view($slug);
    }
}
