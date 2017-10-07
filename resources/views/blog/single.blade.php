@extends('main')

@section('title',$post->title)

@section('content')
<br/>
<div class="row">
	<div class="md-col-8 col-md-offset-2">
		<h1> {{ $post->title }} </h1>
		<p> {{ $post->body }} </p>  
		<hr>
		<p>Posted In: {{ $post->category->name }}</p>     
	</div>       
</div>   
@endsection  