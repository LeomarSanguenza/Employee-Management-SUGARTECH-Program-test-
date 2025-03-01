@extends('layout')

@section('content')
<h2>Add Employee</h2>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" name="FirstName" id="FirstName" class="form-control border-gray shadow-sm p-1 rounded" required>
    </div>

    <div class="mb-3">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text"  name="LastName" id="LastName" class="form-control" required>
    </div>
    <!-- <label>Last Name:</label> <input type="text" name="LastName" required><br> -->
     <div class="mb-3">
        <label for="Position" class="form-label">Position</label>
        <input type="text"  name="Position" id="Position" class="form-control" required>
    </div>
    <!-- <label>Position:</label> <input type="text" name="Position" required><br> -->

    <div class="mb-3">
        <label for="Salary" class="form-label">Salary</label>
        <input type="number" name="Salary" id="Salary" class="form-control" required>
    </div>
    <!-- <label>Salary:</label> <input type="number" name="Salary" required><br> -->
    <label for= "Gender" class="form-label">Gender:</label>
    <select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br>
    <label for= "Birthdate" class="form-label">Birthdate:</label> 
    <input type="date" class="form-control" name="Birthdate" required><br>
    <button type="submit">Save</button>
</form>
@endsection
