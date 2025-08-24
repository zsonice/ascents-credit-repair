{{-- resources/views/letters.blade.php --}}

@extends('layouts.app') {{-- Adjust layout as needed --}}
 
@section('content')
<div class="hello" id="dashboard">
    <!-- header -->
  <h1 class="welcome"> Library</h1>
    {{-- Add your letter content and any other necessary UI components here --}}
    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active"  id="dispute-tab" data-bs-toggle="tab" data-bs-target="#dispute-tab-pane" type="button" role="tab" aria-controls="dispute-tab-pane" aria-selected="true" >Dispute Letters</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link "    id="freeze-tab" data-bs-toggle="tab" data-bs-target="#freeze-tab-pane" type="button" role="tab" aria-controls="freeze-tab-pane" aria-selected="true" >Freeze Letters</a>


</ul>
    </div>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="dispute-tab-pane" role="tabpanel" aria-labelledby="dispute-tab" tabindex="0">
   
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
            <div class="row"  id="CLetter">
                    <div class="col" id="CLetterText">
                    <h3>Dispute Letters</h3>
                    <p>Use our templates or Create your own letter</p>
                    </div>
                    <div class="col-md-3" id="CLetterbtn">
                    <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#addNewLetter"></i>&nbsp;&nbsp;ADD NEW LETTERS</button>
                        </div>
                </div> <!--row-->
                

                <br>
                <div  id="loginActivity">

 <div style='overflow-y:auto'>
     <table class="table table-hover">
         <thead>
         <tr>
         <th>Letter Title</th>
         <th>Category</th>
         <th>Action</th>
        
         </tr>
         </thead>
     <tbody>
         <tr>
         <tr>
             <td><span class="skeleton">Round 2<span></td>
             <td> <span class="skeleton">Credit Bureau Letters </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Late Payment Letter Bureau Round 3 <span></td>
             <td> <span class="skeleton">Round 3 Bureau </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Round 2 Bureau Follow up<span></td>
             <td> <span class="skeleton">Round 2 Bureau </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Round 5<span></td>
             <td> <span class="skeleton">Credit Bureau Letters </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Round 4<span></td>
             <td> <span class="skeleton">Credit Bureau Letters </span></td>
             <td>
             <a href="#" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>

         </tr>
         <tr>
             <td><span class="skeleton">Update Request for Bankruptcy Filing<span></td>
             <td> <span class="skeleton">Additional Round Bureau </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>

         </tr>
         <tr>
             <td><span class="skeleton">Round 4 Failure to Provide Proof<span></td>
             <td> <span class="skeleton">Round 4 Creditor </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>

         </tr>
        
     </tbody>
     </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
    </div>
</div> </div></div></div> </div>
        
        <div class="tab-pane fade" id="freeze-tab-pane" role="tabpanel" aria-labelledby="freeze-tab" tabindex="0">
        <div class="col-md-10">
        <div class="card">
            <div class="card-body">
            <div class="row"  id="CLetter">
                    <div class="col" id="CLetterText">
                    <h3>Freeze Letters</h3>
                    <p>Use our templates or Create your own letter</p>
                    </div>
                    <div class="col-md-3" id="CLetterbtn">
                    <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#addFreezeLetter"></i>&nbsp;&nbsp;ADD FREEZE LETTERS</button>
                        </div>
                </div> <!--row-->
                

                <br>
                <div  id="loginActivity">

 <div style='overflow-y:auto'>
     <table class="table table-hover">
         <thead>
         <tr>
         <th>Letter Title</th>
         <th>Category</th>
         <th>Action</th>
        
         </tr>
         </thead>
     <tbody>
         <tr>
         <tr>
             <td><span class="skeleton">Default Freeze Letter Template<span></td>
             <td> <span class="skeleton">Freeze </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         
        
     </tbody>
     </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
    </div>
</div> </div></div></div> </div>
        </div>
     
        
    </div>
       

</div>
@endsection
<!--modal add letter-->
      <div class="modal fade" id="addNewLetter" tabindex="-1" role="dialog" aria-labelledby="addNewLetterLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewLetterLabel">Add New Letter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
             
      
                       <form action="" method="POST" >
                       
                            
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label for="lettername">Letter Title</label>
                                        <input type="text" name="lettername" autofocus id="lettername" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label for="lettercat">Letter Category</label>
                                        <input type="text" name="lettercat" autofocus id="lettercat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row align-items-center" id="lettercontent">
                                    <div class="col">                                                                       
                                        <label for="lettercontent">Letter Content</label>
                                        <textarea name="lettercontent" autofocus id="lettercontent" class="form-control" required> </textarea>
                                    </div>
                                </div>
                            </div>
                             
                             <br>

                       <button type="submit" class="btn btn-primary">Add Letter</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
<!--modal add letter -->
<!--modal add freeze letter-->
      <div class="modal fade" id="addFreezeLetter" tabindex="-1" role="dialog" aria-labelledby="addFreezeLetterLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFreezeLetterLabel">Add Freeze Letter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
             
      
                       <form action="" method="POST" >
                       
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label for="flettername">Letter Title</label>
                                        <input type="text" name="flettername" autofocus id="flettername" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row align-items-center" >
                                    <div class="col">
                                        <label for="flettercat">Letter Category</label>
                                        <input type="text" name="flettercat" autofocus id="flettercat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row align-items-center" id="flettercontent">
                                    <div class="col">                                                                       
                                        <label for="flettercontent">Letter Content</label>
                                        <textarea name="flettercontent" autofocus id="flettercontent" class="form-control" required> </textarea>
                                    </div>
                                </div>
                            </div>
                            
                       <button type="submit" class="btn btn-primary">Add Letter</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
<!--modal add  freeze letter -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log("Page loaded, script is running.");

        // Define a mapping from tab IDs to simpler hash names
        const hashMapping = {
            'dispute-tab-pane': 'dispute',
            'freeze-tab-pane': 'freeze',
        
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

 