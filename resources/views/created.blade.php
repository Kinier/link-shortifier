@extends('layout.app')


@section('content')
    <div class="created-links">
        <div class="links-info">
            @if(!isset($errors))
            <div class="link-info">
                Сокращенная ссылка {{url('/') . '/' . $new}} <!-- todo сделать проверка на эти переменные -->
            </div>
            <hr>
            <div class="link-info">
                Будет перенаправлено на {{$old}}
            </div>
            @else
            <p>Как ты сюда попал? Возможно ты запретил куки? Если это так, тогда удачи с угадыванием ссылки</p>
            @endif
        </div>




    </div>
@endsection
