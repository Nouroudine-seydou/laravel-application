@extends('index')
@section('content')
@include('partials/header')
  <div class="row">
  @foreach ($products as $product)
    <div class="col-3">
      <div class="card border bg-light my-4">
          <img src="{{ $product->image }}/200" class="card-img-top" alt="" srcset="">
          <div class="card-body">
              <a href="{{ route('product.show', ['slug' => $product->slug, 'id' => $product->id]) }}" class="card-title fs-5">{{ Str::substr($product->name, 0, 10) }}</a>
              <p class="card-text">{{ Str::substr($product->description, 0, 50) }}</p>
              <p class="card-text text-primary">{{ $product->price }} FCFA</p>
              <a href="{{ route('product.show', ['slug' => $product->slug, 'id' => $product->id]) }}" class="btn btn-primary">Voir plus <i class="las la-arrow-circle-right"></i></a>
              <i class="lab la-readme"></i> <i class="lar la-eye"></i> <i class="las la-thumbs-up"></i> <i class="las la-thumbs-down"></i> <i class="las la-comment"></i>
            </div>
      </div>
    </div>
  @endforeach
  </div>
  <div class="text-align-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        @if ($products->currentPage() != 1)
          <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}">Previous</a></li>
        @endif
        @foreach ($products->getUrlRange($products->currentPage() - 5, $products->currentPage() + 5) as $key => $pageUrl)
          @if ($key > 0 && $key < $products->lastPage())
            <li class="page-item {{ $products->currentPage() == $key ? 'active' : ''}}"><a class="page-link" href="{{ $pageUrl }}">{{ $key }}</a></li>
          @endif
        @endforeach
        @if ($products->currentPage() != $products->lastPage())
          <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a></li>
        @endif
      </ul>
    </nav>
  </div>

@stop