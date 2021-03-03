<x-app developer="Joshua Levy" web="https://joshlevy.com.br">
    <x-slot name="page">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <form class="text-center border border-light p-5" method="POST" action="{{route('login')}}">
                    @csrf
                    <p class="h4 mb-4">Sign in</p>
                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" value="{{old('email')}}">
                    <input type="password" id="password" name="password" class="form-control @if(!$errors->any()) mb-4 @endif" placeholder="Password" aria-describedby="passwordHelpBlock">
                    @if ($errors->any())
                        <small id="passwordHelpBlock" class="form-text text-danger text-center mb-4">
                            {{-- {{ __('Whoops! Something went wrong.') }} --}}
                            @foreach ($errors->all() as $item)
                                <br>{{$item}}
                            @endforeach
                        </small>
                    @endif
                    <div class="d-flex justify-content-around">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                <label class="custom-control-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
                    <p>Not a member?
                        <a href="">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </x-slot>
</x-app>