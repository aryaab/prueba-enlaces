<?php

class producto extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'productos';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = array('nombre', 'descripcion', 'código', 'stock', 'image');

	public $timestamps = false;

	//relaciones id-id
	public function ventas(){
		return $this->hasMany('ventas');
	} 
}