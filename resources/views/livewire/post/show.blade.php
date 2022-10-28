<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="p-1 border border-slate-200 rounded-md mb-5">
        <div>{{$post->id}}</div>
        <div>{{$post->title}}</div>
        <div>{{$post->user->name}}</div>
        <div>{{$post->content}}</div>
    </div>
</div>
