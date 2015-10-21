@extends('layout.main')

@section('content')

	<table class="table table-bordered">
		<th>Carrito</th> 
		<th>
			<figure>
				{{ HTML::image('img/carrito.gif', 'alt', []) }}
			</figure>
		</th>
	</table>

	<table class="table table-bordered">
  		<tr>
  			<th>Nombre</th>
  			<th>descripción</th>
  			<th>código</th>
  			<th>stock</th>
  			<th></th>	
  			<th></th>
  		</tr>
  		@foreach ($productos as $producto)
  		
  		<tr>
  			<td> {{ $producto->nombre }} </td>
    		<td> {{ $producto->descripcion }} </td>
    		<td> {{ $producto->codigo }} </td>
    		<td> {{ $producto->stock }} </td>
    		<td>
				<figure>
					<img src="{{ asset('img/'.$producto->image.'.jpg') }}" alt="{{ $producto->nombre }}" height="200" width="200" >
				</figure>
    		</td>
    		<td><a href=""></a>
    		<button type="button" class="btn btn-success"> <a href="{{ route('mail', $producto->id) }} ">Comprar</a></button></td>  
  		</tr>
 		
 		@endforeach	

	</table>
@stop