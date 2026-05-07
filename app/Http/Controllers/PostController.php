<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $arrFromDb = Post::all();
        // $arrFromDb = [
        //     ['id' => 1, 'first' => "Mohamed", 'last' => "Esawy"],
        //     ['id' => 2, 'first' => "Ahmed", 'last' => "Mahfouz"],
        //     ['id' => 3, 'first' => "Esraa", 'last' => "Xo"],
        //     ['id' => 4, 'first' => "Mariam", 'last' => "S"]
        // ];
        return (view('posts.index', ['arr' => $arrFromDb]));
    }

    public function show(Post $post)
    {

        return (view('posts.show', ['post' => $post]));
    }
    public function create()
    {
        return (view('posts.create'));
    }

    public function store()
    {
        //1-access data from request

        // **********  first way to access form data
        // $request = request();       // we access all form data using request helper function
        // @dd($request->mail);         // we can also access specific form data using request helper function and passing the name of the input field
        // @@dd($request->password);     // we can also access specific form data using request helper function and passing the name of the input field
        // @dd($request->all());        // we can also access specific form data using

        //************  another way to access form data
        $mail = request()->mail;
        $password = request()->password;
        $check_box = request()->check_box;
        // @dd($mail, $password, $check_box);

        return (to_route('posts.index', 'mail=' . $mail . '&password=' . $password . '&check_box=' . $check_box));
        //2-store data in database
        // we will study it later in the course when we talk about database
        //3-redirect to index page
    }

    public function edit($id)
    {
        $arr = [
            'id' => 1,
            'first' => "Mohamed",
            'last' => "Esawy"
        ];
        return (view('posts.edit', ['id' => $id, 'arr' => $arr]));
    }

    public function update($id)
    {
        //1-access data from request

        // **********  first way to access form data
        // $request = request();       // we access all form data using request helper function
        // @dd($request->mail);         // we can also access specific form data using request helper function and passing the name of the input field
        // @@dd($request->password);     // we can also access specific form data using request helper function and passing the name of the input field
        // @dd($request->all());        // we can also access specific form data using

        //************  another way to access form data
        $mail = request()->mail;
        $password = request()->password;
        $check_box = request()->check_box;
        // @dd($mail, $password, $check_box);

        return (to_route('posts.show', 'mail=' . $mail . '&password=' . $password . '&check_box=' . $check_box));
    }

    public function destroy($id)
    {
        return (to_route('posts.index', 'id=' . $id));
    }

}

