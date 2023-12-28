


@extends('layouts.app')
@section('main')
<div class="row">
            <div class="d-flex justify-content-between">
                <h5><i class="bi bi-stack"></i> Product Details</h5>
                <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-square-dotted"></i> New Product</a>
            </div>
            <div class="col-md-12 table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>S.No</td>
                            <td>Image</td>
                            <td>Product Name</td>
                            <td>M.R.P</td>
                            <td>Selling Price</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><img src="img/samsung.png" style="width: 50px; height: 50px; object-fit: contain;" alt="Product"></td>
                            <td><a href="show.html">Samsung</a></td>
                            <td>25800</td>
                            <td>20000</td>
                            <td>
                                <a href="edit.html" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    </tbody>
                   
                </table>
            </div>
@endsection