<?php

class Venta extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ventas';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = array('cliente_id', 'producto_id', 'despacho');

	public $timestamps = false;

	//relaciones id-id
	public function producto()
	{
		return $this->belongsTo('producto');
	} 

	public function cliente()
	{
		return $this->belongsTo('cliente');
	} 
}