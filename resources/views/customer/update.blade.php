@extends("layouts.app")
@section("content")
    <form action="{{route('customer.edit',$customer['id'])}}" method="post">
        @csrf
        <table class="table">
            <thead class="">
            <tr>
                <th scope="col">Name</th>
                <td><input type="text" name="name"value="{{$customer['name']}}"></td>
            </tr>
            <tr>
                <th scope="col">Address</th>
                <td><input type="text" name="address"value="{{$customer['address']}}"></td>
            </tr>
            </thead>
            <tr>
                <th scope="col">Email</th>
                <td><input type="text"name="email" value="{{$customer['email']}}"></td>
            </tr>
            <tr><td><input type="submit" name="Update"></td></tr>
        </table>
    </form>
@endsection
