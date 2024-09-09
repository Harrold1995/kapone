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
  margin-right: 80px;
  text-align: center;
}

.sign-btn {
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
  width: 200px;
  place-content: center;
  margin-left: 80px;
  text-align: center;
}

.card {
  display: flex; /* Use Flexbox */
  max-width: 1200px; /* Fixed width */
  margin: 0 auto; /* Center the card horizontally */
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-image {
  flex: 1; /* Takes up available space */
}

.card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-content {
  flex: 1; /* Takes up available space */
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: #f9f9f9; /* Optional: Different background color for content area */
}
.btn-content {
    width: 400px;
    display: flex;
    margin-bottom: 50px;
}
.max-w-custom {
    max-width: 1200px;
}
</style>

<div class="card max-w-custom">
  <!-- Content on the Left Side -->
  <div class="card-content">
    <h1>Forgot Password?</h1>
    <div class="btn-content">
        <a href="{{ route('login') }}" class="sign-btn">Sign In</a>
        <a href="#" class="sign-btn">Sign Up</a>
    </div>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('EMAIL OR PHONE')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 ">
            <x-primary-button class="login-btn">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
  </div>
  
  <!-- Image on the Right Side -->
  <div class="card-image">
    <img src="{{ asset('/images/menu/plant-4.jpg') }}" alt="Image Description">
  </div>
</div>

</x-guest-layout>
