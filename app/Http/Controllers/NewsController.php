<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(News $news): string
    {
        $newsData = $news->getNews();
        return view('news.index')->with('news', $newsData);
    }

    public function show(News $news,$id): string
    {
        $newsId = $news->getNewsId($id);
        if(is_null($newsId)) return abort(404);
        return view('news.newsOne')->with('news',$newsId);
    }
    public function showCategory(News $news,$id): string
    {
        $newsCategory = $news->getNewsByCategory($id);
        if(is_null($newsCategory)) return abort(404);
        return view('news.newsCategory')->with('news',$newsCategory);
    }
    public function add(): string
    {
        return view('news.newsAdd');
    }
}
