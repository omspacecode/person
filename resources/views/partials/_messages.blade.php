@if (Session::has('success'))   

	<div class="alert alert-success" role="alert" style="margin-top: 20px;" >
	<strong>Success:</strong> {{ Session::get('success') }} 
	</div>

@endif


@if ($errors->any())

	<div class="alert alert-danger" role="alert" style="margin-top: 20px;" >
		<strong>Errors:</strong> 
		<ul>
		 @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>     
	</div> 
  
 @endif 