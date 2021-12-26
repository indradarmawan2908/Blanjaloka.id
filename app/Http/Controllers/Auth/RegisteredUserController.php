<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = DB::table('role')->paginate(10);
        $provinsis = DB::table('provinsi')->paginate(10);
        $kotas = DB::table('kota')->paginate(10);
        $kelurahans = DB::table('kelurahan')->paginate(10);
        $kecamatans = DB::table('kecamatan')->paginate(10);
        return view('auth.register', compact('roles','provinsis','kotas','kelurahans','kecamatans'));
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
            'name' => ['required', 'string', 'max:100'],
            'provider_id' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:300'],
            'postal_code' => ['string', 'max:20'],
            'phone' => ['required', 'string', 'max:20'],
            'referral_code' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'provider_id' => $request->provider_id, 
            'address' => $request->address,
            'role' => $request->role,
            'id_provinsi' => $request->id_provinsi,
            'id_kecamatan' => $request->id_kecamatan,
            'id_kota' => $request->id_kota,
            'id_kelurahan' => $request->id_kelurahan,
            'postal_code' => $request->postal_code,
            'phone' => $request->phone,
            'referral_code' => $request->referral_code,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
