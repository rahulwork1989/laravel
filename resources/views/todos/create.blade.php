{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container text-center pt-10">
        <h1>TODOS</h1>
        <x-alert />
        <form action="/todos/create" method="POST">
            @csrf
            <input type="text" name="title" />
            <input type="submit" value="create" />
        </form>
    </div>
</body>
</html> --}}

@extends('todos.layout')

@section('content')
<h1>TODOS</h1>
<x-alert />
<form action="/todos/create" method="POST">
    @csrf
    <input type="text" name="title" />
    <input type="submit" value="create" />
</form> 
@endsection