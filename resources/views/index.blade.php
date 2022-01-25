@extends("layout.app")
@section('content')
    <div class="wrapper">


            <form action="{{url('/create')}}">
                <button class="btn create-btn" type="submit">Click me</button>
            </form>

    </div>
@endsection
