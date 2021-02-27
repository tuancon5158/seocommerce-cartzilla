@if(isset($errors) and $errors->count() > 0)
<div class="alert alert-danger" role="alert">
  	<ul class="mb-0">
  		@foreach((array) $errors->all() as $error)
  			<li>{{ $error }}</li>
  		@endforeach
  	</ul>
</div>
@endif
