@extends('layouts.main')
@section('title','Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
<h2>
    Новости категории
</h2>
@foreach ($news['data'] as $item)
    <a href="{{route('news.newsOne',$item['id'])}}">{{$item['title']}}</a><br>
@endforeach
@endsection
