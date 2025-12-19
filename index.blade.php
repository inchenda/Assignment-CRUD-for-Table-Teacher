<!-- resources/views/teachers/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Teachers List</h2>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Add Teacher</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Degree</th>
                <th>Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->tid }}</td>
                <td>{{ $teacher->full_name }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->degree }}</td>
                <td>{{ $teacher->tel }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher->tid) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('teachers.edit', $teacher->tid) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('teachers.destroy', $teacher->tid) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
