@extends('layouts.app')

@section('title', 'Producto')

@section('content')

    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2">
                                <a href="{{url('prestamo/create')}}" class="btn btn-md btn-info">
                                    Nuevo Prestamos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="container-fluid">
                        <table class="table table-bordered .table ">
                            <thead class="thead">
                            <tr>
                                <th class="hidden-xs"> Id Cliente      </th>
                                <th> Nombre Cliente      </th>
                                <th class="hidden-xs"> Valor Prestamo </th>
                                <th class="hidden-xs"> Interes   </th>
                                <th> Id Prestador    </th>
                                <th> Nombre Prestador   </th>
                                <th> Coutas   </th>
                                <th> Frecuencia de Pago   </th>
                                <th class="hidden-xs"> Sucursal    </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($response as $respon)
                                <tr data-id='{{$respon->id}}'>
                                    <td class="hidden-xs"> {{ $respon->idCliente }}           </td>
                                    <td> {{ $respon->nombreCliente, 80 }}              </td>
                                    <td>{{ $respon->valorPrestamo }}</td>
                                    <td>{{ $respon->porInteres }}</td>
                                    <td class="hidden-xs"> {{ $respon->idPrestador }}       </td>
                                    <td class="hidden-xs"> {{ $respon->nombrePrestador }}       </td>
                                    <td class="hidden-xs"> {{ $respon->cuotas }}       </td>
                                    <td class="hidden-xs"> {{ $respon->frecuenciaPago }}       </td>
                                    <td class="hidden-xs"> {{ $respon->sucursal }}       </td>
                                </tr>

                            @empty
                                <p class="text-center">
                                    No se encontro ningun registro
                                </p>
                            @endforelse
                            </tbody>
                            <tfoot>

                            </tfoot>

                        </table>
                    </div>
                    <div class="text-center">
                        {{ $response->appends($_GET)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
