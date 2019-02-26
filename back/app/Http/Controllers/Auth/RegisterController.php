<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date_naissance' => ['required', 'date', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'profession' => ['nullable', 'string', 'max:255'],
            'ville' => ['nullable','string', 'max:255'],
            'code_postal' => ['nullable','string', 'max:25'],
            'date_bapteme' => ['nullable','date', 'max:255'],
            'date_nouvelle_naissance' => ['nullable','date', 'max:255'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
     
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'date_naissance' => $data['date_naissance'],
            'telephone' => $data['telephone'],
            'profession' => $data['profession'],
            'ville' => $data['ville'],
            'code_postal' => $data['code_postal'],
            'date_bapteme' => $data['date_bapteme'],
            'date_nouvelle_naissance' => $data['date_nouvelle_naissance'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
