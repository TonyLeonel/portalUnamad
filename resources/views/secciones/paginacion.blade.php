@if ($paginator->hasPages())
<ul class="pagination">
    @if ($paginator->onFirstPage())
    <a class="prevposts-link"><i class="fa fa-caret-left"></i></a>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <a>{{ $element }}</a>
        @endif

        @if(is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="current-page">{{ $page }}</a>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="nextposts-link"><i class="fa fa-caret-right"></i></a>    
    @else
    <a class="nextposts-link"><i class="fa fa-caret-right"></i></a>
    @endif
</ul>  
@endif