<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function show(){
        $items = DetalleVenta::all();   
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
        $item = DetalleVenta::where('venta_id', $id)->get();
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
        $item = new DetalleVenta();
        $item->venta_id = $request->venta_id;
        $item->articulo_id = $request->articulo_id;
        $item->cantidad = $request->cantidad;
        $item->precio = $request->precio;
        $item->descuento = $request->descuento;
        $item->save();
        return "Detalle venta se registro exitosamente";
    }
    
    public function update(Request $request, int $id)
    {
        $item = DetalleVenta::find($id);
        if ($item) {
            $item->venta_id = $request->venta_id;
            $item->articulo_id = $request->articulo_id;
            $item->cantidad = $request->cantidad;
            $item->precio = $request->precio;
            $item->descuento = $request->descuento;
            $item->save();
            
            return "Detalle venta se ha modificado !! ";            
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }
  
}
