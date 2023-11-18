<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('principal', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            "name" => 'required|max:30',
            "username" => 'required|unique:users|min:3|max:50',
            "telefono" => 'required|string|min:3|max:20',
            "direccion" => 'required|max:60',
            "email" => 'required|unique:users|email|max:60',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->name,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion
        ]);

        return redirect()->route('post.index');
    }
}
