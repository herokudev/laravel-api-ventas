<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function show(){
        $items = Worker::where('activo', true)->get();        
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
        $item = Worker::where('id', $id)->get();
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
        $item = new Worker();
        $item->nombre = $request->nombre;
        $item->apellido = $request->apellido;
        $item->sexo = $request->sexo;
        $item->fecha_nacimiento = $request->fecha_nacimiento;
        $item->tipo_documento = $request->tipo_documento;
        $item->num_documento = $request->num_documento;
        $item->direccion = $request->direccion;
        $item->telefono = $request->telefono;
        $item->email = $request->email;
        $item->acceso = $request->acceso;
        $item->usuario = $request->usuario;
        $item->password = $request->password;
        $item->save();
        return "El Trabajador se registro exitosamente";
    } 
    
    public function update(Request $request, int $id)
    {
        $item = Worker::find($id);
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
            $item->acceso = $request->acceso;
            $item->usuario = $request->usuario;
            $item->password = $request->password;
            $item->save();
            
            return "Trabajador modificado !! ";            
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }

    public function delete(int $id)
    {
        $item = Worker::find($id);
        if ($item) {
            $item->activo = 0;
            $item->save();
            
            return "Trabajador borrado !! ";          
        } else {
            return response()->json([
                'message' => 'No records found'
            ], 200);
        }    
    }    
}
