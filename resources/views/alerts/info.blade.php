@if(Session::has('message-info'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <span class="glyphicon glyphicon-info-sign tam-17" aria-hidden="true"></span> {{Session::get('message-info')}}
</div>
@endif
