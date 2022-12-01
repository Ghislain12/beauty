<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $firstname = '';

    /** @var string */
    public $telephone = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';


    public function register()
    {

        
        $this->validate([
            'name' => ['required', 'string'],
            'firstname' => ['required', 'string'],
            'telephone' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);
        
        // dd($this->firstname, $this->telephone, $this->password, $this->passwordConfirmation, $this->name, $this->email);
        $user = User::create([
            'email' => $this->email,
            'firstname' => $this->firstname,
            'telephone' => $this->telephone,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);
        // dd('good');

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
