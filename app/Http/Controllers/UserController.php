<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();

        return view('home.user.index', compact('user'));
    }

    public function create()
    {
        return view('home.user.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|',
            'password' => 'required|min:8',
            'level' => 'required|',
         ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'level' => $request->level,
            'status' => 'Active',
        ]);

        return redirect('/user')->with('success', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $user = User::find($id);

        return view('home.user.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'level' => 'required|',
            'status' => 'required|',
         ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'status' => $request->status,
        ]);

        return redirect('/user')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect('/user')->with('confirm', 'Apakah data akan dihapus?');
    }
}
