<!-- resources/views/teachers/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Teacher</h2>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary mb-3">Back</a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
        </div>
        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="">--Select--</option>
                <option value="Male" {{ old('gender')=='Male' ? 'selected':'' }}>Male</option>
                <option value="Female" {{ old('gender')=='Female' ? 'selected':'' }}>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Degree</label>
            <input type="text" name="degree" class="form-control" value="{{ old('degree') }}">
        </div>
        <div class="mb-3">
            <label>Tel</label>
            <input type="text" name="tel" class="form-control" value="{{ old('tel') }}">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection
