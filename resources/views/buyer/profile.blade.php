@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="profile-info">
                <h1 class="font-weight-bold mb-3">Buyer Profile</h1>
                <h6>Buyer name: {{Auth::user()->name}}</h6>
                <h6>Buyer email: {{Auth::user()->email}}</h6>
            </div>
            <div class="ordered-products mt-5">
                <h3 class="font-weight-bold">Ordered Products list</h3>
            </div>
        </div>
    </div>
</div>
@endsection
