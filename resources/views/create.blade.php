@extends("layout.app")
@section('content')
    <div class="wrapper">
        <div class="linkForm">

            <form action="{{url('/store')}}" method="POST">
                @csrf
                @method('PUT')
                <label>Ссылка для сокращения
                    <input type="url" name="url" id="url">
                </label>

                <label>Ваша ссылОчка новая
                    <input type="url" name="shortedUrl" id="shortedUrl">
                </label>

                <button type="submit" value="YEP">Генерация ссылки</button>

            </form>
        </div>
    </div>
@endsection
