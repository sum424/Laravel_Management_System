@extends('layouts.layout')

@section('content')
<a href="/shampoo" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
<div class="line">

</div>
<div class="show-container text-justify">
    <h4>Shampoo Name: <b>{{$shampoo->Name}}</b></h4>
    <h4>Shampoo Brand: <b>{{$shampoo->Brand}}</b></h4>
    <h4>Shampoo Price: <b>{{$shampoo->Price}}</b></h4>
    <h4>Shampoo Quantity: <b>{{$shampoo->Quantity}}</b></h4>
    <h4>Shampoo Purchased On: <b>{{$shampoo->created_at}}</b></h4>

    <a href="/shampoo/{{$shampoo->id}}/edit" class="btn btn-info">Edit</a>
</div>
@endsection