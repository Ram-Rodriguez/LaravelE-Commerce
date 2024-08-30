@extends('shared.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Create New Product</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('products') }}" method="POST">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="name" class="form-control" name='name' id="name" placeholder="Product Name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Address:</label>
                <input type="name" class="form-control" name='image' id="image" placeholder="www.imagelink.com/images">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="name" class="form-control" name='description' id="description" placeholder="Description">
            </div> 
            <input type="submit" value="Add" class="btn btn-success"></br>  
        </form>
    </div>
</div>

@stop