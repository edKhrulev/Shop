@extends('base')

@section('content')

    <h1>Home page</h1>

    <div class="card-columns">
        @foreach ($products as $product)
            <div class="card">
                <img class="card-img-top" src="{{asset('/storage/' . $product->image)}}" alt="Card image cap" style="height:250px; width:auto">
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $product->title }}</h5>
                    <p class="card-text">model: {{ $product->description }}</p>
                    <p class="card-text">price: {{ $product->price }} $</p>
                    <p class="card-text">category: {{ $product->category }}</p>
                    <a href="/cart/{{$product->id}}" class="btn btn-primary btn-lg btn-block">BUY</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection