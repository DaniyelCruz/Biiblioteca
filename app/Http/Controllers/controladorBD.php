<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
    
    public function index()
    {
        $resultRec = DB::table('tb_recuerdos') -> get();
        return view('clientes', compact('resultRec'));
    }

   
    //desplegar la vista formulario
    public function create()
    {
        return view('ingresar');
    }


    // Procesa el insert de recuerdos
    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos') -> insert([
            "titulo" => $request -> input('txtTitulo'),
            "recuerdo" => $request -> input('txtRecuerdo'),
            "fecha" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        return redirect('recuerdo') -> with('success',"tu recuerdo se guardo");
    }

    public function edit($id)
    {
        $consultaID= DB::table('tb_recuerdos')->where('idRecuerdo', $id)->first();
        return view('recuerdo', compact('consultaID'));
    }
    
    public function update(validadorDiario $request, $id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id) -> update([
            "titulo" => $request -> input('txtTitulo'),
            "recuerdo" => $request -> input('txtRecuerdo'),
            "updated_at" => Carbon::now()
        ]);
        return redirect('recuerdo') -> with('success',"tu recuerdo se actualizo");
    }

    public function eliminar($id)
    {
        $consultaID= DB::table('tb_recuerdos')->where('idRecuerdo', $id)->first();
        return view('delete', compact('consultaID'));
    }
    
    public function destroy(validadorDiario $request, $id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id) -> delete();
        return redirect('recuerdo') -> with('eliminado',"tu recuerdo se actualizo");
    }

}
