@extends('layout.app')


@section('content')
    <div class="created-links">
        <div class="links-info">
            @if(!isset($errors))
            <div class="link-info">
                Сокращенная ссылка <p id="shorted-link">{{url('/') . '/' . $new}}</p> <!-- todo сделать проверка на эти переменные -->
            </div>

                <button class="btn copy-btn" onclick="copyToClipboard('shorted-link'); return false;">Скопировать</button>

            <hr>
            <div class="link-info">
                Будет перенаправлено на <p id="link">{{$old}}</p>
            </div>
                <button class="btn copy-btn" onclick="copyToClipboard('link'); return false;">Скопировать</button>

            @else
            <p>Ошибка. Если ты обновил страницу, то вернутся на главную можно нажав на надпись сверху.
                Если ты ничего не нажимал то возможно у тебя отключены куки в браузере. Если это так, тогда включи
                пожалуйста. И создай ссылку заново.</p>
            @endif
        </div>




    </div>
@endsection
