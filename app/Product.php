<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	const PRODUCTO_DISPONIBLE = 'disponible';
	const PRODUCTO_NO_DISPONIBLE = 'no disponible';

    protected $fillable = [
    	'name',
    	'description',
    	'quantity',
    	'status',
    	'image',
    	'seller_id',
    ];

    public function estaDisponible(){
    	//Esta funcion devolverá falso o verdadero, aqui lo que esta haciendo es comparar la propiedad estatus de un producto dado contra la constante PRODUCTO_DISPONIBLE, si es igual devuelve true, sino false
    	return $this->status == Product::PRODUCTO_DISPONIBLE;
    }
}
