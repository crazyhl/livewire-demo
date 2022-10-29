<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.post.pagination', [
            'posts' => Post::paginate(10),
        ]);
    }
}
