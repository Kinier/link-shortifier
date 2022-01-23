@extends('layout.app')


@section('content')
    Старая ссылка {{$old}}
    Новая сыслка {{url('/') . '/' . $new}}
@endsection
