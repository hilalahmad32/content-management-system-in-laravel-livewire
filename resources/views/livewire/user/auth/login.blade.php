<div>
    <x-slot name="title">Login</x-slot>
    <div class="form-wrapper ">
        @if (session()->has('success'))
            <span style="color:green">{{ session('success') }}</span>
        @endif

        @if (session()->has('error'))
            <span style="color:red">{{ session('error') }}</span>
        @endif
        <form wire:submit.prevent='login'>
            <input type="email" class="field w-input" wire:model.lazy='email' placeholder="Enter your email address"
                style="display:block;width:100%;border:1px solid black;" />
            @error('email')
                <span style="color: red"></span>
            @enderror
            <input type="password" class="field w-input" wire:model.lazy="password" placeholder="Enter your password"
                style="display: block;width:100%;border:1px solid black;" />
            @error('password')
                <span style="color: red"></span>
            @enderror
            <input type="submit" value="Login" class="w-button" />
            <span>If you have't account <a href="{{ route('users.register') }}">Register</a> </span>
        </form>
    </div>
</div>
