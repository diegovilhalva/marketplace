<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin/profile/index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required','max:100'],
            'email' => ['required','email','unique:users,email,' . Auth::user()->id]
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->back()->with('success','Perfil atualizado com sucesso!');
    }
}
