@extends('layouts.app')

@section('title', 'Producto')

@section('content')

    <div class="container">
        <div class="panel panel-default col-md-12 col-md-offset-10">
            <form action="{{ action('ProductController@store') }}" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <fieldset>
                        <legend class="text-center header">
                            <h4 class="text-center text-success">Crear nuevo producto</h4>
                        </legend>

                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="decripcion">Codigo</label>
                            <input type="text" name="codigo" id="decripcion" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="decripcion">Precio</label>
                            <input type="text" name="precio" id="precio" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="decripcion">Cantidad</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="stocMinimo">Stock-Minimo</label>
                            <input type="text" name="stocMinimo" id="stocMinimo" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="stockMaximo">Stock Maximo</label>
                            <input type="text" name="stockMaximo" id="stockMaximo" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="sucursal">Sucursal</label>
                            <select name="sucursal" id="sucursal" class="form-control">
                                <option value="Cali">Cali</option>
                                <option value="Bogota">Bogota</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="{{url('product')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </fieldset>
            </form>
        </div>
    </div>


@endsection
