@extends('base')

@section('content')
    <h1>Login page</h1>

    <form action="{{ route('postLogin') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted">Must be at least 6 characters long.</small>
            </div>
            {{--<div class="form-group form-check">--}}
                {{--<input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">--}}
                {{--<label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
            {{--</div>--}}
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
@endsection