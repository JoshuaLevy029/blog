@extends('templates.app')

@section('content')
    <x-navbar::skeleton :image=false>
        <x-slot name="content">
            <x-navbar::nav>
                <x-slot name="content">
                    @foreach ($menu as $item)
                        @if ($item->type == 'dropdown')
                            @php $submenu = $item->submenu; @endphp
                            <x-blog::menu-dropdown :item=$item :menu=$submenu/>
                        @else
                        @php $redirect = ($item->type == 'redirect') ? true : false; @endphp
                            <x-navbar::nav-item css="ml-1 mr-1" title="{{$item->name}}" icon="{{$item->icon?$item->icon:''}}" route="{{$item->route?$item->route:''}}" :redirect=$redirect/>
                        @endif
                    @endforeach
                    <x-navbar::nav-item css="ml-1 mr-1 d-block d-md-none" title="Profile" icon="far fa-user"/>
                </x-slot>
            </x-navbar::nav>
            <x-navbar::nav css="nav-flex-icons" float="ml-auto">
                <x-slot name="content">
                    <x-navbar::nav-icon icon="fab fa-facebook-square" title="Add on Facebook"/>
                    <x-navbar::nav-icon icon="fab fa-instagram" title="Follow Instagram"/>
                    <x-navbar::nav-icon icon="fab fa-linkedin-in" title="Connect on LinkedIn"/>
                    @auth
                        <x-navbar::nav-avatar />
                    @else
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">
                                <small>Login</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">
                                <small>Register</small>
                            </a>
                        </li>
                    @endauth
                </x-slot>
            </x-navbar::nav>
        </x-slot>
    </x-navbar::skeleton>

    <div class="p-md-3 p-3 w-100">
        <div class="container">
            {!! $page !!}
        </div>
    </div>

    <footer class="page-footer font-small navbar-dark black text-white">
        <div class="footer-copyright text-center py-3">© {{date('Y')}}, Developed by 
            <a href="{{$web}}"> {{$developer}}</a>. All rights reserved
        </div>
    </footer>
@endsection