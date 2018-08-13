@extends('layout')

@section('content')
    
    <div class="col-sm-8">
        <h2>
            {{ $product->name }}
            <a class="btn btn-default" href="{{route('products.edit',$product->id)}}">editar</a>
        </h2>
        
        <p> {{ $product->short }}</p>
        {!! $product->body !!}
    </div>
    
    <div class="col-sm-4">
        @include('products.fragments.aside')
    </div>
@endsection