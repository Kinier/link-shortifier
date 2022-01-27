@extends("layout.app")
@section('content')
    <div class="wrapper">


            <form class="shortify-form" action="{{url('/create')}}">
                <button class="btn shortify-btn" type="submit">Сократить ссылку</button>
            </form>

    </div>
@endsection
