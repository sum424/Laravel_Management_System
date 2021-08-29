@extends('layouts.layout')

@section('content')
<a href="/dye" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
<div class="line">

</div>
<div class="show-container text-justify">
    <h4>dye Name: <b>{{$dye->Name}}</b></h4>
    <h4>dye Brand: <b>{{$dye->Brand}}</b></h4>
    <h4>dye Price: <b>{{$dye->Price}}</b></h4>
    <h4>dye Quantity: <b>{{$dye->Quantity}}</b></h4>
    <h4>dye Purchased On: <b>{{$dye->created_at}}</b></h4>

    <a href="/dye/{{$dye->id}}/edit" class="btn btn-info">Edit</a>
</div>
@endsection