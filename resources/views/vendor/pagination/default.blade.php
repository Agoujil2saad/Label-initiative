@if ($paginator->hasPages())
<div class="row" style="margin:20px 0 20px 0">
    <div class="ui  pagination menu">
        @if ($paginator->onFirstPage())
        <a class="disabled item">
            <i class="toggle left large orange icon"></i>
        </a>
        @else
        <a class="item" ref="{{ $paginator->previousPageUrl() }}" rel="prev">           <i class="toggle left large orange icon"></i>
        </a>
        @endif
        {{-- pagination elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <div class="disabled item">
            {{$element}}
        </div>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <div class="active item">
            {{$page}}
        </div>
        @else
        <a class="item" href="{{$url}}">
                {{$page}}
        </a>
        @endif
        @endforeach
        @endif
        @endforeach
        
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a  class="item" href="{{ $paginator->nextPageUrl() }}" rel="next">
            <i class="toggle right large orange icon"></i>
        </a>
        @else
        <div class="disabled item">
            <i class="toggle right large orange icon"></i>
        </div>
        @endif
    </div>
    </div>
 @endif