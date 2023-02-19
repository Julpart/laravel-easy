@extends('layouts.app')
@section('menu')
    @include('admin.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Скачать новости') }}</div>
                    <div class="card-body">
                        <form action="{{ route('admin.getNews') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="newsCategory">Категория новостей</label>
                                <select name="categoryId" id="newsCategory" class="form-control">
                                        @if ( count($categories) )
                                            @foreach ($categories as $item)
                                                <option @if ( $item['id'] == old('category')) selected
                                                        @endif value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                            @endforeach
                                                <option value="666">Все категории</option>
                                        @else
                                            <option value="0" selected>Нет категории</option>
                                        @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dataFormat">Формат данных</label>
                                <select name="formatId" id="dataFormat" class="form-control">
                                        <option value="json" selected>JSON</option>
                                        <option value="excel" >Excel</option>
                                        <option value="pdf" >PDF</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="Скачать">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
