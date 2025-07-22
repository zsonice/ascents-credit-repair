{{-- resources/views/support.blade.php --}}
@extends('layouts.app') {{-- Adjust layout as needed --}}

@section('content')
<div class="hello" id="dashboard">
    <!-- header -->
  <h1 class="welcome"> Help & Support</h1>
    {{-- Add your letter content and any other necessary UI components here --}}
    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active"  id="support-tab" data-bs-toggle="tab" data-bs-target="#support-tab-pane" type="button" role="tab" aria-controls="support-tab-pane" aria-selected="true" >Support Center</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources-tab-pane" type="button" role="tab" aria-controls="resources-tab-pane" aria-selected="true" >Resource Videos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="academy-tab" data-bs-toggle="tab" data-bs-target="#academy-tab-pane" type="button" role="tab" aria-controls="academy-tab-pane" aria-selected="true" >Training Academy</a>
        </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link "    id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips-tab-pane" type="button" role="tab" aria-controls="tips-tab-pane" aria-selected="true" >Tips & Tricks</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="feature-tab" data-bs-toggle="tab" data-bs-target="#feature-tab-pane" type="button" role="tab" aria-controls="feature-tab-pane" aria-selected="true" >New Feature Request</a>
        </li>
   
</ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="support-tab-pane" role="tabpanel" aria-labelledby="support-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Support Center</h3>
                                <p>Support center</p>
                            
                            <br>
                        <div  id="loginActivity">

 
                        </div> 

                                      


                            </div><!--col-->
                        </div> <!--row-->
           
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- tab-->
        
           
        <div class="tab-pane fade" id="resources-tab-pane" role="tabpanel" aria-labelledby="resources-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Resource Videos</h3>
                                <p>resource vid here</p>
                            
                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                                      


                            </div><!--col-->
                        </div> <!--row-->
           
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- tab-->
     
        <div class="tab-pane fade" id="academy-tab-pane" role="tabpanel" aria-labelledby="academy-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Training Academy</h3>
                                <p>academy here</p>
                          
                            <br>
                        <div  id="loginActivity">

 
                        </div> 

                                      


                            </div><!--col-->
                        </div> <!--row-->
           
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- tab-->
 
        <div class="tab-pane fade" id="tips-tab-pane" role="tabpanel" aria-labelledby="tips-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Tips & Tricks</h3>
                                <p>tips and tricks here</p>
                         
                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                                      


                            </div><!--col-->
                        </div> <!--row-->
           
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- tab-->
  
        <div class="tab-pane fade" id="feature-tab-pane" role="tabpanel" aria-labelledby="feature-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>New Feature Request</h3>
                                <p>send a request here</p>
                       
                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                                

                                      


                            </div><!--col-->
                        </div> <!--row-->
           
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- tab-->

         
     
     
     
     
     
        
    </div>
       

</div>
 

<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log("Page loaded, script is running.");

        // Define a mapping from tab IDs to simpler hash names
        const hashMapping = {
            'support-tab-pane': 'support',
            'resources-tab-pane': 'resources',
            'academy-tab-pane': 'academy',
            'tips-tab-pane': 'tips',
            'feature-tab-pane': 'feature',
        
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
@endsection
