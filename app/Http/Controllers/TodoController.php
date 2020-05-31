<?php

namespace App\Http\Controllers;
use App\Todo;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        //$todos = Todo::all();
        $todos = Todo::orderby('completed')->get();
        //return $todos;
        return view('todos.index')->with(['todos'=>$todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {
        //dd($todo->title);
        //$todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }
    public function update(TodoCreateRequest $request,Todo $todo)
    {   
        //dd($request->all());
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Todo Updated.');
    }
    public function complete(Todo $todo)
    {
       // dd($todo);
        $todo->update(['completed' => true]);
        return redirect(route('todo.index'))->with('message', 'Todo Item Marked Completed');
    }
    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);
        return redirect(route('todo.index'))->with('message', 'Todo Item Marked InCompleted');
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect(route('todo.index'))->with('message', 'This items deleted.');
    }
    public function store(TodoCreateRequest $request)
    {
    //    $request->validate([
    //        'title' => 'required',
    //    ]);
    //     $rules = [
    //         'title' => 'required|max:255'
    //     ];
    //     $messages = [
    //         'title.max' => 'Todo title should not be  > 255',
    //     ];
        
    //    $validator = Validator::make($request->all(), $rules, $messages);
    //    if ($validator->fails()) {
    //     return redirect()->back()
    //                 ->withErrors($validator)
    //                 ->withInput();
    //     }
       Todo::create($request->all());
       return redirect()->back()->with('message', 'Todo Created Successfully');
    }
}
