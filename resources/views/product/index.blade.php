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
                                <a href="{{url('product/create')}}" class="btn btn-md btn-primary">
                                    Nuevo Equipo
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
                                <th class="hidden-xs"> Marca   </th>
                                <th> Referencia    </th>
                                <th> Estado   </th>
                                <th class="hidden-xs"> Sucursal    </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($response as $respon)
                                <tr data-id='{{$respon->id}}'>
                                    <td class="hidden-xs"> {{ $respon->codigo }}           </td>
                                    <td> {{ str_limit($respon->descripcion, 80) }}              </td>
                                    <td>{{ $respon->precio }}</td>
                                    <td>{{ $respon->marca }}</td>
                                    <td class="hidden-xs"> {{ $respon->referencia }}       </td>
                                    <td class="hidden-xs"> {{ $respon->estado }}       </td>
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
