<div>
    {{-- In work, do what you enjoy. --}}
    @foreach($posts as $post)
        @include('livewire.post.show', ['post' => $post])
    @endforeach
</div>
