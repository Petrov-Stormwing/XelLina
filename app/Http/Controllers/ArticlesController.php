<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
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
    public function index(){
        $article=Article::paginate(3);

        return view('articles.index', ['articles' => $article]);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id){
        $article=Article::find($id);

        return view('articles.show',['article'=>$article]);
    }
}
