@extends ('shared.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Profile</h2>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $email }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2">Name</label>
                <input type="email" class="form-control" id="exampleInputPassword1" value="{{ $name }}" disabled>
            </div>
        </form>
    </div>
</div>
@endsection
