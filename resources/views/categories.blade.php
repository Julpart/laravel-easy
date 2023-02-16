@extends('layouts.main')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <h2>
        Категории
    </h2>
    @foreach($categories as $item)
    <a href="{{route('news.newsCategory',$item['id'])}}">{{$item['name']}}</a><br>
    @endforeach
@endsection

