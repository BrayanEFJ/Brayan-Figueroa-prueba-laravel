<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class Productoscontroller extends Controller
{
    public function guardarproducto(Request $request){

        $validated = $request->validate([
            'nombre' => 'required|max:60',
            'presentacion' => 'required|max:25'
        ]);
        $buss = productos::find($request->id);
        $isbarcode = productos::find($request->id);

        if($buss){
            return "El producto ya existe";
        }
        elseif($isbarcode){
            return "El barcode ya existe";
        }
        else{
            $newbuss =new productos();
            $newbuss->id = $request->id;
            $newbuss->estado = $request->estado;
            $newbuss->kit = $request->kit;
            $newbuss->barcode = $request->barcode;
            $newbuss->nombre = $request->nombre;
            $newbuss->presentacion = $request->presentacion;
            $newbuss->descripcion = $request->descripcion;
            $newbuss->foto = $request->foto;
            $newbuss->peso = $request->peso;
            $newbuss->save();
            return "guardado";
        } 
    }


    
}
