@extends('base')

    @section('content')

    <h1>Cart page</h1>

    {{--<p>order{{$order}}}</p>--}}

    <div class="card-columns">
        @foreach ($products as $product)
        <div class="card">
                <img class="card-img-top" src="{{asset('/storage/' . $product->image)}}" alt="Card image cap" style="height:240px; width:auto">
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $product->title }}</h5>
                    <p class="card-text">model: {{ $product->description }}</p>
                    <p class="card-text">price: {{ $product->price }} $</p>
                    <p class="card-text">category: {{ $product->category }}</p>
                </div>
        </div>
        @endforeach
    </div>
        <div>
            <a href="/order" class="btn btn-success btn-lg btn-block">ORDER</a>
            <a href="/" class="btn btn-primary btn-lg btn-block">Back to products</a>
        </div>


    @endsection