<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function show(){
        $items = Compra::where('activo', true)->get();        
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
        $item = Compra::where('id', $id)->get();
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
        $item = new Compra();
        $item->supplier_id = $request->supplier_id;
        $item->worker_id = $request->worker_id;
        $item->fecha = $request->fecha;
        $item->tipo_comprobante = $request->tipo_comprobante;
        $item->serie = $request->serie;
        $item->correlativo = $request->correlativo;
        $item->save();
        return "La compra se registro exitosamente";
    }

    public function update(Request $request, int $id)
    {
        $item = Compra::find($id);
        if ($item) {
            $item->supplier_id = $request->supplier_id;
            $item->worker_id = $request->worker_id;
            $item->fecha = $request->fecha;
            $item->tipo_comprobante = $request->tipo_comprobante;
            $item->serie = $request->serie;
            $item->correlativo = $request->correlativo;
            $item->save();
            
            return "La venta se ha modificado !! ";            
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }
    
    public function delete(int $id)
    {
        $item = Compra::find($id);
        if ($item) {
            $item->activo = 0;
            $item->save();
            
            return "La compra se ha borrado !! ";          
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }    
}
