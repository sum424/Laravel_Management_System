@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

               <!--  <div class="bg-success">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
            </div>
        </div>
    </div>
    <!-- products menu -->
    <div class="products">
        <h2 class="display-4">Go To <b style="color: #f7007f;">Products</b></h2>

        <!-- product cars -->
        <div class="card-container row ml-3">

            <div class="card ml-5 mt-2" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/shampoo.jpeg')}}" alt="Shampoo img">
                <div class="card-body">
                    <h5 class="card-title" style="color: #f7007f;">Shampoo</h5>
                    <p class="card-text">Go to Shampoo Section</p>
                    <a href="#" class="btn btn-dark">Go</a>
                </div>
            </div>
            <div class="card ml-5 mt-2" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/perfume.jpg')}}" alt="Shampoo img">
                <div class="card-body">
                    <h5 class="card-title" style="color: #f7007f;">Perfume</h5>
                    <p class="card-text">Go to Perfume Section</p>
                    <a href="#" class="btn btn-dark">Go</a>
                </div>
            </div>
            <div class="card ml-5 mt-2" style="width: 18rem;">
                <img class="card-img-top mt-2" src="{{asset('images/color-dye.jpg')}}" alt="Shampoo img">
                <div class="card-body">
                    <h5 class="card-title" style="color: #f7007f;">Color Dyes</h5>
                    <p class="card-text">Go to Color Dyes Section</p>
                    <a href="#" class="btn btn-dark">Go</a>
                </div>
            </div>
            <div class="card ml-5 mt-4" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/shwal.jpg')}}" alt="Shampoo img">
                <div class="card-body">
                    <h5 class="card-title" style="color: #f7007f;">Shawls</h5>
                    <p class="card-text">Go to Shawls Section</p>
                    <a href="#" class="btn btn-dark">Go</a>
                </div>
            </div>

        </div>
        
    </div>
</div>
@endsection
