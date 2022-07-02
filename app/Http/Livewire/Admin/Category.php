<?php

namespace App\Http\Livewire\Admin;

use App\Models\category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $category_name,
        $status,
        $title,
        $content,
        $keyword,
        $showTable=true,
        $createForm=false,
        $updateForm=false,
        $edit_id,
        $edit_category_name,
        $edit_status,
        $edit_title,
        $edit_content,
        $edit_keyword,
        $search,
        $totalCount
;
    public function render()
    {
        if($this->search != ""){
            $search_item='%'.$this->search.'%';
            $categorys=ModelsCategory::orderBy('id','DESC')->where('category_name','LIKE',$search_item)->get();
            return view('livewire.admin.category',compact('categorys'))->layout('layout.admin-app');
        }
        $categorys=ModelsCategory::orderBy('id','DESC')->get();
        $this->totalCount=ModelsCategory::count();
        return view('livewire.admin.category',compact('categorys'))->layout('layout.admin-app');
    }

    public function showForm()
    {
        $this->createForm=true;
        $this->showTable=false;
        $this->updateForm=false;
    }

    public function goBack(){
        $this->createForm=false;
        $this->updateForm=false;
        $this->showTable=true;
    }

    public function resetField()
    {
        $this->category_name = "";
        $this->status = "";
        $this->title = "";
        $this->content = "";
        $this->keyword = "";
    }

    public function store()
    {
        $categorys = new ModelsCategory();
        $this->validate([
            'category_name' => ['required', 'string', 'unique:categories'],
        ]);

        $categorys->category_name = $this->category_name;
        $categorys->status = $this->status;
        $categorys->title = $this->title;
        $categorys->content = $this->content;
        $categorys->keyword = $this->keyword;
        $result = $categorys->save();
        if ($result) {
            $this->resetField();
            session()->flash('success', 'Category Add Successfully');
            $this->createForm=false;
            $this->showTable=true;
        }
    }

    public function delete($id){
        $categorys=ModelsCategory::findOrFail($id)->delete();
        if($categorys){
            session()->flash('success', 'Category Delete  Successfully');
        }
    }

    public function edit($id){
        $this->updateForm=true;
        $this->showTable=false;
        $this->createForm=false;
        $categorys=ModelsCategory::findOrFail($id);
        $this->edit_id=$categorys->id;
        $this->edit_category_name=$categorys->category_name;
        $this->edit_status=$categorys->status;
        $this->edit_title=$categorys->title;
        $this->edit_content=$categorys->content;
        $this->edit_keyword=$categorys->keyword;
    }

    public function update($id){
        $categorys=ModelsCategory::findOrFail($id);
//        $this->validate([
//            'edit_category_name' => ['required', 'string', 'unique:categories'],
//        ]);

        $categorys->category_name = $this->edit_category_name;
        $categorys->status = $this->edit_status;
        $categorys->title = $this->edit_title;
        $categorys->content = $this->edit_content;
        $categorys->keyword = $this->edit_keyword;
        $result = $categorys->save();
        if ($result) {
            $this->resetField();
            session()->flash('success', 'Category Update Successfully');
            $this->updateForm=false;
            $this->showTable=true;
        }
    }
}
