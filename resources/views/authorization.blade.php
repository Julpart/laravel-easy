@extends('layouts.main')
@section('title',"Новость")

@section('menu')
@include('menu')
@endsection

@section('content')
<h2>
    Форма авторизации
</h2>
<form action="">
    <input type="text">
    <br>
    <input type="password">
    <br>
    <input type="checkbox">
    <button type="submit">Отправить</button>
</form>
@endsection
