@extends('layouts.layout')
@section('layout')

    @section('title') index @endsection


    <table class="table" style="margin-top: 50px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">F_Name</th>
                <th scope="col">L_Name</th>
                <th scope="col">Info</th>
                <th scope="col">Del</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arr as $item)
                <tr>
                    <th scope="row">{{$item['id']}}</th>
                    <td>{{$item['first']}}</td>
                    <td>{{$item['last']}}</td>
                    <td><a href="{{ route('posts.show', $item['id']) }}" class="btn btn-info">info
                        </a>
                    </td>

                    <td><a href="{{ route('posts.edit', $item['id']) }}" class="btn btn-info">edit
                        </a></td>
                    <td> <a href="" class="btn btn-info">delete
                        </a></td>

                </tr>
            @endforeach
            <a href="{{ route('posts.create', 'create') }}" class="btn btn-info">New Item
            </a>


        </tbody>
    </table>
@endsection