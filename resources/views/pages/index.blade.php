<x-app developer="Joshua Levy" web="https://joshlevy.com.br">
    <x-slot name="page">
        @push('styles')
            
        @endpush
        @push('scripts')
            
            <script>
                const waitMe = new WaitLoad({waitTime: 4000});
                console.log(waitMe);
                waitMe.run();
            </script>
        @endpush
        <div>
            TESTE
        </div>
    </x-slot>
</x-app>