{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
        }

          .user-area .user-form-content .create a {
    color: #0b8fad;
}

.form-control:focus {
    border: 1px solid #0b8fad;
}
        </style>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 mx-auto">
                        <div class="user-form-content">
                            <h3 class="text-center">Create an Account</h3>

                            <form class="user-form" action="{{route('register')}}" name="frm-login" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Your Name" required autofocus autocomplete="name" :value="name">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" placeholder="Email address" :value="email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                        </div>
                                    </div>
        
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Repeat Password</label>
                                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                        </div>
                                    </div>
        
                                    <div class="col-12">
                                        <button class="default-btn register" type="submit" style="border-radius: 30px;">
                                            Register Now
                                        </button>
                                    </div>

                                    <div class="col-12">
                                        <p class="create">Already Have an Account? <a href="{{route('login')}}">Log In</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 </x-guest-layout>