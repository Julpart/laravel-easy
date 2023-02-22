@extends('layouts.app')
@section('title','Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="row justify-content-next">
        <div class="card">
            <div class="card-header">{{ __('Новости') }}</div>

            <div class="card-body">
                @foreach($news as $item)
                    <a href="{{route('news.newsOne',$item->id)}}">{{$item->title}}</a><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
