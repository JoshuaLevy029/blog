@php
    if (auth()->user()->photo) {
        $photo = upload("users/".auth()->user()->photo);
    } else {
        switch (auth()->user()->gender) {
            case 'M': $photo = '1'; break;
            case 'F': $photo = '2'; break;
            case 'X': $photo = '3'; break;
            default: $photo = '1'; break;
        }
        $photo = image("users/user-{$photo}.png");
    }
@endphp
<li class="nav-item dropdown avatar d-none d-md-block ml-md-3">
    <a class="nav-link dropdown-toggle p-0" data-toggle="dropdown" id="profile-dropdown" aria-haspopup="true" aria-expanded="false">
        <small class="font-weight-bold">{{ (auth('web')->user()->display) ? auth('web')->user()->display : 'unknown' }}</small> 
        <img src="{{$photo}}" class="rounded-circle z-depth-0 ml-2" alt="avatar image" height="35">
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile-dropdown">
        @if($content)
            {!! $content !!}
        @else
            <a href="" class="dropdown-item"><i class="far fa-id-badge mr-2"></i> Profile</a>
            <a href="" class="dropdown-item"><i class="fas fa-cogs mr-2"></i> Settings</a>
            <div class="dropdown-divider"></div>
            <a href="{{route('logout')}}" class="dropdown-item font-weight-bold text-center">
                <small class="font-weight-bold">Sign out</small>
            </a>
        @endif
    </div>
</li>