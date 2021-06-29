@extends('index')

@section('content')
    <img src="{{$product->image}}/600/300" alt="{{ $product->name }}" >
    <h1 class="text-primary">{{ $product->name }} - <em>{{ $product->price }}</em> fcfa</h1>
    <p class="text-muted">{{ $product->updated_at }} </p> 
    <p>{{ $product->description }}</p>
@stop