<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <img class="wave" src="img/wave1.png">
    <div class="container">
        <div class="img">
            <img src="img/main.png">
        </div>
        <div class="login-content">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
         <h2 class="title">Welcome</h2>
                <div class="input-div one focus">
                   <div class="i">
                        <i class="fas fa-envelope"></i>
                   </div>
                   <div class="div">
          <!--  <x-input-label for="email" :value="__('Email')" /> -->
            <x-text-input id="email" class="input" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
            <br><br>
            <x-input-error :messages="$errors->get('email')" class="error" />
        </div>
    </div>

        <!-- Password -->
    <div class="input-div pass focus">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
          <!--  <x-input-label for="password" :value="__('Password')" />-->

            <x-text-input id="password" class="input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
placeholder="Password"
                            />
<br><br>
            <x-input-error :messages="$errors->get('password')" class="error" />
        </div>
    </div>
<br>
        <!-- Remember Me -->
 <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox" class="checkbox" name="remember">
                <span> &nbsp; {{ __('Remember me') }}</span>
            </label>
        </div>
<br>
        <div>
         <x-primary-button class="btn">
                {{ __('Log in') }}
            </x-primary-button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

           
        </div>
    </form>
</div>
</div>
</x-guest-layout>
