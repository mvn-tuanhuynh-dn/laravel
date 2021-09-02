@extends('layouts.home')
@section('title', __('Create Product'))
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

@section('titlepage', __('Create Product'))

@section('contain')
    <div class="form-submit">
        <form  action="{{ route('product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="price">Giá sản phẩm</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Nhập gía sản phẩm">
            </div>
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Nhập mô tả sản phẩm">
            </div>
            <div class="form-group">
                <label for="image">Hình ảnh sản phẩm</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="quanlity">Số lượng sản phẩm</label>
                <input type="text" class="form-control" name="quanlity" id="quanlity" placeholder="Nhập số lượng sản phẩm">
            </div>
            <div class="action">
                <button type="submit" class="btn btn-success">Thêm mới</button>
                <a href="{{asset('product')}}" class="btn btn-back">Quay lại</a>
            </div>
        </form>
    </div>
@endsection