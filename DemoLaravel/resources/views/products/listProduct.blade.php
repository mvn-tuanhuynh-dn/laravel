@extends('layouts.home')
@section('title', __('List Product'))
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

@section('titlepage', __('Product'))


@section('contain')
    <a href="{{ route('createProduct') }}" class="btn btn-add"><i class="fas fa-plus"></i>Thêm</a>
    <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_products as $key => $product)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td style = "text-align: center;">
                            <img src="/images/{{ $product->image }}" alt="Anh san pham" width = 100px>
                        </td>
                        <td>{{ $product->quanlity }}</td>
                        <td>
                            <button type="button" class="btn btn-delete">Xoá</button>
                            <button type="button" class="btn btn-edit">Sửa</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection