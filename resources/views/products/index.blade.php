@extends('shared.layout')
@section('content')
<div class='container'>
    <div class='row' style="margin:20px;">
        <div class="col-12">
            <div class='card'>
                <div class="card-header">
                    <h2>Products</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                        Add New Product
                    </a>
                    <br/><br/>
                    @include('shared.cards')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection