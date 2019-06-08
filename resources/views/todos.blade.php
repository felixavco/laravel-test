@extends('layout')

@section('title', 'My Todos')


@section('content')
    <ul class="list-group mx-auto w-50">
        @foreach($todos as $todo)
            <li class="list-group-item">
                {{$todo['title']}}
            </li>
        @endforeach
    </ul>
@endsection()
