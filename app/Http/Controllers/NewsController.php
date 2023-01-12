<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): string
    {
        $news = News::getNews();
        return view('news.index')->with('news', $news);
    }

    public function show($id): string
    {
        $news = News::getNewsId($id);
        dump('show');
        if(is_null($news)) return abort(404);
        return view('news.newsOne')->with('news',$news);
    }
    public function showCategory($id): string
    {
        $news = News::getNewsByCategory($id);
        dump('showCategory');
        if(is_null($news)) return abort(404);
        return view('news.newsCategory')->with('news',$news);
    }
    public function add(): string
    {
        return view('news.newsAdd');
    }
}
