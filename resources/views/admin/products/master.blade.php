@extends('admin.layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <h2>List products</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Categories</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
{{--            select *--}}
{{--            26 cau query/--}}
{{--2--}}
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td><a href="{{ route('admin.product.detail', ['id' => $product->id]) }}">Detail</a>
                            | <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}">Delete</a></td>
                    </tr>
                @empty
                    <p>No products</p>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection

