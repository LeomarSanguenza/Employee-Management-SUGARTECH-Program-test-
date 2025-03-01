@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user->UserID) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="FirstName" class="form-label">First Name</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" value="{{ old('FirstName', $user->FirstName) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="LastName" class="form-label">Last Name</label>
            <input type="text" name="LastName" id="LastName" class="form-control" value="{{ old('LastName', $user->LastName) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" name="Username" id="Username" class="form-control" value="{{ old('Username', $user->Username) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="Password" id="Password" class="form-control">
            <div class="form-text">Leave blank if you do not want to change the password.</div>
        </div>
        
        <div class="mb-3">
            <label for="UserRole" class="form-label">User Role</label>
            <select name="UserRole" id="UserRole" class="form-select">
                <option value="Admin" {{ old('UserRole', $user->UserRole) == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="SystemController" {{ old('UserRole', $user->UserRole) == 'SystemController' ? 'selected' : '' }}>System Controller</option>
                <option value="Employee" {{ old('UserRole', $user->UserRole) == 'Employee' ? 'selected' : '' }}>Employee</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
