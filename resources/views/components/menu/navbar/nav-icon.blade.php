@php
    if(!$redirect) {
        $link = ($route) ? route($route) : '';
        $active = ($route && Route::currentRouteName() == $route) ? ' active' : '';
        $target = ($route) ? '_blank' : '';
    } else {
        $active = '';
        $link = $route;
        $target = ($route) ? '_blank' : '';
    }
@endphp
<li class="nav-item {{$css}}{{$active}}" {!! $addOn !!}>
    <a class="nav-link {{$css2}}" href="{{$link}}" {!! $addOn2 !!} @if($target) target="{{$target}}" @endif>
        <i class="{{$icon}} icon-button" {!! $addOn3 !!} data-toggle="tooltip" data-placement="{{$placement}}" title="{{$title}}" data-html="{{$html}}" @if($template) data-template="{{$template}}" @endif></i>
    </a>
</li>