@extends('layouts.layout')
@section('layout')


    @section('title') show @endsection
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">username: {{ $id }}</h5>
            @foreach ($arr as $item)
                {{ $item }} <br>
            @endforeach
            <a href="{{ route('posts.index') }}" class="btn btn-info">back to posts
            </a>
        </div>
    </div>
@endsection