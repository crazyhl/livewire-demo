<div>
    {{-- In work, do what you enjoy. --}}
    <div>
        <livewire:auth.logout />
    </div>
    <div class="p-5">
        @foreach($posts as $post)
            @livewire('post.show', ['post' => $post])
        @endforeach
        {{ $posts->links() }}
    </div>
</div>
