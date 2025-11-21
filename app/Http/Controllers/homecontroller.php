<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class homecontroller extends Controller
{
    public function index()
    {
        $users = User::all();


        //compact untuk melempar data view
        return view('welcome', compact('users'));
    }

    public function show($id)
    {
        //find or fail digunakan untuk mencari data berdasarkan kolom id
        $user=User::findOrFail($id);
        return view('user-detail', compact('user'));
    }
}
