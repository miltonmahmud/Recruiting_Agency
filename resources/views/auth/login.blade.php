{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}

 <x-guest-layout>
     
    <section class="user-area ptb-70 mx-auto">

        <style>
            .user-area .user-form-content .user-form {
            border-radius: 30px;
            /*background-color: #d7e5e9;*/
        }

        .user-area .user-form-content .create a {
    color: #0b8fad;
}

.form-control, .form-control:focus, .form-control:active {
    background-color: #fff !important;
}

.form-control:focus {
    border: 1px solid #0b8fad;
}
        </style>

            <div class="container" style="border-radius: 30px;">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="user-form-content log-in-50">
                            <h3 class="text-center textt-uppercase">User Login</h3>
                        
                            <x-jet-validation-errors class="mb-4" />
                            <form class="user-form" method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email" placeholder="Type your email address" :value="old(email)" required autofocus>
                                        </div>
                                    </div>
        
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="password" required autocomplete="current-password">
                                        </div>
                                    </div>
        
                                    <div class="col-12">
                                        <button class="default-btn" type="submit" value="Login" name="submit" style="border-radius: 30px;">
                                            Log In
                                        </button>
                                    </div>

                                    <div class="col-12">
                                        <p class="create">Don’t Have an Account? <a href="{{route('register')}}">Create</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 </x-guest-layout>