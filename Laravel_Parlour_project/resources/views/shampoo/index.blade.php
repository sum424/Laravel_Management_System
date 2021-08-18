@extends('layouts.layout')

    @section('content')
    <a href="/" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
    <a href="{{route('shampoo.create')}}" class="btn btn-add btn-dark mt-3 ml-5 btn-md">Add</a>
    <div class="container-index d-flex">
          <!-- image -->
        <figure class="c4-izmir c4-border-bottom-right c4-image-rotate-left c4-gradient-bottom-left" style="--primary-color: #f7007f; --secondary-color: #EAECC6; --image-opacity: 0.2;" tabindex="0">
            <img class="img-shampoo card-img-top " src="{{asset('images/shampoo.jpeg')}}" alt="Shampoo img">
            <figcaption class="c4-reveal-right">
                <h3>Shampoo</h3>
            </figcaption>
        </figure>  

        <!-- table -->
        <h3 class="text-center">Shampoos Table</h3>
        <table class="table table-hover table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Purchase Date</th>
                    <th>View Details</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($shampoos as $shampoo)
                        <tr>
                            <td scope="row">{{$shampoo->id}}</td>
                            <td>{{$shampoo->Name}}</td>
                            <td>{{$shampoo->Brand}}</td>
                            <td>{{$shampoo->Price}}</td>
                            <td>{{$shampoo->Quantity}}</td>
                            <td>{{$shampoo->Price * $shampoo->Quantity}}</td>
                            <td>{{$shampoo->created_at}}</td>
                            <td><a href="/shampoo/{{$shampoo->id}}" class="btn btn-view btn-info mr-3 btn-sm">View</a></td>
                            <td><a href="/" class="btn btn-delete btn-danger mr-3 btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table><br><br><br><br>
    </div>

@endsection