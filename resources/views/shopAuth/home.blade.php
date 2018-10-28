@extends('base')

@section('content')

    <h1>Home page</h1>
    {{--<div class="position-fixed">--}}
    {{--<form class="form-inline">--}}
    {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
    {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
    {{--</form>--}}
    {{--</div>--}}
    @foreach ($products as $product)

        <p>This is title: {{ $product->title }}</p>
        <p>This is description: {{ $product->description }}</p>
        <p>This is price: {{ $product->price }}</p>
        <p>This is category: {{ $product->category }}</p>
        <a href="/cart/{{$product->id}}" class="btn btn-success">Buy</a>
    @endforeach


@endsection