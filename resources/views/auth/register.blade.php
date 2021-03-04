<x-app developer="Joshua Levy" web="https://joshlevy.com.br">
    <x-slot name="page">
        {{-- <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <form class="text-center border border-light p-5" method="POST" action="{{route('login')}}">
                    @csrf
                    <p class="h4 mb-4">Sign in</p>
                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" value="{{old('email')}}">
                    <input type="password" id="password" name="password" class="form-control @if(!$errors->any()) mb-4 @endif" placeholder="Password" aria-describedby="passwordHelpBlock">
                    @if ($errors->any())
                        <small id="passwordHelpBlock" class="form-text text-danger text-center mb-4">
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
        </div> --}}
        <!-- Default form register -->
        <form class="text-center border border-light p-5" action="#!">
            <p class="h4 mb-4">Sign up</p>
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                </div>
            </div>
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                At least 8 characters and 1 digit
            </small>
            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                Optional - for two step authentication
            </small>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div>
            <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>
            <hr>
            <p>By clicking <em>Sign up</em> you agree to our <a href="" target="_blank">terms of service</a></p>
        </form>
    </x-slot>
</x-app>