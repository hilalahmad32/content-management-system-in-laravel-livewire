<div>
    <x-slot name="title">Create Post</x-slot>


    <div class="content-column w-col w-col-9">
        <div class="w-dyn-list">
            <div class="form-wrapper ">
                <a href="{{ route('users.my-posts') }}">
                    <input type="submit" value="Go Back" class="w-button" />
                </a>
                <form wire:submit.prevent='store' style="margin-top: 20px">
                    <input type="text" class="field w-input" placeholder="Enter Title"
                        style="display: block;width:100%;border:1px solid black;" wire:model='title' />
                    @error('title')
                        <span style="color: red;display:block;">{{ $message }}</span>
                    @enderror
                    <select wire:model='cat_id' class="field w-input"
                        style="display: block;width:100%;border:1px solid black;">
                        <option value="" disabled selected>Select Your post Category</option>
                        @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('cat_id')
                        <span style="color: red;display:block;">{{ $message }}</span>
                    @enderror
                    <textarea cols="30" rows="10" wire:model.lazy='content' class="field w-input"
                        style="display: block;width:100%;border:1px solid black;" placeholder="Enter your Description"></textarea>
                    @error('content')
                        <span style="color: red;display:block;">{{ $message }}</span>
                    @enderror
                    <input type="file" wire:model='image' class="field w-input" placeholder="Upload Image"
                        style="display: block;width:100%;border:1px solid black;" />
                    {{ $image }}
                    @error('image')
                        <span style="color: red;display:block;">{{ $message }}</span>
                    @enderror
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" width="48" height="48" alt="">
                    @endif
                    <input type="submit" value="Submit" class="w-button" />
                </form>
            </div>
        </div>
    </div>
</div>
