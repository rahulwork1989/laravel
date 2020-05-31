@if ($todo->completed)
<span><a onclick="document.getElementById('form-incomplete-{{$todo->id}}').submit()">
        <i style="color:#000;" class="fa fa-check" aria-hidden="true"></i>
        <form id="form-incomplete-{{$todo->id}}" style="display:none;" action="{{route('todo.incomplete',$todo->id)}}"
            method="POST">
            @csrf
            @method('delete')
        </form>
    </a></span>
<span class="fa fa-trash"><i class="fa fa-trash" aria-hidden="true"></i>
</span>
@else
<span><a onclick="document.getElementById('form-complete-{{$todo->id}}').submit()">
        <i style="color:#ccc;" class="fa fa-check" aria-hidden="true"></i>
        <form id="form-complete-{{$todo->id}}" style="display:none;" action="{{route('todo.complete',$todo->id)}}"
            method="POST">
            @csrf
            @method('put')
        </form>
    </a></span>
@endif