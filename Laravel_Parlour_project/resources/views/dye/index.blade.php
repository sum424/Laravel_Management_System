@extends('layouts.layout')

    @section('content')
    <a href="/" class="btn btn-outline-dark mt-3 ml-5 btn-md">Back</a>
    <a href="{{route('dye.create')}}" class="btn btn-add btn-dark mt-3 ml-5 btn-md">Add</a>
    <div class="container-index d-flex">
          <!-- image -->
        <figure class="c4-izmir c4-border-bottom-right c4-image-rotate-left c4-gradient-bottom-left" style="--primary-color: #f7007f; --secondary-color: #EAECC6; --image-opacity: 0.2;" tabindex="0">
            <!-- <img class="img-dye card-img-top " src="{{asset('images/dye.jpg')}}" alt="dye img"> -->
            <figcaption class="c4-reveal-right">
                <h3>dye</h3>
            </figcaption>
        </figure>  
        
        <!-- table -->
        <h3 class="text-center">dyes Table</h3>
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
                    @foreach($dyes as $dye)
                        <tr>
                            <td scope="row">{{$dye->id}}</td>
                            <td>{{$dye->Name}}</td>
                            <td>{{$dye->Brand}}</td>
                            <td>{{$dye->Price}}</td>
                            <td>{{$dye->Quantity}}</td>
                            <td>{{$dye->Price * $dye->Quantity}}</td>
                            <td>{{$dye->created_at}}</td>
                            <td><a href="/dye/{{$dye->id}}" class="btn btn-view btn-info mr-3 btn-sm">View</a></td>
                            <td>
                                <form action="/dye/{{$dye->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-delete btn-danger mr-3 btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table><br><br><br><br>
    </div>

@endsection