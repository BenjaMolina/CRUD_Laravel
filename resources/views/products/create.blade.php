@extends('layout')

@section('content')
    
    <div class="col-sm-8">
        <h2>
            Nuevo Producto
            <a class="btn btn-default" href="{{route('products.index')}}">Listado</a>
        </h2>
        
        @include('products.fragments.error')

        {!! Form::open( [ 'route' => ['products.store']])  !!}

            @include('products.fragments.form')

        {!! Form::close() !!}
        
    </div>
    
    <div class="col-sm-4">
        @include('products.fragments.aside')
    </div>
@endsection