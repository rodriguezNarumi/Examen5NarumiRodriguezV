<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
  
    public function index()
    {
        $clientes = Clientes::all();

        return view('modulos.Clientes')->with('clientes', $clientes);
    }

   
    public function store(Request $request)
    {
        $datos = request();

        Clientes::create([

            'nombre'=>$datos["nombre"],
            'telefono'=>$datos["telefono"],
            'documento'=>$datos["documento"],
            'direccion'=>$datos["direccion"],
            'fechaNac'=>$datos["fechaNac"],
        ]);

        return redirect('Clientes')->with('ClienteCreado', 'OK');

    }

    public function edit($cli)
    {
        
         $cli = Clientes::find($cli);

         $clientes = Clientes::all();

         return view('modulos.Clientes', compact('cli', 'clientes'));




    }


    public function update(Request $request, $id)
    {

        $datos = request();

        DB::table('clientes')->where('id', $id)->update(['nombre'=>$datos["nombre"], 'documento'=>$datos["documento"], 'fechaNac'=>$datos["fechaNac"], 'telefono'=>$datos["telefono"], 'direccion'=>$datos["direccion"]]);

        return redirect('Clientes')->with('ClienteActualizado', 'OK');
        //$datos = request();

       
            // DB::table('clientes')->where('id', $id)->update(['nombre'=>$datos["nombre"], 'documento'=>$datos["documento"],
             //'fechaNac'=>$datos["fechaNac"], 'telefono'=>$datos["telefono"], 'direccion'=>$datos["direccion"]]);

            // return redirect('Clientes')->with('ClienteActualizado', 'OK');

    }



    public function create()
    {
        //
    }

   
    public function show(Clientes $clientes)
    {
        //
    }

    public function destroy($id)
    {
        
        Clientes::destroy($id);

        return redirect('Clientes');

    }

    public function CrearClienteVenta(Request $request)
    {

        $datos = request();

        Clientes::create([

            'nombre'=>$datos["nombre"],
            'telefono'=>$datos["telefono"],
            'documento'=>$datos["documento"],
            'direccion'=>$datos["direccion"],
            'fechaNac'=>$datos["fechaNac"],
        ]);

        return redirect('Crear-Ventas')->with('ClienteCreado', 'OK');
    }
}
