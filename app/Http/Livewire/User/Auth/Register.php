<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    public $fname,
        $lname,
        $email,
        $username,
        $image,
        // $content
        $password;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.user.auth.register')->layout('layout.app');
    }


    public function resetField()
    {
        $this->fname = "";
        $this->lname = "";
        $this->email = "";
        $this->username = "";
        $this->image = "";
        $this->content = "";
        $this->password = "";

        // $this->edit_id = "";
        // $this->edit_fname = "";
        // $this->edit_lname = "";
        // $this->edit_email = "";
        // $this->edit_username = "";
        // $this->old_image = "";
        // $this->edit_content = "";
    }

    public function create()
    {
        $user = new User();
        $this->validate([
            'fname' => ['required '],
            'lname' => ['required '],
            'username' => ['required '],
            'email' => ['required '],
            'password' => ['required '],
        ]);
        $filename = "";
        if ($this->image != "") {
            $filename = $this->image->store('users', 'public');
        } else {
            $filename = "null";
        }
        $user->fname = $this->fname;
        $user->lname = $this->lname;
        $user->email = $this->email;
        $user->username = $this->username;
        $user->password = Hash::make($this->password);
        // $user->description = $this->content;
        $user->image = $filename;
        $result = $user->save();
        if ($result) {
            session()->flash('success', 'User Account Create Successfully');
            $this->resetField();
            return redirect(route('users.login'));
        }
    }
}
