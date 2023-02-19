<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function getImage()
    {
        return response()->download('img1.jpg');
    }
    public function getNews(Request $request,Categories $categories, News $news)
    {
        if($request->isMethod('post')) {
            switch ($request->formatId){
                case 'json':
                    if($request->categoryId == 666){
                        return response()->json($news->getNews())
                            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
                            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                    }else{
                        return response()->json($news->getNewsByCategory($request->categoryId))
                            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
                            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                    }
                case 'excel':
                case 'pdf':
                default:
                    return abort(404);
            }
        }
        return view('admin.getNews',[
            'categories' => $categories->getCategories()
        ]);
    }
    public function create(Request $request, Categories $categories, News $news)
    {
        if($request->isMethod('post')){
            $data = $request->except('_token');
            if(!array_key_exists('isPrivate',$data)){
                $data['isPrivate'] = false;
            }else{
                $data['isPrivate'] = true;
            }
            $newsArr = $news->getNews();
            $data['id'] = ++end($newsArr)['id'];
            $newsArr[] = $data;
            Storage::disk('local')->put('news.json', json_encode($newsArr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            return redirect()->route('news.newsOne',$data['id']);
        }
        return view('admin.create',[
            'categories' => $categories->getCategories()
        ]);
    }

}
