@extends('layouts.app')

@section('title', 'Producto')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2">
                                <a href="{{url('product/create')}}" class="btn btn-md btn-success">
                                    Nuevo Producto
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
                                <th class="hidden-xs"> Codigo      </th>
                                <th> Descripcion      </th>
                                <th class="hidden-xs"> Precio </th>
                                <th class="hidden-xs"> Cantidad   </th>
                                <th> Stock Minimo    </th>
                                <th> Stock Maximo   </th>
                                <th class="hidden-xs"> Sucursal    </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($response as $respon)
                                <tr data-id='{{$respon->id}}'>
                                    <td class="hidden-xs"> {{ $respon->codigo }}           </td>
                                    <td> {{ str_limit($respon->descripcion, 80) }}              </td>
                                    <td>{{ number_format($respon->precio, 2,",",".") }}</td>
                                    <td>{{ number_format($respon->cantidad, 2,",",".") }}</td>
                                    <td class="hidden-xs"> {{ $respon->stockMinimo }}       </td>
                                    <td class="hidden-xs"> {{ $respon->stockMaximo }}       </td>
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
