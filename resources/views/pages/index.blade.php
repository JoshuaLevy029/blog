<x-app developer="Joshua Levy" web="https://joshlevy.com.br">
    <x-slot name="page">
        TESTE <br>
        @auth
            <pre>@php print_r(auth()->user()) @endphp</pre>
        @endauth
    </x-slot>
</x-app>