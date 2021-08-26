@extends('layouts.layout')

@section('content')
    <a href="/perfume" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
    <div class="container-form">
    <form action="/perfume/{{$perfume->id}}" method="POST">
    @csrf
    @method('PATCH')
                <div class="form-group column">
                    <label for="Name" class="col-sm-1-12 col-form-label"><h5>Name: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Name" id="Name" value="{{$perfume->Name}}">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="Brand" class="col-sm-1-12 col-form-label"><h5>Brand: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Brand" id="Brand" value="{{$perfume->Brand}}">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="Price" class="col-sm-1-12 col-form-label"><h5>Price: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Price" id="Price" value="{{$perfume->Price}}">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="Quantity" class="col-sm-1-12 col-form-label"><h5>Quantity: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="Quantity" id="Quantity" value="{{$perfume->Quantity}}">
                    </div>
                </div>
                <div class="form-group column">
                    <label for="created_at" class="col-sm-1-12 col-form-label"><h5>Updated Date: </h5></label>
                    <div class="col-sm-1-12">
                        <input type="date" class="form-control" name="created_at" id="created_at" value="{{$perfume->updated_at}}">
                    </div>
                </div>
                <div class="form-group column edit-btn">
                    <button type="submit" name="submit" class="btn btn-success btn-md ml-4">Edit</button>
                </div>
    </form>
    </div>
@endsection