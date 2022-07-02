<?php

namespace App\Http\Livewire\User;

use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Post extends Component
{

    public function render()
    {
        $posts = ModelsPost::where(['user_id' => Auth::user()->id], ['status' => 1])->orderBy('id', 'desc')->get();
        return view('livewire.user.post', compact('posts'))->layout('layout.user-app');
    }


    public function delete($id)
    {
        $posts = ModelsPost::findOrFail($id);
        $path = public_path('storage\\' . $posts->image);
        if (File::exists($path)) {
            File::delete($path);
        }

        $result = $posts->delete();
        session()->flash('success', 'User Post Successfully');
    }
}
