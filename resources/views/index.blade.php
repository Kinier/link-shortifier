@extends("layout.app")
@section('content')
    <div class="wrapper">


            <form class="shortify-form" action="{{url('/create')}}">
                <button class="btn shortify-btn" type="submit">Сократить ссылку</button>
            </form>

            <form class="shortify-form" action="{{url('/documentation/api/v1')}}">
                <button class="btn" type="submit">Сократить ссылку</button>
            </form>
    </div>
@endsection
