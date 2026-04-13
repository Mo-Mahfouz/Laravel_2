# laravel

### how to create new laravel project

Select path: prefered in

```
C:\xampp\htdocs
```

then open cmd.... then type

```
laravel new example-app
```

Run a localHost server For your laravel project (open terminal into your project folder) using this command

```
php artisan serve
```

also you can run a server for your php file using apache and type it's path after xampp on google ex..

```
localhost/htdocs/index.php
```

**Hint:** We can type index.php or not

To create controler from cmd we use at project folder we use:

```
php artisan make:controler
```

We should create namespace into the class to use the same path in the php file
namespacing :

```php
namespace App\Http\Controllers;
```

include = :

```php
use  App\Http\Controllers\TestController;
```

### To understand the construction of the code we should know Design pattern and MVC pattern

this is a good website to learn design pattern

```
http://refactoring.guru/
```

MVC -> Model, View and Controller pattern

Model: Database -> act with Databases
View: HTML,CSS,JavaScript  
Controller: Simple Logic Classes -> Get request , give response (First thing interacts with user)
##You can read the evolution of mvc
###You can benifit from dev.to (a website have millions of technical articles)

```
dev.to
```

##CRUD -> Create , Remove , Update , Delete
this is the 4 basic operation that happens in any resource at any system

###We can find all project code at the following Link

```
https://github.com/amaelftah/codezilla-blog
```

##Steps to build new Route
1- Define a new Route so the user can access it from browser
2- Define Controller that renders a view
3- Define view that contains list of posts
4- Remove any static HTML data from the view

##Look we can use this to print and terminate the program

```php
@dd(Variable_name)
```

adding a route name -> the main use of it till now is providing it into links to navigate between pages without problems

give your attention to

```
@yield()      -> means that iam waiting this values from each document
@extends()
@section()
@endsection
```

we should add @scrf after each POST request to avoid popular securty vulnerabilities

```
@csrf
```

HTML form (method -> "method type ex. GET / POST" && action ->url that we will submit on it)
####you can access form data from php or from laravel
first thing from php

```
$data = $_POST;
return data;

then we can access it
second way from laravel

```

$data = request() -> all();
return data;

```

#### take care that data must be named to be accessed in html form

```

@dd() ->helps in depugging && can access property or method

```

```

$request = request();       // we access all form data using request helper function
        @dd($request->mail); // we can also access specific form data using request helper function and passing the name of the input field
@@dd($request->password);     // we can also access specific form data using request helper function and passing the name of the input field
        @dd($request->all()); // we can also access specific form data using

```

```
