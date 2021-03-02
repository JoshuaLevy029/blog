@extends('templates.app')

@section('content')
    <x-navbar::skeleton :image=false>
        <x-slot name="content">
            <x-navbar::nav>
                <x-slot name="content">
                    <x-navbar::nav-item css="ml-1 mr-1" title="Home" route="index" icon="fas fa-home"/>
                    <x-navbar::nav-item css="ml-1 mr-1" title="About" route="about" icon="far fa-user-circle"/>
                    <x-navbar::nav-item css="ml-1 mr-1" title="Contact" route="contact" icon="far fa-comments"/>
                    <x-navbar::nav-item css="ml-1 mr-1 d-block d-md-none" title="Profile" icon="far fa-user"/>
                </x-slot>
            </x-navbar::nav>
            <x-navbar::nav css="nav-flex-icons" float="ml-auto">
                <x-slot name="content">
                    <x-navbar::nav-icon icon="fab fa-facebook-square" title="Me adicione no Facebook" route="https://www.facebook.com/joshua.levy.3139241" :redirect=true/>
                    <x-navbar::nav-icon icon="fab fa-instagram" title="Siga-me no Instagram"/>
                    <x-navbar::nav-icon icon="fab fa-linkedin-in" title="Conecte-se no LinkedIn"/>
                    <x-navbar::nav-avatar>
                        <x-slot name="content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </x-slot>
                    </x-navbar::nav-avatar>
                </x-slot>
            </x-navbar::nav>
        </x-slot>
    </x-navbar::skeleton>

    <div class="p-md-3 w-100">
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