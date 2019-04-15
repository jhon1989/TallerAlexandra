@extends('layouts.app')

@section('title', 'Producto')

@section('content')

    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Equipos
            </div>
            <div class="card-body">
                <form action="{{ action('ProductController@store') }}" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="decripcion">Codigo</label>
                            <input type="text" name="codigo" id="decripcion" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="decripcion">Precio</label>
                            <input type="number" min="1" step="any" name="precio" id="precio" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="estado">Marca</label>
                            <select name="marca" id="marca" class="form-control">
                                <option value="Asus">Asus</option>
                                <option value="Lenovo">Lenovo</option>
                                <option value="Soni">Soni</option>
                                <option value="HP">HP</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="stocMinimo">Referencia</label>
                            <input type="text" name="referencia" id="referencia" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="Nuevo">Nuevo</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Malo">Malo</option>
                                <option value="En Reparacion">En Reparacion</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="sucursal">Sucursal</label>
                        <select name="sucursal" id="sucursal" class="form-control">
                            <option value="Cali">Cali</option>
                            <option value="Medellin">Medellin</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{url('product')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">Taller base de datos Distribudas</div>
        </div>
    </div>


@endsection
