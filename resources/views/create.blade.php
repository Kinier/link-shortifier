@extends("layout.app")
@section('content')
    <div class="wrapper">
        <div class="link-form">

            <form action="{{url('/store')}}" method="POST">
                @csrf
                @method('PUT')
                <label>Ссылка для сокращения
                    <input type="url" name="url" id="url">
                </label>

                <button type="submit" value="YEP">Генерация ссылки</button>

            </form>
        </div>
    </div>
@endsection
