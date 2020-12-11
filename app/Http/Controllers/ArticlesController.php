<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $article = Article::paginate(3);

        return view('articles.index', ['articles' => $article]);
    }

    /**
     * @param Article $article
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function store()
    {
        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    /**
     * @param Article $article
     * @return Application|Factory|View
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * @param Article $article
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
