<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\tiendas;
use App\Models\tiendas_productos;

class tiendas_productoscontroller extends Controller
{
    public function guardarproductoxtienda(Request $request){

        $validated = $request->validate([
            'id_producto' => 'required',
            'id_tienda' => 'required',
            'valor' => 'required',
            'compra_maxima' => 'required|numeric'
        ]);

        $existprod = 
        

        $Existproduct = productos::find($request->id_producto);

        $ExistStore = tiendas::find($request->id_tienda);

        if($Existproduct){
            if($ExistStore){
                $prodxtienda = new tiendas_productos();
                $prodxtienda->id = $request->id;
                $prodxtienda->compra_maxima = $request->compra_maxima;
                $prodxtienda->valor = $request->valor;
                $prodxtienda->id_promocion = $request->id_promocion;
                $prodxtienda->id_tienda = $request->id_tienda;
                $prodxtienda->id_producto = $request->id_producto;
                $prodxtienda->save();
                return "Producto agregado a la tienda exitosamente";

            }
            else{
                return "la tienda no existe";
            }
        }
        else{
            return "El producto no existe";
        }


  

    }
}
