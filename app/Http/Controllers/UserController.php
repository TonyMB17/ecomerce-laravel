<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:users.create')->only(['create','store']);
        $this->middleware('can:users.index')->only(['index']);
        $this->middleware('can:users.edit')->only(['edit','update']);
        $this->middleware('can:users.show')->only(['show']);
        $this->middleware('can:users.destroy')->only(['destroy']);
    }

    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }
    public function create()
    {
        $roles = Role::get();
        return view('admin.user.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:250',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required'
        ];

        $message = [
            'name.required' => 'El campo es requerido',
            'email.required' => 'El campo es requerido',
            'email.email' => 'No es un correo electronico',
            'password.required' => 'El campo es requerido'            
        ];

        $this->validate($request, $rules,$message);

        $user = User::create($request->all());
        $user->update(['password'=> Hash::make($request->password)]);
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index')->with('mensaje', 'Usuario almacenado');
    }
    public function show(User $user)
    {
        $total_purchases = 0;
        foreach ($user->sales as $key =>  $sale) {
            $total_purchases+=$sale->total;
        }
        $total_amount_sold = 0;
        foreach ($user->purchases as $key =>  $purchase) {
            $total_amount_sold+=$purchase->total;
        }
        return view('admin.user.show', compact('user', 'total_purchases', 'total_amount_sold'));
    }
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('admin.user.edit', compact('user', 'roles'));
    }
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:250',
            'email' => 'required|email|max:255|unique:users'
        ];

        $message = [
            'name.required' => 'El campo es requerido',
            'email.required' => 'El campo es requerido',
            'email.email' => 'No es un correo electronico'            
        ];

        $this->validate($request, $rules,$message);

        if ($user->id == 1) {
            return redirect()->route('users.index');
        }else{
            $user->update($request->all());
            $user->roles()->sync($request->get('roles'));
            return redirect()->route('users.index')->with('mensaje', 'Usuario actualizado');
        }
    }
    public function destroy(User $user)
    {
        if ($user->id == 1) {
            return back();
        } else {
            $user->delete();
            return back()->with('eliminar', 'ok');
        }
    }
}
