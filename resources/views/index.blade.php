@extends("layout.app")
@section('content')
    <div class="wrapper">
        <div class="site-name">
            Link shortifier
        </div>

            <form action="{{url('/create')}}">
                <button class="btn create-btn" type="submit">Click me</button>
            </form>

    </div>
@endsection
