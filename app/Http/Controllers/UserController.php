<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    } 

    public function create() {
        return view('user.create');
    }
 
    public function store(Request $request) {
        $request->validate([
            'FirstName' => 'required|string|max:100',
            'LastName' => 'required|string|max:100',
            'Username' => 'required|string|max:100|unique:users,Username',
            'Password' => 'required|string|min:6',
            'UserRole' => 'required|in:Admin,SystemController,Employee'
        ]);
        User::create([
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Username' => $request->Username,
            'Password' => Hash::make($request->Password),
            'UserRole' => $request->UserRole,
        ]);
    
        return redirect()->route('user.index')->with('success', 'Employee added successfully!');
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('User.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);

    $request->validate([
        'FirstName' => 'required|string|max:100',
        'LastName'  => 'required|string|max:100',
        // Exclude the current user from the unique username check
        'Username'  => 'required|string|max:100|unique:users,Username,'.$user->UserID.',UserID',
        'Password'  => 'nullable|string|min:6', // Optional password field
        'UserRole'  => 'required|in:Admin,SystemController,Employee'
    ]);

    // Update fields
    $user->FirstName = $request->FirstName;
    $user->LastName  = $request->LastName;
    $user->Username  = $request->Username;
    
    // Only update password if a new one is provided
    if ($request->filled('Password')) {
        $user->Password = Hash::make($request->Password);
    }

    $user->UserRole  = $request->UserRole;
    $user->save();

    return redirect()->route('user.index')->with('success', 'User updated successfully!');
}

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }


    public function login(Request $request) {
        $request->validate([
            'Username' => 'required|string',
            'Password' => 'required|string'
        ]);

        // Find user by username
        $user = User::where('Username', $request->Username)->first();

        // Check if user exists and verify the password
        if ($user && Hash::check($request->Password, $user->Password)) {
            session(['LoggedUser' => $user->EmpID]); // Store session for login
            return redirect()->route('dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    public function logout() {
        session()->forget('LoggedUser');
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
    
}



