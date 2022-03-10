<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Revisor;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('admin.users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required',
            'email'    =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'    =>  'required',
            'unidad'    =>  'required',
            'telefono'    =>  'required',
            'rol'        =>  'required',
            ]);

        //$user = User::create($request->all());

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->save();

        $usuario = User::orderBy('created_at', 'desc')->first();

        $usuario->roles()->sync($request->rol);
        //$idusuario = ($usuario-> id) + 1;

        $revisor = Revisor::create([
            'unidad' => $request['unidad'],
            'telefono' => $request['telefono'],
            'user_id' => $user->id,
        ]);

        $revisor->save();

        return redirect()->route('admin.users.index')
        ->with('info', 'Se creo el usuario correctamente.');
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index')
        ->with('info', 'Se actualizaron los roles correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')
        ->with('info', 'Se eliminó el usuario correctamente');
    }
}
