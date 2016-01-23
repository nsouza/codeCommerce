 @extends('app') @section('content')
<div class="container">
	<h1>Create Category</h1>
	
	@if($errors->any() )
		
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }} </li>
			@endforeach
		</ul>
		
	@endif

	{!! Form::open(['route'=>'categories.store']) !!}

	<div class="form-group">{!! Form::label('name', 'Nome:') !!} {!!
		Form::text('name',null, ['class'=>'form-control']) !!}</div>
		
		<div class="form-group">
            	{!! Form::label('description', 'Description:') !!}
            	{!! Form::textArea('description',null, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            	
            	{!! Form::submit('Add Category', ['class'=>'btn btn-primary']) !!}
        </div>

	{!! Form::close() !!}

</div>
@endsection
