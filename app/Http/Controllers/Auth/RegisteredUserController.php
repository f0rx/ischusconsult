<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register', [
            'admins' => Role::where('name', 'like', '%admin%')->get(),
            'roles' => Role::where('name', 'not like', '%admin%')->get(),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'string|max:6',
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'numeric|min:8',
        ]);

        if ($request->role_id == '1') {
            return redirect()->back()->withErrors('A Super Admin already exists!');
        }

        try {
            $role = Role::where('id', $request->role_id)->firstOrFail();
        } catch (ModelNotFoundException $th) {
            return redirect()->back()->withErrors('Role with ID: ' . $request->role_id . ' does not exist!');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        // Assign new user roles
        $user->assignRole($role);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME)->session('success');
    }
}
