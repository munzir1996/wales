@if ($paginator->hasPages())
    <div class="flex justify-center pt-6 border-t">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="flex items-center px-4 py-1 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                السابق
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center px-4 py-1 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md hover:bg-primary hover:text-white">
                السابق
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a href="#" class="flex items-center px-4 py-1 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                    {{ $element }}
                </a>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="items-center hidden px-4 py-1 mx-1 transition-colors duration-200 transform rounded-md sm:flex bg-primary text-white">
                            {{ $page }}
                        </a>
                    @else
                        <a href="{{ $url }}" class="items-center hidden px-4 py-1 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md sm:flex hover:bg-primary hover:text-white">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center px-4 py-1 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md hover:bg-primary hover:text-white">
                التالي
            </a>
        @else
            <a href="#" class="flex items-center px-4 py-1 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                التالي
            </a>
        @endif

    </div>
@endif
