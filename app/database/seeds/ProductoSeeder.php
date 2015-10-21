<?php

class ProductoSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Producto::create([
			'nombre' => 'Tulipan',
			'descripcion' => '<p>Tulipa es un género de plantas perennes y bulbosas perteneciente a la familia Liliaceae.</p>',
			'codigo' => '01',
			'stock' => '10',
			'image' => 'tulipan'
		]);

		Producto::create([
			'nombre' => 'Rosas',
			'descripcion' => '<p>El género Rosa está compuesto por un conocido grupo de arbustos espinosos y floridos representantes principales de la familia de las rosáceas.</p>',
			'codigo' => '02',
			'stock' => '0',
			'image' => 'rosas'
		]);

		Producto::create([
			'nombre' => 'Geranio',
			'descripcion' => '<p>El género Geranium, comúnmente llamado geranio, agrupa 422 especies de plantas anuales, bienales y perennes.</p>',
			'codigo' => '03',
			'stock' => '12',
			'image' => 'geranio'
		]);

		Producto::create([
			'nombre' => 'Hortensias',
			'descripcion' => '<p>El género Hydrangea incluye plantas ornamentales, comúnmente conocidas como hortensias, nativas del sur y el este de Asia y de América.</p>',
			'codigo' => '04',
			'stock' => '0',
			'image' => 'hortensia'
		]);

		Producto::create([
			'nombre' => 'Camelia',
			'descripcion' => '<p>La Camelia fue considerada como "la flor más hermosa que hay bajo los cielos". Esta planta es símbolo de longevidad, fortuna y felicidad.</p>',
			'codigo' => '05',
			'stock' => '1',
			'image' => 'camelia'
		]);
	}
}