<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profil extends Component
{
    public function authenticatedUser(): object
    {
        return Auth::user();
    }

    public function render()
    {
        // dd($this->authenticatedUser());
        return view('livewire.profil', [
            'user' => $this->authenticatedUser()
        ]);
    }
}
