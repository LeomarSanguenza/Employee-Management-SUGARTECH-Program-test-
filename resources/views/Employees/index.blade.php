@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Employees List</h2>

    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>
    <a href="{{ route('employees.summary') }}" class="btn btn-primary mb-3">Employee Summary</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->EmpID }}</td>
                <td>{{ $employee->FirstName }} {{ $employee->LastName }}</td>
                <td>{{ $employee->Position }}</td>
                <td>${{ number_format($employee->Salary, 2) }}</td>
                <td>{{ $employee->Gender }}</td>
                <td>{{ date('F d, Y', strtotime($employee->Birthdate)) }}</td>
                <td>
                    <a href="{{ route('employees.edit', $employee->EmpID) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->EmpID) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this employee?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
