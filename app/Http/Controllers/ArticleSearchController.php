<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleSearchController extends Controller
{
    public function search(Request $request)
    {
        $searchWord = $request->input('searhWord', '');

        $searchArticles = Article::where('id', '=', '3')
            // ->where('body', 'LIKE', 'テスト')
            ->get()
            ->all();

        return view('search.index', compact('searchArticles'));
    }
}
