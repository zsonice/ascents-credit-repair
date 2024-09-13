 
<!DOCTYPE html>
<html>

<body>  
@extends('layouts.app')
    @section('content')

    <div class="hello" id="ProfileTab"> 
        <h1 class="welcome">Edit Profile</h1>
        <div class ="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                         @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
            
   
            
        </div>
    </div>
    @endsection

</body>
</html>