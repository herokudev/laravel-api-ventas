<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show(){
        $items = Client::where('activo', true)->get();        
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
        $item = Client::where('id', $id)->get();
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
        $item = new Client();
        $item->nombre = $request->nombre;
        $item->apellido = $request->apellido;
        $item->sexo = $request->sexo;
        $item->fecha_nacimiento = $request->fecha_nacimiento;
        $item->tipo_documento = $request->tipo_documento;
        $item->num_documento = $request->num_documento;
        $item->direccion = $request->direccion;
        $item->telefono = $request->telefono;
        $item->email = $request->email;
        $item->save();
        return "El cliente se registro exitosamente";
    }

    public function update(Request $request, int $id)
    {
        $item = Client::find($id);
        if ($item) {
            $item->nombre = $request->nombre;
            $item->apellido = $request->apellido;
            $item->sexo = $request->sexo;
            $item->fecha_nacimiento = $request->fecha_nacimiento;
            $item->tipo_documento = $request->tipo_documento;
            $item->num_documento = $request->num_documento;
            $item->direccion = $request->direccion;
            $item->telefono = $request->telefono;
            $item->email = $request->email;
            $item->save();
            
            return "Cliente modificado !! ";            
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }

    public function delete(int $id)
    {
        $item = Client::find($id);
        if ($item) {
            $item->activo = 0;
            $item->save();
            
            return "Cliente borrado !! ";          
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }        
}
