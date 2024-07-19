@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>insert car</h1>
    <a href="{{ route('admin.cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Origin</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->origin }}</td>
                    <td><img src="{{ asset('storage/' . $car->image_url) }}" width="100" alt="{{ $car->name }}"></td>
                    <td>
                        <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
