<?php

namespace App\Http\Controllers;

use App\Equipo;
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
        return view('product.index', ['response' => Equipo::paginate(10)]);
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

            Config::set('database.default', 'equiposCali');
        } else {

            Config::set('database.default', 'equiposMedellin');
        }

        DB::table('equipos')->insert([
            "descripcion" => $request->descripcion,
            "codigo" => $request->codigo,
            "precio" => $request->precio,
            "marca" => $request->marca,
            "referencia" => $request->referencia,
            "estado" => $request->estado,
            "sucursal" => $request->sucursal,
        ]);
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $product)
    {
        return view('product.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $product)
    {
        //
    }
}
