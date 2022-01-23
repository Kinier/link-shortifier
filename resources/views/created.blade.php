@extends('layout.app')


@section('content')
    <div class="created-links">
        <div class="links-info">
            <div class="link-info">
                Сокращенная ссылка {{url('/') . '/' . $new}}
            </div>
            <hr>
            <div class="link-info">
                Будет перенаправлено на {{$old}}
            </div>

        </div>
        <div class="home-link">
            <a href="{{url('')}}">Домой</a>
        </div>
    </div>
@endsection
