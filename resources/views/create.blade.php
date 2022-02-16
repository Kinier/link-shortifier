@extends("layout.app")
@section('content')
    <div class="wrapper">
        <div class="link-form">

            <form action="{{url('/store')}}" method="POST">
                @csrf
                @method('PUT')
                <label>Ссылка для сокращения
                    <input class="input-create-link" type="url" name="url" id="url">
                </label>

                <button class="btn" type="submit" value="YEP">Генерация ссылки</button>

            </form>
        </div>
    </div>
@endsection
