@if ($paginator->hasPages())
<div class="row">
    <nav class="col-12 text-center">
        <ul class="d-flex align-items-center justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li><a href="#" rel="prev"><i class="fa fa-angle-double-left"></i></a></li> --}}
            @else
                <li class="m-3"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i
                            class="fa fa-angle-double-left"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    {{-- <a class="icon item disabled" aria-disabled="true">{{ $element }}</a> --}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active m-3"><a href="{{ $url }}" aria-current="page">{{ $page }}</a>
                            </li>
                        @else
                            <li class="m-3"><a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="m-3">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <i class="fa fa-angle-double-right">
                        </i>
                    </a>
                </li>
            @else
                {{-- <li>
                    <a href="#" rel="next">
                        <i class="fa fa-angle-double-right">
                        </i>
                    </a>
                </li> --}}
            @endif
        </ul>
    </nav>
</div>
@endif
