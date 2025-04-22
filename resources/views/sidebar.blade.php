@extends('layouts')
@section('content')
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-light border-end p-3" style="width: 250px; min-height: 100vh;">
      <h4>Sidebar</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
      </ul>
    </div>
  
    <!-- Main Content -->
    <div class="p-4 flex-grow-1">
      <h1>Main Content</h1>
      <p>This is your main area.</p>
    </div>
  </div>
  @endsection
  