@extends('todos.layout')

@section('content')
<h1>UPDATE TODOS</h1>
<x-alert />
<form action="{{route('todo.update', $todo->id)}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" value="{{$todo->title}}" name="title" />
    <input type="submit" value="update" />
</form>
@endsection