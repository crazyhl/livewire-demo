<div>
    {{-- In work, do what you enjoy. --}}
    <div class="p-5">
        @foreach($posts as $post)
            @include('livewire.post.show', ['post' => $post])
        @endforeach
        {{ $posts->links() }}
    </div>
</div>
