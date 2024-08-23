@if ($paginator->hasPages())
    <style>
        .pagination {
            font-size: 0.9rem;
            padding: 0.3rem;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-item .page-link {
            background-color: #f6e8d6; /* Light background */
            border: 1px solid #ee3f48; /* Red border */
            color: #7d141d; /* Red text */
            border-radius: 50%; /* Rounded buttons */
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .pagination .page-item.active .page-link {
            background-color: #7d141d; /* Dark red background */
            color: #fff; /* White text for active page */
            border-color: #7d141d;
        }

        .pagination .page-item:hover .page-link {
            background-color: #ee3f48; /* Hover color */
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #f0f0f0;
            color: #d3d3d3;
        }

        .pagination .page-link {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .pagination .page-link:focus {
            box-shadow: 0 0 0 0.2rem rgba(238, 63, 72, 0.25);
        }
    </style>

    <nav>
        <ul class="pagination justify-content-center my-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
