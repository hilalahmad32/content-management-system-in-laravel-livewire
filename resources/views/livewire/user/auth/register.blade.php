<div>
    <x-slot name="title">Registration</x-slot>

    <div class="form-wrapper ">
        <form wire:submit.prevent='create'>
            <input type="text" class="field w-input" placeholder="Enter your First Name"
                style="display: block;width:100%;border:1px solid black;" wire:model='fname' />
            @error('fname')
                <span style="color: red;display:block;">{{ $message }}</span>
            @enderror
            <input type="text" class="field w-input" placeholder="Enter your Last Name"
                style="display: block;width:100%;border:1px solid black;" wire:model='lname' />
            @error('lname')
                <span style="color: red;display:block;">{{ $message }}</span>
            @enderror
            <input type="email" wire:model='email' class="field w-input" placeholder="Enter your email address"
                style="display: block;width:100%;border:1px solid black;" />
            @error('email')
                <span style="color: red;display:block;">{{ $message }}</span>
            @enderror
            <input type="password" wire:model='password' class="field w-input" placeholder="Enter your password"
                style="display: block;width:100%;border:1px solid black;" />
            @error('password')
                <span style="color: red;display:block;">{{ $message }}</span>
            @enderror
            <input type="text" wire:model='username' class="field w-input" placeholder="Enter your Username"
                style="display: block;width:100%;border:1px solid black;" />
            @error('username')
                <span style="color: red;display:block;">{{ $message }}</span>
            @enderror
            {{-- <textarea cols="30" rows="10" class="field w-input" style="display: block;width:100%;border:1px solid black;"
                placeholder="Enter your Description"></textarea> --}}
            <input type="file" wire:model='image' class="field w-input" placeholder="Upload profile"
                style="display: block;width:100%;border:1px solid black;" />
            @error('image')
                <span style="color: red;display:block;">{{ $message }}</span>
            @enderror
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" width="48" height="48" alt="">
            @endif
            <input type="submit" value="Register" class="w-button" />
            <span>if already have account <a href="/login">Login</a> </span>
        </form>
    </div>
</div>
