<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;
    public function render()
    {
        return view('livewire.admin.login')->layout('layout.admin-login');
    }

    public function login()
    {
        $this->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $admins = Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password]);
        if ($admins) {
            $admin = Auth::guard('admin')->user()->username;
            session()->flash('success', "{$admin} welcome Back");
            return redirect(route('admin.dashboard'));
        } else {
            session()->flash('error', 'Invalid username or password');
        }
    }
}
