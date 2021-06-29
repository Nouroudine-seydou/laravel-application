@extends('index')

@section('content')
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
          <div class="col-3">
            <div class="card border bg-light my-4">
                <img src="{{ $product->image }}/200" class="card-img-top" alt="" srcset="">
                <div class="card-body">
                    <a href="{{ route('product.show', ['slug' => $product->slug, 'id' => $product->id]) }}" class="card-title fs-5">{{ Str::substr($product->name, 0, 10) }}</a>
                    <p class="card-text">{{ Str::substr($product->description, 0, 50) }}</p>
                    <p class="card-text text-primary">{{ $product->price }} FCFA</p>
                    <a href="{{ route('product.show', ['slug' => $product->slug, 'id' => $product->id]) }}" class="btn btn-primary"> <i class="lab la-readme"></i> Voir plus</a>
                </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>
@stop