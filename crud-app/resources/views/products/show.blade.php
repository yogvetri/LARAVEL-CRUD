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
            <div class="card cards" style="width: 50em; flex-direction: row;  border:1px solid #f5f2f2cc; box-shadow: 0 1px 1px rgb(0, 0, 0, 0.1 ); ">
                <img src="img/samsung.png" alt="Product" class="card-img-top" style=" max-width: 50%;
                margin: auto;
                padding: 0.5em;
                border-radius: 0.7em;" />
                <div class="card-body">
                    <h5 class="card-title fw-bold">Samsung Phone</h5>
                    <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, ratione! Nihil cupiditate neque dolores impedit voluptates accusamus porro nulla laborum possimus ipsa. Repellendus illum unde corporis, hic quibusdam nobis mollitia.
                     </p>
                     <p class="fw-bold">M.R.P <small class="text-danger text-decoration-line-through">Rs.25000</small></p>
                     <p class="fw-bold">Selling price <small class="text-success">Rs.20000</small></p>
                </div>
                <p>

                </p>
            </div>


        </div>
        <p></p>

@endsection