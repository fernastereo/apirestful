<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compradores = Buyer::has('transactions')->get(); //Trae los usuarios que tengan trasacciones (buyers) ya que hereda de users
        //has recibe el nombre de una relacion que tenga el modelo

        //antes de hacer uso del trait:
        //return response()->json(['data' => $compradores], 200);

        //usando el trait:
        return $this->showAll($compradores);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        //$comprador = Buyer::has('transactions')->findOrFail($id);

        //return response()->json(['data' => $comprador], 200);
        return $this->showOne($buyer);
    }

}
