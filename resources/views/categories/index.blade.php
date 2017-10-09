@extends('main')


@section('title',' All Categories')   

 
@section("content")

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
				</thead>

				<tbody>
					@foreach($categories as $category)  
					<tr>
						<th> {{ $category->id }} </th> 
						<th> {{ $category->name }} </th>   
					</tr>   
					@endforeach  
				</tbody>       

			</table>    
		</div> <!--End of 8 Column div-->
		
		<div class="col-md-3"> 
				<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}   
					<h2>New Categories</h2> 
					{{ Form::label('name','Name :') }} 
					{{ Form::text('name',null,['class' => 'form-control']) }} 

					{{ Form::submit('Create New Category',['class' => 'btn btn-success']) }}       

				{!! Form::close() !!}      
			</div> 
		</div>
	</div> 




@stop 