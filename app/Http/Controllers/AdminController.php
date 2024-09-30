<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        
        // Logika untuk menampilkan dashboard admin
        return view('admin.dashboard'); // Pastikan Anda memiliki view ini
    }
    public function updateUserRole(Request $request, User $user)
{
    $request->validate([
        'role' => 'required|in:user,admin', // Validasi role
    ]);

    $user->role = $request->input('role');
    $user->save();

    return redirect()->back()->with('success', 'User role updated successfully.');
}

}


