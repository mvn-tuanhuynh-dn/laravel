@extends('layouts.home')
@section('title', __('Post'))
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
.btn-back {
    color: #000;
    background-color: lightgrey;
    margin: 20px 0;
}
.empty-content {
    text-align: center;
}
</style>

@section('titlepage', __('Posts of User'))

@section('contain')
    @foreach( $listAllPostUser as $key => $user)
    <h1>Show All Post Of {{ $user->name }} </h1>
    @endforeach
    <a href="{{ route('users.index') }}"><button type="button" class="btn btn-back">Back</button></a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listAllPostUser as $listpost)
                @foreach($listpost->posts as $key => $post)
                    @if(empty($listpost->posts))
                        <tr>
                            <td class="empty-content" colspan="3">This user don't have any posts.</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
@endsection