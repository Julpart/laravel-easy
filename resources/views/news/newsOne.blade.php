@extends('layouts.app')
@section('title',"Новость")

@section('menu')
@include('menu')
@endsection

@section('content')
    @if(!$news->isPrivate)
<h2>
    {{ $news->title }}
</h2>
<p>
    {{ $news->text }}
</p>
@else
        Зарегистрируйтесь для просмотра
    @endif
@endsection
