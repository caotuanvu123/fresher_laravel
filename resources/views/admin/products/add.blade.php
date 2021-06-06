@extends('admin.layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add product</h1>
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
        <form method="POST" action="{{ route('admin.product.store') }}">
            @csrf
            <div class="form-group">
                <label for="email">Name:</label>
                <input value="{{ old('name') }}" type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Price:</label>
                <input value="{{ old('price') }}" type="number" class="form-control" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection

