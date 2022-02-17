@extends('layout.app')


@section('content')
    <div class="created-links">
        <div class="links-info">
            @if(!isset($errors))
            <div class="link-info">
                Сокращенная ссылка <p id="shorted-link">{{url('/') . '/' . $new}}</p> <!-- todo сделать проверка на эти переменные -->
            </div>

                <button class="btn copy-btn" onclick="CopyToClipboard('shorted-link'); return false;">Скопировать</button>
                <div hidden id="shorted-link-copied">Адрес скопирован</div>
            <hr>
            <div class="link-info">
                Будет перенаправлено на <p id="link">{{$old}}</p>
            </div>
                <button class="btn copy-btn" onclick="CopyToClipboard('link'); return false;">Скопировать</button>
                <div id="link-copied" hidden>Адрес скопирован</div>
            @else
            <p>Ошибка. Если ты обновил страницу, то вернутся на главную можно нажав на надпись сверху.
                Если ты ничего не нажимал то возможно у тебя отключены куки в браузере. Если это так, тогда включи
                пожалуйста. И создай ссылку заново.</p>
            @endif
        </div>




    </div>
@endsection
