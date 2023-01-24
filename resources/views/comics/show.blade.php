@extends('layouts.base')

@section('title')
    {{ $comic->title }}
@endsection
@section('content')
    <ul>
        <li><img src="{{ $comic->thumb }}" alt=""></li>
        <li>Type: {{ $comic->type }}</li>
        <li>Serie: {{ $comic->series }}</li>
        <li>Description: {{ $comic->description }}</li>
        <li>Sale date: {{ $comic->sale_date }}</li>
        <li>Price: {{ $comic->price }} $</li>
    </ul>
@endsection
