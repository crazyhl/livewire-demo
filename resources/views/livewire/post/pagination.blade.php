<div>
    {{-- In work, do what you enjoy. --}}
    <div class="dropdown">
        <label tabindex="0" class="btn m-1">Click</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Item 1</a></li>
            <li><a>Item 2</a></li>
        </ul>
    </div>
    <button class="btn">Button</button>
    <div class="p-5">
        @foreach($posts as $post)
            @include('livewire.post.show', ['post' => $post])
        @endforeach
    </div>
    <ol class="flex justify-center gap-1 text-xs font-medium">
        <li>
            <a
                href="#"
                class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100"
            >
                <span class="sr-only">Prev Page</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3 w-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                    />
                </svg>
            </a>
        </li>

        <li>
            <a
                href="#"
                class="block h-8 w-8 rounded border border-gray-100 text-center leading-8"
            >
                1
            </a>
        </li>

        <li
            class="block h-8 w-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white"
        >
            2
        </li>

        <li>
            <a
                href="#"
                class="block h-8 w-8 rounded border border-gray-100 text-center leading-8"
            >
                3
            </a>
        </li>

        <li>
            <a
                href="#"
                class="block h-8 w-8 rounded border border-gray-100 text-center leading-8"
            >
                4
            </a>
        </li>

        <li>
            <a
                href="#"
                class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100"
            >
                <span class="sr-only">Next Page</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3 w-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                    />
                </svg>
            </a>
        </li>
    </ol>

</div>
