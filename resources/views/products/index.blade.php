@extends('layout')

@section('content')

    <div class="col-sm-8">
        
        @include('products.fragments.info');

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
                        <td><a class="btn btn-link" href="{{route('products.show',$product->id)}}">ver</a></td>
                        <td><a class="btn btn-link" href="{{route('products.edit',$product->id)}}">editar</a></td>
                        <td>
                            <form action="{{route('products.destroy',$product->id)}}"  method="POST">
                                
                                {!! csrf_field() !!}                               
                                {{ method_field('DELETE') }}
                                
                        
                                <button type="submit" class="btn btn-link">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->render()}}
    </div>

    <div class="col-sm-4">
        <h3>Mensaje</h3>
        @include('products.fragments.aside')
    </div>
@endsection