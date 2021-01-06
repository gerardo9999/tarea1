<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function mostrar(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $personas = Persona::select(
                'ci',
                'nombre',
                'apellidos',
                'sexo',
                'fecha_nac'
                )->where('nombre','LIKE','%'.$query.'%')
                ->paginate(1);
        }else{
            $personas = Persona::paginate(1);
        }

        return view('crud.mostrar',[
            'personas' => $personas, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $persona            = new Persona();
        $persona->ci    = $request->get('ci');
        $persona->nombre    = $request->get('nombre');
        $persona->apellidos = $request->get('apellidos');
        $persona->fecha_nac = $request->get('fecha_nac');
        $persona->sexo      = $request->get('sexo'); 
        $persona->save();


        return redirect('/');

    }
    public function actualizar(Request $request){
        $persona            = Persona::findOrFail($request->ci);
        $persona->nombre    = $request->get('nombre');
        $persona->apellidos = $request->get('apellidos');
        $persona->fecha_nac = $request->get('fecha_nac');
        $persona->sexo      = $request->get('sexo'); 
        $persona->update();


        return redirect('/');
    }
    public function eliminar(Request $request){
        $persona  = Persona::findOrFail($request->ci);
        $persona->delete();

        return redirect('/');
    }
}
