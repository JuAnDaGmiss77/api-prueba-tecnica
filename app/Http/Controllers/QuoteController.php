<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuoteRequest $request)
    {
        $quote = new Quote();
        $quote->modelo = $request->modelo;
        $quote->nombre_completo = $request->nombre_completo;
        $quote->email = $request->email;
        $quote->numero_celular = $request->numero_celular;
        $quote->departamento = $request->departamento;
        $quote->ciudad = $request->ciudad;
        //verifico que no exista una cotizacion echa el mismo dia
        $is_quote = Quote::where('email', $request->email)->selectRaw('DATE(created_at) AS fecha_creacion')->first();
        $fecha_creacion = substr($is_quote->fecha_creacion,2);
        $dia_actual = date('y-m-d');
        if ($fecha_creacion == $dia_actual) {
            return response()->json([
                "message" => "Ya realizo una cotizacion el dia de hoy",
                "success" => false
            ], 200);
        } else {
            //$quote->save();
            //utilizo el controlador SendEmailController para realizar el envio de los correos
            $sendEmail = new SendEmailController();
            $sendEmail->sendEmail($quote);
            return response()->json([
                "message" => "cotizacion creada correctamente",
                "success" => true
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
