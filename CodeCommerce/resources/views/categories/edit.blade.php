 @extends('app') @section('content')
<div class="container">
	<h1>Editing Category: {{ $category->name }}y</h1>
	
	@if($errors->any() )
		
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }} </li>
			@endforeach
		</ul>
		
	@endif

	{!! Form::open(['route'=>['categories.update', $category->id], 'method'=>'post']) !!}

	<div class="form-group">{!! Form::label('name', 'Nome:') !!} {!!
		Form::text('name',$category->name, ['class'=>'form-control']) !!}</div>
		
		<div class="form-group">
            	{!! Form::label('description', 'Description:') !!}
            	{!! Form::textArea('description',$category->description, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            	
            	{!! Form::submit('Save Category', ['class'=>'btn btn-primary']) !!}
        </div>

	{!! Form::close() !!}

</div>
@endsection
