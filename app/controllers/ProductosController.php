<?php

class ProductosController extends BaseController {

	public function index()
	{               

		$productos = Producto::where('stock', '>', 0)->get();

		return View::make('productos.index', compact('productos'));
	}

}