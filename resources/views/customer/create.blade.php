@extends("layouts.app")
@section('content')
    <form method="post" action="{{route('customer.success')}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"name="name">
        </div><div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control"name="address">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control"name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
