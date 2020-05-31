@if(session()->has('message'))
<div class="alert alert-success">{{session()->get('message')}}</div>
@elseif(session()->has('errormessage'))
<div class="alert alert-danger">{{session()->get('errormessage')}}</div>
@endif