@extends('base')

@section('content')

    <h1>Cart page</h1>
    <p>order{{$order}}</p>

    @foreach ($products as $product)

        <p>This is title: {{ $product->title }}</p>
        <p>This is description: {{ $product->description }}</p>
        <p>This is price: {{ $product->price }}</p>
        <p>This is category: {{ $product->category }}</p><br>
        <img class="img-fluid" src="{{asset('/storage/' . $product->image)}}">

    @endforeach

@endsection