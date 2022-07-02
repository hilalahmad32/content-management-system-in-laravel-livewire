<?php

namespace App\Http\Livewire\User;

use App\Models\category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    public $title,
        $cat_id,
        $image,
        $content;
    public $categorys;


    use WithFileUploads;
    public function render()
    {
        $this->categorys = category::all();
        return view('livewire.user.create-post')->layout('layout.user-app');
    }


    public function resetField()
    {
        $this->title = "";
        $this->cat_id = "";
        $this->image = "";
        $this->content = "";
    }


    public function store()
    {
        $posts = new Post();
        $this->validate([
            'title' => ['required'],
            'cat_id' => ['required'],
            'content' => ['required'],
        ]);
        $filename = "";
        if ($this->image != "") {
            $filename = $this->image->store('posts', 'public');
        } else {
            $filename = "null";
        }
        $posts->title = $this->title;
        $posts->content = $this->content;
        $posts->cat_id = $this->cat_id;
        $posts->user_id = Auth::user()->id;
        $posts->image = $filename;
        $posts->views = 0;
        $posts->meta_title = "null";
        $posts->meta_content = "null";
        $posts->keyword = "null";
        $result = $posts->save();
        if ($result) {
            session()->flash('success', 'User Post Successfully');
            $this->resetField();
            return redirect(route('users.my-posts'));
        }
    }
}
