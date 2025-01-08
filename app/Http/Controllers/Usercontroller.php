<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $AllUser = User::all();
        return view('users.index', ["AllUser" => $AllUser]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect(route("users.index"));
    }

    public function show(User $user)
    {
        return view('users.show', ["User" => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ["User" => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->update();

        return redirect(route("users.index"));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route("users.index"));
    }
}
