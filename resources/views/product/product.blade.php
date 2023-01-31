@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="search-area">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search product...">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 profile-menu text-right">
                <a class="text-center" href="{{route('profile')}}"><button class="text-center btn btn-secondary">Buyer-Profile</button></a>
                </div>
            </div>
            
        </div>

        <h1 class="mt-3 mb-3">All Products</h1>

        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header font-weight-bold text-center bg-success text-white">{{ __($product->product_name) }}</div>

                <div class="card-body">
                   <p class="text-justify">{{ ($product->product_description) }}</p>
                   <h5 class="font-weight-bold">Price: {{ ($product->product_price) }} tk</h5> 
                   <p class="text-primary">Stock Available: {{ ($product->product_inStock) }}</p>
                   <a href=""><button class="bg-warning">Add to cart</button></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
