@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>List products</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>Edit | Delete</td>
                    </tr>
                @empty
                    <p>No products</p>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection

