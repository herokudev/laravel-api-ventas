<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function show(){
        $items = Articulo::where('activo', true)->get();        
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
        $item = Articulo::where('id', $id)->get();
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
        $item = new Articulo();
        $item->codigo = $request->codigo;
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->imagen = $request->imagen;
        $item->save();
        return "El articulo se registro exitosamente";
    }
    
    public function update(Request $request, int $id)
    {
        $item = Articulo::find($id);
        if ($item) {
            $item->codigo = $request->codigo;
            $item->nombre = $request->nombre;
            $item->descripcion = $request->descripcion;
            $item->imagen = $request->imagen;
            $item->save();
            
            return "Articulo modificado !! ";            
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }

    public function delete(int $id)
    {
        $item = Articulo::find($id);
        if ($item) {
            $item->activo = 0;
            $item->save();
            
            return "Articulo borrado !! ";          
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }        
}
