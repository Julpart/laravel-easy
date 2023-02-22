@extends('layouts.app')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="row justify-content-next">
        <div class="card">
            <div class="card-header">{{ __('Категории') }}</div>

            <div class="card-body">
                @foreach($categories as $item)
                    <a href="{{route('news.newsCategory',$item->id)}}">{{$item->name}}</a><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection

