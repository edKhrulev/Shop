<!-- Хранится в resources/views/child.blade.php -->

@extends('base')

@section('content')
    <h1>Registration page</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('postRegistration') }}" method="post">
        @csrf
            <div class="form-group">
                {{--<label for="exampleInputText">Username</label>--}}
            <input type="text" name="username" value="" class="form-control" id="exampleInputText" placeholder="Username" required/>
            </div>
            <div class="form-group">
                {{--<label for="exampleInputEmail1">Email address</label>--}}
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"/>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                {{--<label for="exampleInputPassword1">Password</label>--}}
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
                <small id="emailHelp" class="form-text text-muted">Must be at least 6 characters long.</small>
            </div>
            <div class="form-group">
                {{--<label for="exampleInputPassword2">Confirm password</label>--}}
                <input type="password" name="password_confirmation" value="" class="form-control" id="exampleInputPassword2" placeholder="Confirm password" required/>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

