@extends("layouts.app")
@section("content")
    {{--    <div><a href="">Create</a></div>--}}
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th><a class="btn btn-secondary" href="{{route('customer.create')}}">Add</a></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->email}}</td>
                <th><a href="{{route('customer.edit',$value->id)}}">edit</a></th>
                <th><a href="{{route('customer.del',$value->id)}}">delete</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
