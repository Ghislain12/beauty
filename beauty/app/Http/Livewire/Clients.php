<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Clients extends Component
{
    public function hasClients($user_id): bool
    {
        if (Customer::where('user_id', $user_id)->exists()) {
            return true;
        } else {
            return false;
        }
    }

    public function listClients()
    {
        return Customer::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        if ($this->hasClients(Auth::user()->id)) {
            return view('livewire.clients', [
                'clients' => $this->listClients()
            ]);
        } else {
            return view('livewire.clients', [
                'clients' => null
            ]);
        }
    }
}
