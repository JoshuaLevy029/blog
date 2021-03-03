<x-app developer="Joshua Levy" web="https://joshlevy.com.br">
    <x-slot name="page">
        @push('styles')
            <link rel="stylesheet" href="{{plugin_js('waitme/waitme.css')}}">
        @endpush
        @push('scripts')
            <script src="{{plugin_js('index.js')}}"></script>
        @endpush
        TESTE <br>
        @auth
            <pre>@php print_r(auth()->user()) @endphp</pre>
        @endauth
    </x-slot>
</x-app>