<?php

namespace App\Http\Livewire\User\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.user.auth.login')->layout('layout.app');
    }

    public function login()
    {
        $this->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($user) {
            $users = Auth::user()->username;
            session()->flash('success', "{$users} welcome Back");
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Invalid username or password');
        }
    }
}
