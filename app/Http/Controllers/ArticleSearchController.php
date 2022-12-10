<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleSearchController extends Controller
{
    public function search(Request $request)
    {
        return view('search.index');
    }
}
