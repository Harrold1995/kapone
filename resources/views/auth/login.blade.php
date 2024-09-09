<x-guest-layout>

<style>
.req-ot-button, .login-btn {
  background-color: #06A9A9;
  color: #fff;
  font-family: 'Nunito', sans-serif;
  font-weight: 700;
  font-size: 14px;
  line-height: 19.1px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  outline: none; 
  width: 400px;
  place-content: center;
  margin-left: 80px;
}

.card {
  display: flex;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-image {
  flex: 1;
}

.card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-content {
  flex: 1;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.max-w-custom {
    max-width: 1200px;
}

</style>

<div class="card max-w-custom">
  <div class="card-image">
  <img src="{{ asset('/images/menu/plant.jpg') }}">
  </div>
  <div class="card-content">
    <!-- Right side with the login form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="max-w-md w-full space-y-6">
                <!-- Logo -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('/images/menu/outposter.png') }}" alt="Logo" class="h-12">
                </div>

                <!-- Welcome text -->
                <div class="text-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Welcome back! Please login to your account.</h2>
                </div>

                <!-- Login with button -->
                <button class="req-ot-button w-full flex justify-center items-center py-2 px-4 mb-4 border border-transparent rounded-md shadow-sm text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                    <svg class="h-5 w-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Add SVG path here for the Google logo -->
                    </svg>
                    Login via Outposter Email
                </button>

                <!-- Divider -->
                <div class="flex items-center my-4">
                    <hr class="w-full border-gray-300">
                    <span class="px-2 text-gray-500 text-sm">OR LOGIN WITH EMAIL</span>
                    <hr class="w-full border-gray-300">
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email Address')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mb-6">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Keep me logged in') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-teal-500 hover:text-teal-600" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div>
                        <x-primary-button class="w-full login-btn">
                            {{ __('Login') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Footer text -->
                <div class="text-center mt-6 text-sm text-gray-500">
                    Don't have an account? Contact your System Administrator.
                </div>
            </div>
        </div>
  </div>
</div>
</x-guest-layout>
