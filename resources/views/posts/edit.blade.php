@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets') 

{!! Html::style('css/select2.min.css') !!}   

@endsection

@section('content')

<br/>
<div class="row">     
	
	<div class="col-md-8">     
		{!! Form::model($post, ['route' => ['posts.update',$post->id],'method' => 'PUT']) !!}     
 
		{{ Form::label('title' ,'Title:') }}
		{{ Form::text('title',null,['class' => 'form-control input-lg']) }}  
		
		{{ Form::label('slug' ,'Slug:',['class' => 'form-spacing-top']) }}
		{{ Form::text('slug',null,['class' => 'form-control']) }}   

		{{ Form::label('category_id' ,'Category:') }}  
		{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}     

		{{ Form::label('tags','Tags:') }} 
		{{ Form::select('tags[]', $tags, null, ['class' => 'select2-multi form-control', 'multiple' => 'multiple']) }}            

		{{ Form::label('body' ,'Body:' , ['class' => 'form-spacing-top']) }}
		{{ Form::textarea('body',null,["class" => 'form-control']) }}            
   
	</div>           

	<div class="col-md-4">           
		<div class="well">  
			<dt class="dl-horizontal">    
				<dt> Create at:</dt>   
				<dt> {{ date('M j, Y h:ia',strtotime($post->created_at)) }} </dt>   
			</dt>   

			<dt class="dl-horizontal">       
				<dt> Last Updated at </dt> 
				<dt> {{ date('M j, Y h:ia',strtotime($post->updated_at)) }} </dt>   
			</dt>    
			<hr>      
			<div class="row"> 
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class' => 'btn btn-danger btn-block')) !!}     					
				</div> 
				<div class="col-sm-6"> 
					{{ Form::submit('Save Changes',['class' => 'btn btn-success btn-block']) }}         
				</div>      
			</div> 
		</div>  
	</div>  
	{!! Form::close() !!}    
</div> 



@endsection

@section('scripts') 
	
	{!! Html::script('js/select2.min.js') !!}     

	<script type="text/javascript">   
		
		$('.select2-multi').select2();  
		$('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');                       

	</script>    

    
@endsection 