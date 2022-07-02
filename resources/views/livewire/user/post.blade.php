<div>
    <x-slot name='title'>
        {{ Auth::user()->username }} - My Posts
    </x-slot>

    <div class="content-column w-col w-col-9">
        <div class="w-dyn-list">
            @if (session()->has('success'))
                <span style="color:green">{{ session('success') }}</span>
            @endif
            <div class="button-wrapper"><a href="{{ route('users.create-post') }}" class="button w-button">Create
                    Post →</a></div>
            <div role="list" class="w-dyn-items">
                @forelse ($posts as $post)
                    <div role="listitem" class="w-dyn-item">
                        <div style="opacity:1" class="post-wrapper">
                            <div class="post-content">
                                <div class="w-row">
                                    <div class="w-col w-col-4 w-col-medium-4"><a
                                            href="/posts/coffee-sugar-chicory-seasonal-espresso-barista-americano"
                                            style="background-image:url('{{ asset('storage/') }}/{{ $post->image }}')"
                                            class="blog-image w-inline-block"></a></div>
                                    <div class="w-col w-col-8 w-col-medium-8"><a
                                            href="/posts/coffee-sugar-chicory-seasonal-espresso-barista-americano"
                                            class="blog-title-link w-inline-block">
                                            <h2 class="blog-title">{{ $post->title }}</h2>
                                        </a>
                                        <div class="details-wrapper">
                                            <div class="post-info">June 25, 2020</div>
                                            <div class="post-info">|</div><a href="/categories/music"
                                                class="post-info when-link">{{ $post->categorys->category_name }}</a>
                                        </div>
                                        <div class="post-summary-wrapper">
                                            <p class="post-summary">{{ substr($post->content, 0, 250) }}</p><a
                                                href="/posts/coffee-sugar-chicory-seasonal-espresso-barista-americano"
                                                class="read-more-link">Read more...</a>
                                        </div>
                                        <div style="display: flex; justify-content:end;">
                                            <div class="button-wrapper" wire:click.prevent='delete({{ $post->id }})'
                                                style="margin-right: 10px; background-color:red !important; ">
                                                <a href="{{ route('users.create-post') }}"
                                                    class="button w-button">Delete</a>
                                            </div>
                                            <div class="button-wrapper" style="margin-right: 10px;"><a
                                                    href="{{ route('users.create-post') }}"
                                                    class="button w-button">Update</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Your are not posted</h3>
                @endforelse


            </div>
        </div>
        <div class="button-wrapper"><a href="/all-posts" class="button w-button">More posts →</a></div>
    </div>
</div>
