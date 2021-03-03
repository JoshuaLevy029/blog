<li class="nav-item {{$direction}} {{$css}}" {!! $addOn !!}>
    <a class="nav-link dropdown-toggle {{$css2}}" id="{{$id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" {!! $addOn2 !!}>
        @if($icon) <i class="{{$icon}} mr-1"></i> @endif {{$title}}
    </a>
    <div class="dropdown-menu {{$css3}}" aria-labelledby="{{$id}}" {!! $addOn3 !!}>
        <ul class="list-unstyled">
            {!! $content !!}
        </ul>
    </div>
</li>