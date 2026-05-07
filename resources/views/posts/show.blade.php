@extends('layouts.layout')
@section('layout')


    @section('title') show @endsection
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">id: {{ $post->id }}</h5>
            title: {{ $post->title }} <br>
            description: {{ $post->description }} <br>
            created at: {{ $post->created_at }} <br>
            updated at: {{ $post->updated_at }} <br>
            <a href="{{ route('posts.index') }}" class="btn btn-info">back to posts
            </a>
        </div>
    </div>
@endsection