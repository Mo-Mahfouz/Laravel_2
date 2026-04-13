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
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-secondary">edit</button></td>

                </tr>
            @endforeach
            <a href="{{ route('posts.create', 'create') }}" class="btn btn-info">New Item
            </a>


        </tbody>
    </table>
@endsection