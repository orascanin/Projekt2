<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
           <!-- <x-authentication-card-logo />-->
        </x-slot>
<div class="verticalhorizontal" style="display: flex; justify-content: center; align-items: center; height: 200px;">
    <img src="https://thumbs.dreamstime.com/b/dreamstime-template-154881489.jpg" alt="centered image" style="max-height: 100%; max-width: 100%;" />
</div>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Šifra') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-pink-600">{{ __('Zapamti me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste šifru?') }}
                    </a>
                @endif
                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-2" href="{{ route('register') }}">
                    {{ __('Registracija') }}
                </a>

              <x-button class="ml-4" style="background-color: #f71ed3; box-shadow: 0 4px 8px rgba(247, 30, 211, 0.5); border-radius: 1rem;font-weight: 500;font-size: 0.875rem;padding: 0.625rem 1.25rem;text-align: center;color: white;cursor: pointer;transition: transform 0.3s;/border: none; outline: none;"   onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" onfocus="this.style.transform='scale(1.1)';" onblur="this.style.transform='scale(1)';">
                    {{ __('Prijava') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
