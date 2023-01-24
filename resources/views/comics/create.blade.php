@extends('layouts.base')

@section('title')
    Add comic section
@endsection
@section('content')
    <form method="post" action="{{ route('comics.store') }}">
        @csrf()
        <div class="mb-3">
            <input type="text" class="form-control" id="title" name="title" placeholder="Insert title...">
        </div>
        <div class="mb-3">
            <textarea name="description" id="description" cols="206" rows="10" placeholder="Insert description..."></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert img URL...">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="price" name="price" placeholder="Insert price...">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="series" name="series" placeholder="Insert serie...">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="type" name="type" placeholder="Insert type...">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
