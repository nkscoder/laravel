@extends('layouts.default')

@section('title', 'About page  ')

@section('content')

{{--    {{$name}}--}}

    @foreach ($name as $user)
        <p>This is user :- {{ $user->name }}</p>
    @endforeach

@stop
