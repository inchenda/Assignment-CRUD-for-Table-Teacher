<!-- resources/views/teachers/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Teacher Details</h2>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary mb-3">Back</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $teacher->tid }}</td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td>{{ $teacher->full_name }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $teacher->gender }}</td>
        </tr>
        <tr>
            <th>Degree</th>
            <td>{{ $teacher->degree }}</td>
        </tr>
        <tr>
            <th>Tel</th>
            <td>{{ $teacher->tel }}</td>
        </tr>
    </table>
</div>
@endsection
