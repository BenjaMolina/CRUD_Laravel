@extends('layout')

@section('content')
    
    <div class="col-sm-4">
        <h3>Mensaje</h3>
    </div>
    <div class="col-sm-8">
        <h3>Listado de productos
            <a class="btn btn-primary" href="{{ route('products.create')}}"> Producto Nuevo</a>
        </h3>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del producto</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>
                            <strong>{{              $product->name}}</strong>
                            {{ $product->short}}
                        </td>
                        <td>ver</td>
                        <td>borrar</td>
                        <td>editar</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->render()}}
    </div>
@endsection