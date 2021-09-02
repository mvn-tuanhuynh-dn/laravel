@extends('layouts.home')
@section('title', __('List User'))
<style>
* {
    box-sizing: border-box;
}
body {
    font-size: 14px;
    color: #333;
    font-weight: 400;
    background-color: white;
    font-family: 'Poppins',sans-serif;
}
img {
    max-width: 100%;
}
.container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 15px;
}
.clearfix::after {
    content: "";
    display: table;
    clear: both;
}
.row {
    margin: 0 -15px;
}
.row::after {
    content: "";
    display: table;
    clear: both;
}
table > thead > tr > th:nth-child(4),
table > tbody > tr > td:nth-child(4) {
    width: 300px;
}
.btn {
    border: none;
    background: none;
    width: 80px;
}
.btn-add {
    background-color: #14d214;
    margin: 15px 0;
    color: white;
}
.btn-edit {
    color: #fff;
    background-color: lightskyblue;

}
.btn-delete {
    color: #fff;
    background-color: #dc3545;
}

.page-header {
    background-color: lightgrey;
}
</style>

@section('titlepage', __('User'))


@section('contain')
<a href="{{ route('users.create') }}" class="btn btn-add"><i class="fas fa-plus"></i>Add</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Academic</th>
            <th scope="col">Birth Day</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender($user->gender) }}</td>
                <td>{{ $user->academic($user->birthday) }}</td>
                <td>{{ date("d/m/Y", strtotime($user->birthday)) }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-info">Edit</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection