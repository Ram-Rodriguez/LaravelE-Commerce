@extends('shared.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Edit Product</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('products/' .$products->id) }}" method="POST">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="name" class="form-control" name='name' id="name" value="{{ $products->name }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Address:</label>
                <input type="name" class="form-control" name='image' id="image" value="{{ $products->image }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="name" class="form-control" name='description' id="description" value="{{ $products->description }}">
            </div> 
            <input type="submit" value="Update" class="btn btn-success"></br>  
        </form>
    </div>
</div>

@stop