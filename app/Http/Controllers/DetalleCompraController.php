<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    public function show(){
        $items = DetalleCompra::all();   
        if ($items->count() > 0) {
            return response()->json($items);
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }        
    }

    public function getById(int $id)
    {
        $item = DetalleCompra::where('venta_id', $id)->get();
        if ($item->count() > 0) {
            return response()->json($item);
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }        
    }
    
    public function create(Request $request)
    {
        $item = new DetalleCompra();
        $item->compra_id = $request->compra_id;
        $item->articulo_id = $request->articulo_id;
        $item->cantidad = $request->cantidad;
        $item->precio = $request->precio;
        $item->descuento = $request->descuento;
        $item->save();
        return "Detalle compra se registro exitosamente";
    }

    public function update(Request $request, int $id)
    {
        $item = DetalleCompra::find($id);
        if ($item) {
            $item->compra_id = $request->compra_id;
            $item->articulo_id = $request->articulo_id;
            $item->cantidad = $request->cantidad;
            $item->precio = $request->precio;
            $item->descuento = $request->descuento;
            $item->save();
            
            return "Detalle compra se ha modificado !! ";            
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }
    
    
}
