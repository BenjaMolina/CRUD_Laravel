@extends('layout')

@section('content')
    <div class="alert alert-success" role="alert">ajshdkjahsjkhdjh</div>
    
    <div class="col-sm-4">
        <h3>Mensaje</h3>
    </div>
    <div class="col-sm-8">
        <h2>
            {{ $product->name }}
            <a class="btn btn-default" href="{{route('products.edit',$product->id)}}">editar</a>
        </h2>
        
        <p> {{ $product->short }}</p>
        {!! $product->body !!}
    </div>
@endsection