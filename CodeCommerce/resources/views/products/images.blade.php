
@extends('app')
@section('content')
<div class="container">

		  
            	<h1>Images of {{ $product->name }}</h1>
    	
            <a href="#" class="btn btn-default">New Image</a>
            <br>
            <br>
            
            <h1>Teste</h1>
             
            <table class="table">
                <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Extension</th> 
                <th>Action</th>
                                              
                @foreach($product->images as $image)                    
                <tr>
                    <td>{{ $image->id }}</td>
                    <td></td>
                    <td>{{ $image->extention }}</td>                    
                    <td> </td>
                </tr>
                @endforeach
            
         
            </table>
         
</div>
@endsection