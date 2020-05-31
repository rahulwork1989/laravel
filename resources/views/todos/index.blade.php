@extends('todos.layout')

@section('content')
<h1>All Todos</h1>
<a href="/todos/create">Create New</a>
<x-alert />
@foreach ($todos as $todo)
<div>
    @if ($todo->completed)
    <span style="text-decoration:line-through;">
        @else
        <span>
            @endif
            {{$todo->title}}
        </span>

        <span><a href="{{'/todos/'.$todo->id.'/edit'}}">Edit</a></span>
        @include('todos.completeButton')
        <span><a onclick="document.getElementById('form-delete-{{$todo->id}}')
        .submit()">
                <i class="fa fa-trash-o" aria-hidden="true"></i>

                <form id="form-delete-{{$todo->id}}" style="display:none;" action="{{route('todo.delete',$todo->id)}}"
                    method="POST">
                    @csrf
                    @method('delete')
                </form>
            </a>
        </span>
</div>
@endforeach
@endsection