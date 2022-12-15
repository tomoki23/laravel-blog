<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlePostRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {

        $searchWord = $request->input('search');

        $query = Article::query();

        if ($searchWord) {
            $query->where('title', 'LIKE', "%{$searchWord}%")
                ->orWhere('body', 'LIKE', "%{$searchWord}%");
        }

        $articles = $query->get();

        return view('articles.index')->with([
            'articles' => $articles,
            'search' => $searchWord,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlePostRequest $request): RedirectResponse
    {

        $article = new Article();
        $article->title = $request['title'];
        $article->body = $request['body'];
        $article->save();

        return (to_route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $detail = Article::find($id);

        return view('articles.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $detail = Article::find($id);

        return view('articles.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $detail = Article::find($id);

        $detail->title = $request->title;
        $detail->body = $request->body;

        $detail->save();

        return to_route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        $detail = Article::find($id);

        $detail->delete();

        return to_route('articles.index');
    }
}
