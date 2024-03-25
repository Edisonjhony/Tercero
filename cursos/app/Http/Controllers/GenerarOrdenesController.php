<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneraOrdenes;
use DB;
use Auth;


class GenerarOrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $rq) 
    {
        $periodos =DB::select("SELECT * FROM aniolectivo");
        $jornadas =DB::select("SELECT * FROM jornadas");
        $meses = $this->meses();
        
        return view('generaOrdenes.index')
            ->with('periodos', $periodos)
            ->with('jornadas', $jornadas)
            ->with('meses', $meses);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function meses()
    {
        $meses= [
            '1' => 'Enero',
            '2' => 'Febrero',
            '3' => 'Marzo',
            '4' => 'Abril',
            '5' => 'Mayo',
            '6' => 'Junio',
            '7' => 'Julio',
            '8' => 'Agosto',
            '9' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre',
        ];
        return $meses;
    }

    public function mesesLetras($nmes){

//    $result = "";
//    if ($nmes==1){
//       $result .= "";

//    }

//   $nmes==1?$result = "":"";

$result = "";
switch  ($nmes) {
    case 1: $result = "E";break;
    case 1: $result = "F";break;
    case 1: $result = "M";break;

   }

    }


    public function generarOrdenes(Request $rq)
    {
        $datos = $rq->all();
        $anl_id = $datos['anl_id'];
        $jor_id = $datos['jor_id'];
        $mes = $datos['mes'];

        $estudiantes = DB::select("SELECT *, m.id AS mat_id  
                            FROM matriculas m 
                            JOIN estudiantes e ON m.est_id = e.id
                            WHERE m.anl_id = $anl_id
                            AND m.jor_id = $jor_id
                            AND m.mat_estado = 1");

           $valor_pagar=75; 
          
        foreach ($estudiantes as $e)

          dd($e-> mat_id);
         {


//    $input['mat_id']="";
//    $input['codigo']="";
//    $input['fecha_registro']=date ('y-m-d');
//    $input['valor_pagar']=$valor_pagar;
//    $input['fecha_pago']="";
//    $input['valor_pagado']=0;
//    $input['estado']=0;
//    $input['mes']="$mes";
//    $input['responsable']=Auth::user()->usr_usuario;
//    $input['secuencial']="";//secuencial de la orden 
//    $input['documento']=null;


 }

   }


}