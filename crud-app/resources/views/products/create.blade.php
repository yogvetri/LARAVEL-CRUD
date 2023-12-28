@extends('layouts.app')
@section('main')
<div class="row">
            <h5><i class="bi bi-plus-circle-fill"></i> Add New Product</h5>
            <hr/>
            <nav class="my-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"> Add New Product</li>

                </ol>
            </nav>
            <div class="col-md-6">
                <form action="#" method="post">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="mrp" class="form-label">M.R.P</label>
                            <input type="text" name="mrp" id="mrp" class="form-control" placeholder="Enter M.R.P">
                        </div>
                        <div class="col-md-6">
                            
                                <label for="price" class="form-label">Selling Price</label>
                                <input type="text" name="price" id="price" class="form-control" placeholder="Enter Selling Price">
                           
                        </div>

                        
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Description " class="form-label">Description</label>
                            <textarea name="Description" id="Description" class="form-control" style="resize: none; height: 150px;" placeholder="Enter Product Description"></textarea>
                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>
                    <div class="md-3">
                        <button type="submit" class="btn btn-dark"><i class="bi bi-bookmark-plus"></i> Save Product</button>
                        <button type="reset" class="btn btn-danger"><i class="bi bi-x-circle"></i> Clear All</button>


                        <p></p>
                    </div>



                </form>
            </div>
            
            </div>
            @endsection