@extends('layout')

@section('content')
    
    <div class="col-sm-8">
        <h2>
            Editar producto
            <a class="btn btn-default" href="{{route('products.index')}}">Listado</a>
        </h2>
        {{-- {{dd($product->name)}} --}}
        @include('products.fragments.error')
        
        {!! Form::model(
                $product,
                [ 'route' => ['products.update',$product->id],
                  'method' => 'PUT'
                ]
            ) 
        !!}

            @include('products.fragments.form')

        {!! Form::close() !!}
        
    </div>
    
    <div class="col-sm-4">
        @include('products.fragments.aside')
    </div>
@endsection