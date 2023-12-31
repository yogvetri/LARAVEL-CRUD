@extends('layouts.app')
@section('main')
<div class="row">
            <h5><i class="bi bi-view-list"></i> Product Details</h5>
            <hr />
            <nav class="my-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">View Product</li>

                </ol>
            </nav>
            <div class="card cards" id="card">
                <img src="/products/{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top" id="card-img" />
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                    <p class="card-text text-secondary">{{ $product->description }}
                     </p>
                     <p class="fw-bold">M.R.P <small class="text-danger text-decoration-line-through">Rs.{{ $product->mrp }}</small></p>
                     <p class="fw-bold">Selling price <small class="text-success">Rs.{{ $product->price }}</small></p>
                </div>
                <p>

                </p>
            </div>


        </div>
        <p></p>

@endsection