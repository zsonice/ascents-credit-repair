 
<!DOCTYPE html>
<html>

<body>  
@extends('layouts.app')
    @section('content')

 <!--   <div class="hello" id="ProfileTab"> 
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
-->
    <div class="hello" id="dashboard">
    <!-- header -->
        <h1 class="welcome"> My Profile</h1>
    {{-- Add your letter content and any other necessary UI components here --}}
        <div class="clientnav">
            <ul class="nav nav-underline" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active"  id="editprofile-tab" data-bs-toggle="tab" data-bs-target="#editprofile-tab-pane" type="button" role="tab" aria-controls="editprofile-tab-pane" aria-selected="true" >Edit Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link "    id="changepass-tab" data-bs-toggle="tab" data-bs-target="#changepass-tab-pane" type="button" role="tab" aria-controls="changepass-tab-pane" aria-selected="true" >Change Password</a>
                </li>

            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="editprofile-tab-pane" role="tabpanel" aria-labelledby="edit-tab" tabindex="0">
   
               
                <div class="col-md-10"> 
                
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">    
                                <div class="row">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                        @include('profile.partials.delete-user-form')
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                </div>
            </div>

        
            <div class="tab-pane fade" id="changepass-tab-pane" role="tabpanel" aria-labelledby="changepass-tab" tabindex="0">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

     
        
        </div>
       

    </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log("Page loaded, script is running.");

        // Define a mapping from tab IDs to simpler hash names
        const hashMapping = {
            'editprofile-tab-pane': 'editprofile',
            'changepass-tab-pane': 'changepass',
        
        };

        // Check the URL for a fragment (e.g., #notes)
        const hash = window.location.hash.replace('#', ''); // Remove the #
        console.log("Current URL hash:", hash);

        if (hash) {
            // Use the hashMapping to find the corresponding tab pane ID
            const tabPaneId = Object.keys(hashMapping).find(key => hashMapping[key] === hash);
            console.log("Mapped tab pane ID:", tabPaneId);

            // If found, activate the corresponding tab
            if (tabPaneId) {
                const tabLink = document.querySelector(`a[data-bs-target="#${tabPaneId}"]`);
                console.log("Found tab link:", tabLink);

                if (tabLink) {
                    // Use Bootstrap's tab function to activate it
                    const tabInstance = new bootstrap.Tab(tabLink);
                    tabInstance.show();  // Show the tab
                    console.log("Tab activated:", hash);
                }
            }
        }

        // Handle updating the URL fragment when a tab is clicked
        const tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');
        tabLinks.forEach(tabLink => {
            tabLink.addEventListener('shown.bs.tab', function (e) {
                // Get the current tab's target ID
                const targetId = e.target.getAttribute('data-bs-target').replace('#', ''); // Remove the #
                console.log("Active tab ID:", targetId);

                // Get the corresponding simplified hash
                const simplifiedHash = hashMapping[targetId] || targetId; // Default to original if not found

                // Update the URL fragment without reloading the page
                window.history.pushState(null, null, `#${simplifiedHash}`);
                console.log("Tab clicked, URL updated to:", simplifiedHash);
            });
        });

       

    

        const activeTab = "{{ session('activeTab') }}"; // Check for active tab

        if (activeTab) {
            console.log("Active tab exists:", activeTab); // Debugging statement
            window.location.hash = activeTab;

            // Activate the corresponding tab
            const tabLink = document.querySelector(`a[data-bs-target="#${activeTab}-tab-pane"]`);
            if (tabLink) {
                const tabInstance = new bootstrap.Tab(tabLink);
                tabInstance.show();  // Show the active tab
                console.log(`${activeTab} tab activated.`); // Debugging statement
            }
        }
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jscharting.com/latest/jscharting.js"></script>
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @endsection

</body>
</html>