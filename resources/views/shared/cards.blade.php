<div class="card-group">
    @foreach($products as $item)
    <div class="card" id="{{ $loop->iteration }}">
        <img src="{{ $item->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->description }}</p>
            <p class="card-text"><small class="text-body-secondary">Last updated at {{ $item->updated_at }}</small></p>
        </div>
        <div class="card-footer">
            <a href="{{ url('/products/' . $item->id . '/edit') }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>

            <form method='POST' action="{{ url('/products' . '/' .$item->id) }}" accept-charset='UTF-8' style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm("Confirm deleting this product?")">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>