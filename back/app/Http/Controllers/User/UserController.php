<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Hash;
use Validator ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create(){
      
        return view('users.add');
    }

//
    public function store(Request $data){
        
         $data->validate( [
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

         User::create([
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

        return redirect()->route('users.index')->with('ok', __('Le membre '.$data['prenom'].'  a bien été enregistré. Ses accès lui seront envoyé par mail'));

    }


    public function show (User $id){

        $user = $id;
        return view('users.show', compact('user'));
    }
}
