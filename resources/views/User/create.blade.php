@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Add Users</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="FirstName" class="form-label">First Name</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="LastName" class="form-label">Last Name</label>
            <input type="text" name="LastName" id="LastName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" name="Username" id="Username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="Password" id="Password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="UserRole" class="form-label">User Role</label>
            <select name="UserRole" id="UserRole" class="form-select">
                <option value="Admin">Admin</option>
                <option value="SystemController">System Controller</option>
                <option value="Employee">Employee</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
