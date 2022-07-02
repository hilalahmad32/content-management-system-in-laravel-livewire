<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Admin extends Component
{
    public $fname,
        $lname,
        $email,
        $username,
        $image,
        $content,
        $password;
    public $showTable = true, $createForm = false, $updateForm = false;
    public $search;

    public $edit_id,
        $edit_fname,
        $edit_lname,
        $edit_email,
        $edit_username,
        $old_image,
        $edit_content,
        $new_image;
    public $totalCount;
    use WithFileUploads;

    public function render()
    {
        if ($this->search != "") {
            $sarch_term = '%' . $this->search . '%';
            $admins = \App\Models\Admin::orderBy('id', 'desc')->where('username', 'LIKE', $sarch_term)->orWhere('email', 'LIKE', $sarch_term)->get();
            return view('livewire.admin.admin', compact('admins'))->layout('layout.admin-app');
        }
        $admins = \App\Models\Admin::orderBy('id', 'desc')->get();
        $this->totalCount = \App\Models\Admin::count();
        return view('livewire.admin.admin', compact('admins'))->layout('layout.admin-app');
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

        $this->edit_id = "";
        $this->edit_fname = "";
        $this->edit_lname = "";
        $this->edit_email = "";
        $this->edit_username = "";
        $this->old_image = "";
        $this->edit_content = "";
    }

    public function showForm()
    {
        $this->showTable = false;
        $this->createForm = true;
        $this->updateForm = false;
    }
    public function goBack()
    {
        $this->showTable = true;
        $this->createForm = false;
        $this->updateForm = false;
    }

    public function create()
    {
        $admin = new \App\Models\Admin();
        //escape or ignore the validaiton for some time ok
        //       $this->validate([
        //            'fname'=>['required','string'],
        //            'lname'=>['required','string'],
        //            'username'=>['required','string','admins:unique'],
        //            'email'=>['required','string','admins:unique'],
        //            'password'=>['required','string'],
        //            'content'=>['required','string'],
        //            'image'=>['required'],
        //        ]);
        $filename = "";
        if ($this->image != "") {
            $filename = $this->image->store('users', 'public');
        } else {
            $filename = "null";
        }
        $admin->fname = $this->fname;
        $admin->lname = $this->lname;
        $admin->email = $this->email;
        $admin->username = $this->username;
        $admin->password = Hash::make($this->password);
        $admin->description = $this->content;
        $admin->image = $filename;
        $result = $admin->save();
        if ($result) {
            session()->flash('success', 'Admin add Successfully');
            $this->resetField();
            $this->showTable = true;
            $this->createForm = false;
        }
    }

    public function edit($id)
    {

        $this->showTable = false;
        $this->createForm = false;
        $this->updateForm = true;
        $admins = \App\Models\Admin::findOrFail($id);
        $this->edit_id = $admins->id;
        $this->edit_fname = $admins->fname;
        $this->edit_lname = $admins->lname;
        $this->edit_email = $admins->email;
        $this->edit_username = $admins->username;
        $this->old_image = $admins->image;
        $this->edit_content = $admins->image;
    }

    public function update($id)
    {
        $admins = \App\Models\Admin::findOrFail($id);
        //escape or ignore the validaiton for some time ok
        //       $this->validate([
        //            'fname'=>['required','string'],
        //            'lname'=>['required','string'],
        //            'username'=>['required','string','admins:unique'],
        //            'email'=>['required','string','admins:unique'],
        //            'password'=>['required','string'],
        //            'content'=>['required','string'],
        //            'image'=>['required'],
        //        ]);
        $filename = "";
        $destination = public_path('storage\\' . $admins->image);
        if ($this->new_image != "") {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_image->store('users', 'public');
        } else {
            $filename = $this->old_image;
        }
        $admins->fname = $this->edit_fname;
        $admins->lname = $this->edit_lname;
        $admins->email = $this->edit_email;
        $admins->username = $this->edit_username;
        $admins->description = $this->edit_content;
        $admins->image = $filename;
        $result = $admins->save();
        if ($result) {
            session()->flash('success', 'Admin Update Successfully');
            $this->resetField();
            $this->showTable = true;
            $this->updateForm = false;
        }
    }

    public function delete($id)
    {
        $admins = \App\Models\Admin::findOrFail($id);
        $path = public_path('storage\\' . $admins->image);

        if (File::exists($path)) {
            File::delete($path);
        }
        $result = $admins->delete();
        if ($result) {
            session()->flash('success', 'Admin Delete Successfully');
        }
    }
}
