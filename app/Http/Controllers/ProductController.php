<?php

namespace App\Http\Controllers;

use App\Prestamos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('database.default', 'mysql');
        return view('product.index', ['response' => Prestamos::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->sucursal == 'Cali') {

            Config::set('database.default', 'prestamosCali');
        } else {

            Config::set('database.default', 'prestamosMedellin');
        }

        DB::table('prestamos')->insert([
            "idCliente" => $request->idCliente,
            "nombreCliente" => $request->nombreCliente,
            "valorPrestamo" => $request->valorPrestamo,
            "porInteres" => $request->porInteres,
            "idPrestador" => $request->idPrestador,
            "nombrePrestador" => $request->nombrePrestador,
            "cuotas" => $request->cuotas,
            "frecuenciaPago" => $request->frecuenciaPago,
            "sucursal" => $request->sucursal,
        ]);
        return redirect('prestamo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestamos  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamos $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestamos  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamos $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestamos  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamos $product)
    {
        return view('product.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestamos  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamos $product)
    {
        //
    }
}
