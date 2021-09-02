@extends('layouts.home')
@section('title', __('Edit User'))
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
.btn {
    border: none;
    background: none;
    width: 120px;
}
.page-header {
    background-color: lightgrey;
}
form {
    width: 600px;
}
.action {
    margin: 0 auto;
}
.btn-back {
    color: #000;
    background-color: lightgrey;
}
</style>

@section('titlepage', __('Edit User'))

@section('contain')
    <div class="form-submit">
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter user name" value="{{$user->name}}" required>
            </div>
            <div class="form-group">
				<label>Password</label>
				<input type="password" required name="password" class="form-control" placeholder="Enter password" required>
			</div>
            <div class="form-group">
                <label for="price">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
				<label for="gender">Gender</label>
				<select name="gender" required >
                    <option  value=1 @if($user->gender == 1) selected @endif>Male</option>
					<option  value=2 @if($user->gender == 2) selected @endif>Female</option>
				</select>
			</div>
            <div class="form-group">
                <label for="birthday">Birth Day</label>
                <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $user->birthday }}" required>
            </div>
            <div class="action">
                <button type="submit" class="btn btn-success">Add</button>
                <a href="{{ asset('users') }}" class="btn btn-back">Back</a>
            </div>
        </form>
    </div>
@endsection