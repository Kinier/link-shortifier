@extends("layout.app")
@section('content')
    <div class="wrapper-api-page">

        <h1 class="api-caption">Api documentation</h1>
        <div class="api-info">
            Апи предоставляет возможность создать сокращенную ссылку, а также просмотреть на какую произойдет
            перенаправление в случае существования такой. Доступ к методам апи осуществляется по адресу
            <p><b>{{url('/api/v1')}}</b></p>
            <hr>
                В случае ошибки апи возвращает в ответе дополнительное значение
                <div style="background-color: #1a202c; display: inline">error</div>
                Содержащее причину ошибки
            <hr>
            <div class="api-explain">
                Метод <div class="api-explain api-explain-method">/create</div><br>

                Тип: <div class="api-explain api-explain-type">POST</div> <br>

                Данные которые надо передать: <div class="api-explain api-explain-data">
                    url=https://www.example.com
                </div><br>
                url - ссылка для которой необходимо сгенерировать сокращенную ссылку

                <div class="api-example-code">
                    Пример отправка запроса. Версия php 8.0+
                    <pre>
                        <code>
                            < ?php
                                $url = 'https://google.com';

                                $ch = curl_init('{{ url('/') }}/api/v1/create');
                                curl_setopt($ch,CURLOPT_POST, true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query(['url' => $url]));
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                                $result = json_decode(curl_exec($ch));

                                if (!isset($result->error)){
                                    echo "Сокращенная ссылка " . $result->short_url;
                                    echo ". Отправлено было " . $result->url;
                                }else{
                                    echo "Ошибка - " . $result->error;
                                }

                            ?>
                        </code>
                    </pre>
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
                    id=B4Ah
                </div><br>
                id - идентификатор сокращенной ссылки

                <div class="api-example-code">
                    Пример отправка запроса. Версия php 8.0+
                    <pre>
                        <code>
                            < ?php
                                $id = 'B4Ah';

                                $ch = curl_init('{{ url('/') }}/api/v1/show/' . $id);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                                $result = json_decode(curl_exec($ch));

                                if (!isset($result->error)){
                                    echo "Ссылка " . $result->url;
                                    echo ". Отправлено было " . $result->id;
                                }else{
                                    echo "Ошибка - " . $result->error;
                                }

                            ?>
                        </code>
                    </pre>
                </div>
                <br>Что должно вернутся: <b>JSON type return</b>
                <div class="api-explain api-explain-return">
                    <code>{"id":"B4Ah","url":"https:\/\/www.google.com"}</code>
                </div>
            </div>
        </div>
    </div>
@endsection
