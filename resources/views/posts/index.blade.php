@extends('layouts.layout')
@section('layout')

    @section('title') index @endsection


    <table class="table" style="margin-top: 50px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arr as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td><a href="{{ route('posts.show', $post['id']) }}" class="btn btn-info">info
                        </a>
                    </td>

                    <td><a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-info">edit
                        </a></td>

                    <td>
                        <form action="{{ route('posts.destroy', $post['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @endforeach
            <a href="{{ route('posts.create', 'create') }}" class="btn btn-info">New post
            </a>


        </tbody>
    </table>
@endsection