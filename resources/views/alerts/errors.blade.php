@if(Session::has('message-error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <i class="fa fa-times-circle fa-lg"></i> {{Session::get('message-error')}}
</div>
@endif

