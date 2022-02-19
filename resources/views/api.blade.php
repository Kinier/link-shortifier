@extends("layout.app")
@section('content')
    <div class="wrapper-api-page">

        <h1 class="api-caption">Api documentation</h1>
        <div class="api-info">
            Апи предоставляет возможность создать сокращенную ссылку, а также просмотреть на какую произойдет
            перенаправление в случае существования такой. Доступ к методам апи осуществляется по адресу
            <p><b>{{url('/api/v1')}}</b></p>
            <hr>
            <div class="api-explain">
                Метод <div class="api-explain api-explain-method">/create</div><br>

                Тип: <div class="api-explain api-explain-type">POST</div> <br>

                Данные которые надо передать: <div class="api-explain api-explain-data">
                    url=https://www.example.com
                </div><br>
                url - ссылка для которой необходимо сгенерировать сокращенную ссылку

                <div class="api-example-code">
                    <code>
                        code here
                    </code>
                </div>
                <br>Что должно вернутся: <b>JSON type return</b>
                <div class="api-explain api-explain-return">

                    <code>{"url":"https:\/\/www.google.com","short_url":"{{addcslashes(url('/'), "/")}}\/B4Ah"}</code>
                </div>
            </div>
            <hr>
            <div class="api-explain">
                Метод <div class="api-explain api-explain-method">/show/{id}</div><br>
                Тип: <div class="api-explain api-explain-type">GET</div><br>
                Данные которые надо передать: <div class="api-explain api-explain-data">
                    id=1234
                </div><br>
                id - идентификатор сокращенной ссылки

                <div class="api-example-code">
                    <code>
                        code here
                    </code>
                </div>
                <br>Что должно вернутся: <b>JSON type return</b>
                <div class="api-explain api-explain-return">

                    <code>{"id":"texE","url":"https:\/\/www.google.com"}</code>
                </div>
            </div>
        </div>
    </div>
@endsection
