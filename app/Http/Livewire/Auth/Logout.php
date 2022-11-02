<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Http\Request;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }

    public function logout(Request $request)
    {
        \Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('login');
    }
}
