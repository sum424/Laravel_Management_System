@extends('layouts.layout')

@section('content')
<a href="/shawl" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
<div class="line">

</div>
<div class="show-container text-justify">
    <h4>shawl Name: <b>{{$shawl->Name}}</b></h4>
    <h4>shawl Brand: <b>{{$shawl->Brand}}</b></h4>
    <h4>shawl Price: <b>{{$shawl->Price}}</b></h4>
    <h4>shawl Quantity: <b>{{$shawl->Quantity}}</b></h4>
    <h4>shawl Purchased On: <b>{{$shawl->created_at}}</b></h4>

    <a href="/shawl/{{$shawl->id}}/edit" class="btn btn-info">Edit</a>
</div>
@endsection