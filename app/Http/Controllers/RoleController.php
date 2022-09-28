<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;


class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:roles.create')->only(['create','store']);
        $this->middleware('can:roles.index')->only(['index']);
        $this->middleware('can:roles.edit')->only(['edit','update']);
        $this->middleware('can:roles.show')->only(['show']);
        $this->middleware('can:roles.destroy')->only(['destroy']);
    }

    public function index()
    {
        $roles = Role::get();
        return view('admin.role.index', compact('roles'));
    }
    public function create()
    {
        $permissions = Permission::get();
        return view('admin.role.create', compact('permissions'));
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:250',
            'slug' => 'required|string|max:100',
            'description' => 'nullable|string|max:255'
        ];

        $message = [
            'name.required' => 'El campo es requerido',
            'slug.required' => 'El campo es requerido',
            'slug.string' => 'El valor no es correcto'            
        ];

        $this->validate($request, $rules,$message);
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permissions'));
        return redirect()->route('roles.index')->with('mensaje', 'Rol almacenado');
    }
    public function show(Role $role)
    {
        return view('admin.role.show', compact('role'));
    }
    public function edit(Role $role)
    {
        $permissions = Permission::get();
        return view('admin.role.edit', compact('role', 'permissions'));
    }
    public function update(Request $request, Role $role)
    {
        $rules = [
            'name' => 'required|max:250',
            'slug' => 'required|string|max:100',
            'description' => 'nullable|string|max:255'
        ];

        $message = [
            'name.required' => 'El campo es requerido',
            'slug.required' => 'El campo es requerido',
            'slug.string' => 'El valor no es correcto'            
        ];

        $this->validate($request, $rules,$message);
        
        $role->update($request->all());
        $role->permissions()->sync($request->get('permissions'));
        return redirect()->route('roles.index')->with('mensaje', 'Rol actualizado');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
