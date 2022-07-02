<div>
    <x-slot name='title'>Category</x-slot>

    <div class="wrapper my-5">
      <div class="row d-flex justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
              @if (session()->has('success'))
                  <div class="alert alert-success">
                      <strong>{{ session('success') }}</strong>
                  </div>
              @endif
          </div>
      </div>
       <div class="container">
           <div class="card">
               <div class="card-header">
                   <div class="d-flex justify-content-between align-items-center">
                       <h3>Category ( {{$totalCount}} )</h3>
                       <button class="btn btn-success" wire:click="showForm">New</button>
                   </div>
               </div>
           </div>
       </div>
        @if($showTable == True)
    <div class="container">
        <input type="text" placeholder="Search Here ...." class="form-control w-50 my-3" wire:model="search">
        <div class="card">
          @if(count($categorys) > 0)
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categorys as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->status == 1  ? 'Active' : 'InActive'}}</td>
                                <td><button class="btn btn-success" wire:click="edit({{$category->id}})">Edit</button></td>
                                <td><button wire:click="delete({{$category->id}})" class="btn btn-danger">Delete</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
            <h4 class="text-capitalize text-center">Record Not Found</h4>
            @endif
        </div>
    </div>
        @endif
        <div class="row d-flex justify-content-center mt-2">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">
                @if($createForm == true)
                    <button class="my-2 btn btn-danger" wire:click="goBack">Goback</button>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='store'>
                            <div class="form-group">
                                <label>Category Name:</label>
                                <input type="text" class="form-control" wire:model.lazy='category_name'
                                    placeholder="Enter Category Name">
                                @error('category_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status:</label>
                                <input type="checkbox" class="checkbox" wire:model='status'>
                            </div>
                            <div class="form-group">
                                <label>Enter Title for Seo:</label>
                                <input type="text" class="form-control" wire:model.lazy='title'
                                    placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label>Enter Content for Seo :</label>
                                <textarea wire:model.lazy='content' cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Enter Keyword for Seo:</label>
                                <input type="text" class="form-control" wire:model.lazy='keyword'
                                    placeholder="Enter keyword Separeted By Commas">
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                    @endif
                @if($updateForm == true)
                        <button class="my-2 btn btn-danger" wire:click="goBack">Goback</button>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Category</h4>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent='update({{$edit_id}})'>
                                    <div class="form-group">
                                        <label>Category Name:</label>
                                        <input type="text" class="form-control" wire:model.lazy='edit_category_name'
                                               placeholder="Enter Category Name">
                                        @error('edit_category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <input type="checkbox" class="checkbox" wire:model='edit_status'>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Title for Seo:</label>
                                        <input type="text" class="form-control" wire:model.lazy='edit_title'
                                               placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Content for Seo :</label>
                                        <textarea wire:model.lazy='edit_content' cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Keyword for Seo:</label>
                                        <input type="text" class="form-control" wire:model.lazy='edit_keyword'
                                               placeholder="Enter keyword Separeted By Commas">
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>
