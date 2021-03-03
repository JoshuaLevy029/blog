<li class="dropdown-item">
    <a href="@if($route) @if($redirect) {{route($route)}} @else {{$route}} @endif @endif" class="{{$css}}" {!! $addOn !!}>
        @if($content)
            {!! $content !!}
        @else
            @if($icon) <i class="{{$icon}} mr-1"></i> @endif {{$title}}
        @endif
    </a>
</li>