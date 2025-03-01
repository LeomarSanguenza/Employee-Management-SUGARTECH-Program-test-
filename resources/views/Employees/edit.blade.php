@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Employee</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->EmpID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="FirstName" class="form-control" value="{{ old('FirstName', $employee->FirstName) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="LastName" class="form-control" value="{{ old('LastName', $employee->LastName) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" name="Position" class="form-control" value="{{ old('Position', $employee->Position) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Salary</label>
            <input type="number" name="Salary" class="form-control" value="{{ old('Salary', $employee->Salary) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="Gender" class="form-select">
                <option value="Male" {{ old('Gender', $employee->Gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('Gender', $employee->Gender) == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Birthdate</label>
            <input type="date" name="Birthdate" class="form-control" value="{{ old('Birthdate', $employee->Birthdate) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
