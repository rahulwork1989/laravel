<div>
@if(session()->has('message'))
<div class="alert alert-success">{{session()->get('message')}}</div>
@elseif(session()->has('errormessage'))
<div class="alert alert-danger">{{session()->get('errormessage')}}</div>
@endif



@if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
@endif
</div>