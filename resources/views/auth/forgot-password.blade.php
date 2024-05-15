<x-guest-layout>
    <div class="wrapper">
    <div class="container1">
    <div class="title-section">
        <h2 class="title"> Forgot Password? </h2><p class="para">
        {{ __('Let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </p>
    </div>
         <div class="login-content">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address --><br>
       <div class="input-div one focus">
                  
             <div class="i">
                        <i class="fas fa-envelope"></i>
                   </div>
                   
                    <div class="div">  
           <!-- <x-input-label for="email" :value="__('Email')" />-->
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus Placeholder="Email"/>
            <br><br>
            <x-input-error :messages="$errors->get('email')" class="error" />
        </div>
    </div>

        <div>
            <x-primary-button class="btn">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</div>
</x-guest-layout>
