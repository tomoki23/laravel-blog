<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleSearchController extends Controller
{
    public function search(Request $request)
    {
        $searchWord = $request->input('search');


        $searchArticles = Article::where('title', 'LIKE', "%{$searchWord}%")
            ->orWhere('body', 'LIKE', "%{$searchWord}%")
            ->get()
            ->all();

        // dd($searchArticles);
        return view('search.index', compact('searchArticles'));
    }
}
