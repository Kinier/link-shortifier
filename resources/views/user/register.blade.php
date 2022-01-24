@extends("layout.app")
@section('content')
    <div class="wrapper">
        <div class="registerForm form">

            <form action="{{url('/create')}}" method="POST">
                @csrf
                @method('PUT')

                    <label class="field">
                        <input type="text" name="name" id="name" placeholder="Имя">
                    </label>


                    <label class="field">
                        <input type="email" name="email" id="email" placeholder="Почта">
                    </label>


                    <label class="field">
                        <input type="password" name="password" id="password" placeholder="Пароль">
                    </label>

                <button class="btn register-btn" type="submit" value="YEP">Зарегистрироваться</button>

            </form>
        </div>
    </div>
@endsection
