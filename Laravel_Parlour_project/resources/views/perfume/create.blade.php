@extends('layouts.layout')

@section('content')
    <a href="/perfume" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
    <div class="container">
        <div class="container-form">
            <form action="{{route('perfume.store')}}" method="POST">
            @csrf
                <div class="form-group column">
                    <label for="Name" class="col-sm-1-12 col-form-label"><h5>Name: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="Brand" class="col-sm-1-12 col-form-label"><h5>Brand: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Brand" id="Brand" placeholder="Product Brand">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="Price" class="col-sm-1-12 col-form-label"><h5>Price: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Price" id="Price" placeholder="Product Price">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="Quantity" class="col-sm-1-12 col-form-label"><h5>Quantity: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Quantity" id="Quantity" placeholder="Product Quantity">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="created_at" class="col-sm-1-12 col-form-label"><h5>Purchase Date: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="date" class="form-control" name="created_at" id="created_at" placeholder="Product Purchase Date">
                    </div>
                </div>
                <div class="form-group column create-btn">
                    <button type="submit" name="submit" class="btn btn-success btn-md ml-4">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection