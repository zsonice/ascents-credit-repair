<x-guest-layout>
   
<x-auth-session-status class="mb-4" :status="session('status')" />
    <img class="wave" src="img/wave1.png">
    <div class="container">
        <div class="img">
            <img src="img/main.png">
        </div>
        <div class="login-content">

<form method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="title">Register</h2>
        <!-- Name -->
        <div class="input-div one focus">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">

            <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
           <br><br>
            <x-input-error :messages="$errors->get('name')" class="error" />
        </div>
</div>
<div class="input-div one focus">
                   <div class="i">
                        <i class="fas fa-envelope"></i>
                   </div>
                   <div class="div">
        <!-- Email Address -->
        
      
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
           <br><br>
            <x-input-error :messages="$errors->get('email')" class="error" />
        </div>
</div>

        <!-- Password -->
        <div class="input-div one focus">
                   <div class="i">
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
       

            <x-text-input id="password" class="input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Password"/>
<br><br>
            <x-input-error :messages="$errors->get('password')" class="error" />
        </div>
</div>

        <!-- Confirm Password -->
        <div class="input-div one focus">
                   <div class="i">
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
            

            <x-text-input id="password_confirmation" class="input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter your password"/>
<br><br>
            <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
        </div>
</div>
<div>
       <x-primary-button class="btn">
                {{ __('Register') }}
            </x-primary-button>

            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

         
        </div>
    </form>

    </div>
</div>
</x-guest-layout>
