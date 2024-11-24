<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) :RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'image' =>['required','mimes:png,jpg,jpeg'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $emp_image=$request->image;
        $name_gen=$request->name.time().".".$emp_image->getClientOriginalExtension();
         Image::make($emp_image)->save('users/images/'.$name_gen);
        $location_Path="users/images/".$name_gen;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' =>$request->role,
            'image' =>$location_Path
        ]);

        event(new Registered($user));

        Auth::login($user);

        return route(RouteServiceProvider::HOME);
    }
}
