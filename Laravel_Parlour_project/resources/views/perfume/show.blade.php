@extends('layouts.layout')

@section('content')
<a href="/perfume" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
<div class="line">

</div>
<div class="show-container text-justify">
    <h4>perfume Name: <b>{{$perfume->Name}}</b></h4>
    <h4>perfume Brand: <b>{{$perfume->Brand}}</b></h4>
    <h4>perfume Price: <b>{{$perfume->Price}}</b></h4>
    <h4>perfume Quantity: <b>{{$perfume->Quantity}}</b></h4>
    <h4>perfume Purchased On: <b>{{$perfume->created_at}}</b></h4>

    <a href="/perfume/{{$perfume->id}}/edit" class="btn btn-info">Edit</a>
</div>
@endsection