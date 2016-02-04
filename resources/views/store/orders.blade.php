@extends('store.store')


@section('content')

<div class="container">
		
					
				<h3>Meus Pedidos</h3>
				
				<table class="table">
					<tbody>
						<tr>
							<th>#ID</th>
							<th>Itens</th>
							<th>Valor</th>
							<th>Status</th>
						</tr>						
						@foreach($order as order)
						<tr>
							<td>{{$order->id}}</td>
							<td>
							@foreach($order->items as $item)
								<li>{{ $item->product->name }}</li>								
							@endforeach
							</td>
							<td>{{$order->total}}</td>
							<td>{{$order->status}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
</div>
@stop


