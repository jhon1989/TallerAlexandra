@extends('layouts.app')

@section('title', 'Producto')

@section('content')

    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Crear Prestamos
            </div>
            <div class="card-body">
                <form action="{{ action('ProductController@store') }}" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="idCliente">Id Cliente</label>
                            <input type="text" name="idCliente" required id="idCliente" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nombreCliente">Nombre Cliente</label>
                            <input type="text" name="nombreCliente" required  id="nombreCliente" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="valorPrestamo">Valor Prestamo</label>
                            <input type="number" min="1" step="any" required  name="valorPrestamo" id="valorPrestamo" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="porInteres">Porcentaje Interes</label>
                            <input type="number" name="porInteres" min="1" step="any" required  id="porInteres" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="idPrestador">Id Prestador</label>
                            <input type="text" name="idPrestador" required  id="idPrestador" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombrePrestador">Nombre Prestador</label>
                            <input type="text" name="nombrePrestador" required  id="nombrePrestador" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="cuotas">N. Coutas</label>
                            <input type="number"  min="1" name="cuotas" required  id="cuotas" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sucursal">Sucursal</label>
                            <select name="frecuenciaPago" id="frecuenciaPago" class="form-control">
                                <option value="Timestral">Timestral</option>
                                <option value="Mensual">Mensual</option>
                                <option value="Quincenal">Quincenal</option>
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
                        <a href="{{url('prestamo')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">Taller base de datos Distribudas</div>
        </div>
    </div>


@endsection
