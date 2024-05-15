<x-guest-layout>
    <div class="wrapper">
    <div class="container1">
    <div class="title-section">
         <h2 class="title"> Reset Password </h2>
         <p class="para">
        {{ __('Make sure to choose a strong password that you can remember.') }}
    </p>
    </div>
       <br>     
        <div class="login-content">

    <form method="POST" action="{{ route('password.store') }}">
        @csrf


        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
             <div class="input-div one focus">
                  
             <div class="i">
                        <i class="fas fa-envelope"></i>
                   </div>
                   
                    <div class="div">  

         <!--   <x-input-label for="email" :value="__('Email')" /> -->

            <x-text-input id="email" class="confirmpass" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" /> 
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
          <!--  <x-input-label for="password" :value="__('Password')" /> -->
            <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" placeholder="New Password"/>
            <br><br>
            <x-input-error :messages="$errors->get('password')" class="error" />
        </div>
    </div>

        <!-- Confirm Password -->
       <div class="input-div pass focus">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
         <!--   <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->

            <x-text-input id="password_confirmation" class="input"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm Password" />
<br><br>
            <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
        </div>
    </div>

        <div>
            <x-primary-button class="btn">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</div>
</x-guest-layout>
