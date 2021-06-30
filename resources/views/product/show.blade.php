@extends('index')

@section('content')
    <div class="my-5">
        <img src="{{$product->image}}/600/300" alt="{{ $product->name }}" >
        <h1 class="text-primary">{{ $product->name }} - <em>{{ $product->price }}</em> fcfa</h1>
        <p class="fs-3 text-primary"><i class="lab la-readme"></i> <i class="lar la-eye"></i> <i class="las la-thumbs-up"></i> <i class="las la-thumbs-down"></i> <i class="las la-comment"></i></p>
        <p class="text-muted">{{ $product->updated_at }} </p> 
        <p>{{ $product->description }}</p>
    </div>
@stop