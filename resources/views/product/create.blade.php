@extends('base')

@section('content')

    <h1>Product page</h1>

    <form action="{{ route('postProduct') }}" method="post">
        @csrf
    <div class="form-group">
        <input type="text" name="title" value="" class="form-control" id="exampleInputText" placeholder="Enter name product" required/>
    </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Enter description</span>
        </div>
        <textarea name="description" class="form-control" aria-label="With textarea" rows="3"></textarea>
    </div>
<br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input name="price" type="text"  class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Enter price" required/>
        <div class="input-group-append">
            <span class="input-group-text">.00</span>
        </div>
    </div>

    <div class="input-group mb-3">
        <select name="category" class="custom-select" id="inputGroupSelect02">
            <option selected>Choose category</option>
            <option value="laptop">laptop</option>
            <option value="desktop">desktop</option>
            <option value="mobile">mobile</option>
            <option value="devices for home">devices for home</option>
        </select>
        <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
    </div>

    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>

    <div>
        <br><button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form>


@endsection