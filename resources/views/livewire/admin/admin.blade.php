<div>
    <x-slot name="title">Admin</x-slot>

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
                    <h3>Admin ( {{$totalCount}} )</h3>
                    <button class="btn btn-success" wire:click="showForm">New</button>
                </div>
            </div>
        </div>
    </div>

    @if($showTable==true)
        <div class="container">
            <input type="text" placeholder="Search Here ...." class="form-control w-50 my-3" wire:model="search">
            <div class="card">
                @if(count($admins) > 0)
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{$admin->id}}</td>
                                    <td>{{$admin->fname}}</td>
                                    <td>{{$admin->lname}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->username}}</td>
                                    <td><img src="{{asset('storage/')}}/{{$admin->image}}" alt="" width="48" height="48"></td>
                                    <td><button class="btn btn-success" wire:click="edit({{$admin->id}})">Edit</button></td>
                                    <td><button wire:click="delete({{$admin->id}})" class="btn btn-danger">Delete</button></td>
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
    @if($createForm==true)
        <button class="my-2 btn btn-danger" wire:click="goBack">Goback</button>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Admin</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent='create'>
                    <div class="form-group">
                        <label>Enter First Name:</label>
                        <input type="text" class="form-control" wire:model.lazy='fname'
                               placeholder="Enter First Name">
                        @error('fname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Enter Last Name:</label>
                        <input type="text" class="form-control" wire:model.lazy='lname'
                               placeholder="Enter Last Name">
                        @error('lname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Enter User Name:</label>
                        <input type="text" class="form-control" wire:model.lazy='username'
                               placeholder="Enter User Name">
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Enter  Email:</label>
                        <input type="text" class="form-control" wire:model.lazy='email'
                               placeholder="Enter Email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Enter  Description:</label>
                        <textarea wire:model.lazy="content" cols="30" placeholder="Enter about admin" rows="10" class="form-control"></textarea>
                        @error('content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Enter  Password:</label>
                        <input type="password" wire:model.lazy="password" placeholder="Enter your password"  class="form-control">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file"  wire:model="image" class="form-control">
                        @if($image)
                            <img src="{{$image->temporaryUrl()}}" width="48" height="48" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    @endif
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-2">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">
            @if($updateForm==true)
                <button class="my-2 btn btn-danger" wire:click="goBack">Goback</button>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Admin</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update({{$edit_id}})'>
                            <div class="form-group">
                                <label>Enter First Name:</label>
                                <input type="text" class="form-control" wire:model.lazy='edit_fname'
                                       placeholder="Enter First Name">
                                @error('edit_fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Enter Last Name:</label>
                                <input type="text" class="form-control" wire:model.lazy='edit_lname'
                                       placeholder="Enter Last Name">
                                @error('edit_lname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Enter User Name:</label>
                                <input type="text" class="form-control" wire:model.lazy='edit_username'
                                       placeholder="Enter User Name">
                                @error('edit_username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Enter  Email:</label>
                                <input type="text" class="form-control" wire:model.lazy='edit_email'
                                       placeholder="Enter Email">
                                @error('edit_email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Enter  Description:</label>
                                <textarea wire:model.lazy="edit_content" cols="30" placeholder="Enter about admin" rows="10" class="form-control"></textarea>
                                @error('edit_content')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file"  wire:model="new_image" class="form-control">
                                @if($new_image)
                                    <img src="{{$new_image->temporaryUrl()}}" width="48" height="48" alt="">
                                @else
                                    <img src="{{asset('storage')}}/{{$old_image}}" width="48" height="48" alt="">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
