@if(Session::has('message-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <i class="fa fa-check-square fa-lg"></i> {{Session::get('message-success')}}
</div>
@endif
