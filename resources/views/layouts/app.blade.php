@extends('templates.app')

@section('content')
    <x-navbar::skeleton :image=false>
        <x-slot name="content">
            <x-navbar::nav>
                <x-slot name="content">
                    <x-navbar::nav-item css="ml-1 mr-1" title="Home" route="index" icon="fas fa-home"/>
                    <x-navbar::nav-item css="ml-1 mr-1" title="Sobre" route="about" icon="far fa-user-circle"/>
                    <x-navbar::nav-item css="ml-1 mr-1" title="Contato" route="contact" icon="far fa-comments"/>
                </x-slot>
            </x-navbar::nav>
            <x-navbar::nav css="nav-flex-icons" float="ml-auto">
                <x-slot name="content">
                    <x-navbar::nav-icon icon="fab fa-facebook-square" title="Me adicione no Facebook" route="https://www.facebook.com/joshua.levy.3139241" :redirect=true/>
                    <x-navbar::nav-icon icon="fab fa-instagram" title="Siga-me no Instagram"/>
                    <x-navbar::nav-icon icon="fab fa-linkedin-in" title="Conecte-se no LinkedIn"/>
                </x-slot>
            </x-navbar::nav>
        </x-slot>
    </x-navbar::skeleton>

    <div class="p-md-3 w-100">
        <div class="container">
            @yield('container')
        </div>
    </div>

    <footer class="page-footer font-small navbar-dark black text-white">
        <div class="footer-copyright text-center py-3">© {{date('Y')}}, Developed by 
            <a href="https://joshlevy.com.br">Joshua Levy</a>. All rights reserved
        </div>
    </footer>
@endsection