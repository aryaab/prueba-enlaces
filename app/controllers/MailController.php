<?php

class MailController extends BaseController {

	public function mail($id)
	{

		$producto = Producto::where('id', $id)->first();

		$nombre = $producto->nombre;
		$description = $producto->descripcion;

	//	return $producto;


	 	$mail = 'ndbustos@gmail.com';
	 	$nombreCliente = 'Cliente';

	 	$data = ['mail' => $mail, 'nombre' => $nombre ,'from' => 'nd@gmail.com', 'from_name' => 'Enlaces'];

		Venta::create([
			'cliente_id' 		=> '1',
			'producto_id' 		=> $id,
			'despacho'			=> 'En 3 días hábiles'
		]);

	 	Mail::send('emails.welcome', ['key' => 'value',  'nombre' => $nombre, 
	 								'description' => $description
	 									],
	 	function($message) use ($data)
	 	{
	 		$message->from($data['from'], 'Enlaces');
     		$message->to( $data['mail'], 'Nidia')->subject('Orden de compra.');
	 	});

	 	$productos = Producto::where('stock', '>', 0)->get();

	 	return View::make('productos.index', compact('productos'));

	 }
}