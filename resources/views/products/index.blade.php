
@extends('app')
@section('content')
<div class="container">
            <h1>products</h1>
     
            <a href="{{ route('products.create') }}" class="btn btn-default">New product</a>
            <br>
            <br>
            
            
            <table class="table">
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th> 
                <th>Price</th>
                <th>Category</th>  
                <th>Action</th> 
                               
                @foreach($products as $product)
                    
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ str_limit($product->description, $limit = 100, $end = '...') }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td><a href="{{ route('products.edit',['id'=>$product->id]) }}">Edit</a> </td> |
                    <td><a href="{{ route('products.images',['id'=>$product->id]) }}">Images</a> </td> |
                    <td><a href="{{ route('products.destroy',['category'=>$product->id]) }}">Deletar</a> </td>
                </tr>
                @endforeach
            </table>
            {!! $products->render() !!}
</div>
@endsection