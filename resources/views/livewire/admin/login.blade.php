<div>
    <x-slot name='title'>Login</x-slot>
    <div class="wrapper my-5">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Admin Login</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='login'>
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" wire:model.lazy='username'
                                    placeholder="Enter your Username" value="michael23">
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" wire:model.lazy='password'
                                    placeholder="Enter your Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Login</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
