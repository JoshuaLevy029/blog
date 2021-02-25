@if (!$redirect)
    @if($route)
        <li class="nav-item {{$css}} @if(Route::currentRouteName() == $route) active @endif" {!! $addOn !!}>
            <a class="nav-link {{$css2}}" href="{{route($route)}}" {!! $addOn2 !!}>
                @if(!$content)
                    @if($icon) <i class="{{$icon}} mr-1"></i> @endif {{$title}} @if(Route::currentRouteName() == $route) <span class="sr-only">(current)</span> @endif
                @else
                    {!! $content !!}
                @endif
            </a>
        </li>
    @else
        <li class="nav-item {{$css}}" {!! $addOn !!}>
            <a class="nav-link {{$css2}}" href="" {!! $addOn2 !!}>
                @if(!$content)
                    @if($icon) <i class="{{$icon}} mr-1"></i> @endif {{$title}}
                @else
                    {!! $content !!}
                @endif
            </a>
        </li>
    @endif
@else
    <li class="nav-item {{$css}}" {!! $addOn !!}>
        <a class="nav-link {{$css2}}" href="{{$route}}" {!! $addOn2 !!}>
            @if(!$content)
                @if($icon) <i class="{{$icon}} mr-1"></i> @endif {{$title}}
            @else
                {!! $content !!}
            @endif
        </a>
    </li>
@endif