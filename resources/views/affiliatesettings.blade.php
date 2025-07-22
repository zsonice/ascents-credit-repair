 
    @extends('layouts.app')
    @section('content') 
   <div class="hello" id="dashboard">
    <!-- header -->
  <h1 class="welcome"> Client & Affiliate Management</h1>
    {{-- Add your letter content and any other necessary UI components here --}}
    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active"  id="portal-tab" data-bs-toggle="tab" data-bs-target="#portal-tab-pane" type="button" role="tab" aria-controls="portal-tab-pane" aria-selected="true" >Client/Affiliate Portal</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="leads-tab" data-bs-toggle="tab" data-bs-target="#leads-tab-pane" type="button" role="tab" aria-controls="leads-tab-pane" aria-selected="true" >Lead/Client Statuses</a>
        </li>
     
         <li class="nav-item" role="presentation">
            <a class="nav-link "    id="signature-tab" data-bs-toggle="tab" data-bs-target="#signature-tab-pane" type="button" role="tab" aria-controls="signature-tab-pane" aria-selected="true" >Digital Signature Records</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="affiliate-tab" data-bs-toggle="tab" data-bs-target="#affiliate-tab-pane" type="button" role="tab" aria-controls="affiliate-tab-pane" aria-selected="true" >Affiliate Payments</a>
        </li>
       
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="dispute-tab" data-bs-toggle="tab" data-bs-target="#dispute-tab-pane" type="button" role="tab" aria-controls="dispute-tab-pane" aria-selected="true" >Dispute Options</a>
        </li>
       
       
          

</ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="portal-tab-pane" role="tabpanel" aria-labelledby="portal-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Client/Affiliate Portal</h3>
                                <p>Update your Clients and/or Affiliates here.</p>
                            </div>
                            
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">
                          
                            <div class="row" id="PLogo">
                                <div class="col">
                                    <h3>Portal Logo</h3>
                                    <p> A generic default logo is displayed unless you change it.</p>
                                  
                                    <form action="" method="POST" >
                        
                                        <div class="messages">
                        
                                        </div>
                                        <div class="fields">
                                            <div class="mb-3" id="uploadimg">
                                                <input type="file" class="form-control" id="upload_img" name="upload_img" accept=".jpg, .png, .jpeg" >
                                            
                                            </div>
                                        </div>
                        
                                    </form>
                                </div>
                                 <div class="col">
                                    <h3>Portal Theme</h3>
                                    <p> You can choose any theme color of portal for your clients and affiliates.</p>
                                  
                                    <form action="" method="POST" >
                        
                                        <div class="messages">
                        
                                        </div>
                                        <div class="fields" >
                                            <div class="mb-3" id="uploadcolor">
                                                <input type="color" class="form-control" id="upload_color" name="upload_color" style="width:200px;height:35px;">
                                            
                                            </div>
                                        </div>
                        
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="row" id="PLogo">
                                <h3>Live Portal Preview</h3>
                                <p> A generic default logo is displayed unless you change it.</p>
                                <br>
                                <div class="col-md-3">
                                    <button class="btn btn-primary">View My Client Portal</button>
                                </div>
                                  <div class="col-md-3">
                                     <button class="btn btn-secondary">View My Affiliate Portal</button>
                                </div>
                                
                                
                            </div>
 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- portal tab-->
        
        <div class="tab-pane fade" id="leads-tab-pane" role="tabpanel" aria-labelledby="leads-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Leads/Client Statuses</h3>
                                <p>Listed below are the statuses that can be assigned to your clients. Very few users will ever need to use this page, but instructions are below for advanced users with a special need to create custom statuses with different login privileges. </p>
                            </div>
                           
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">
                                <div class="clientnav">
                                    <ul class="nav nav-underline" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active"  id="nonclient-tab" data-bs-toggle="tab" data-bs-target="#nonclient-tab-pane" type="button" role="tab" aria-controls="nonclient-tab-pane" aria-selected="true" >Non-Client Statuses</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link "    id="client-tab" data-bs-toggle="tab" data-bs-target="#client-tab-pane" type="button" role="tab" aria-controls="client-tab-pane" aria-selected="true" >Client Statuses</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="nonclient-tab-pane" role="tabpanel" aria-labelledby="nonclient-tab" tabindex="0">
   
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row"  id="CLetter">
                                                        <div class="col" id="CLetterText">
                                                            <h3>Non-client Statuses</h3>
                                                            <p>These statuses do not allow you to do work on client.</p>
                                                        </div>
                                                        <div class="col-md-3" id="CLetterbtn">
                                                            <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;ADD NEW STATUS</button>
                                                        </div>
                                                    </div> <!--row-->
                

                                                    <br>
                                                    <div  id="loginActivity">

                                                        <div style='overflow-y:auto'>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                <th>Label</th>
                                                                
                                                                <th>Total</th>
                                                                <th>Portal Login Access</th>
                                                                <th></th>
                                                                </tr>
                                                                </thead>
                                                            <tbody>
                                                                <tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Label<span></td>
                                                                    <td> <span class="skeleton">1 </span></td>
                                                                    <td>No</td>
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Lead/Inactive<span></td>
                                                                    <td> <span class="skeleton">0</span></td>
                                                                    <td>No</td>
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                            
                                                            </tbody>
                                                            </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          
        <div class="tab-pane fade" id="client-tab-pane" role="tabpanel" aria-labelledby="client-tab" tabindex="0">
        <div class="col-md-10">
        <div class="card">
            <div class="card-body">
            <div class="row"  id="CLetter">
                    <div class="col" id="CLetterText">
                    <h3>Client Statuses</h3>
                    <p>These statuses do allow you to do work on client.</p>
                    </div>
                    <div class="col-md-3" id="CLetterbtn">
                    <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;ADD NEW STATUS</button>
                        </div>
                </div> <!--row-->
                

                <br>
                <div  id="loginActivity">

 <div style='overflow-y:auto'>
     <table class="table table-hover">
         <thead>
         <tr>
         <th>Label</th>
         <th>Total</th>
         <th>Portal Login Access</th>
         <th></th>
        
         </tr>
         </thead>
     <tbody>
         <tr>
                                                                <td><span class="skeleton">Client<span></td>
                                                                <td> <span class="skeleton">109</span></td>
                                                                <td>Yes</td>
                                                                <td>
                                                           
                                                                                                    <!-- Button to Open the Modal -->
                                                                                                
                                                                    <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
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
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- leads tab-->
         
         <div class="tab-pane fade" id="signature-tab-pane" role="tabpanel" aria-labelledby="signature-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Digital Signature Records</h3>
                                <p>Check your Digital Signature Records  here.</p>
                            </div>
                           
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">
                        <div style='overflow-y:auto'>
     <table class="table table-hover">
         <thead>
         <tr>
         <th>Name</th>
         <th>Email</th>
         <th>IP Address</th>
         <th>Agreement Date</th>
         <th>Status</th>
         <th></th>
        
         </tr>
         </thead>
     <tbody>
         <tr>
                <td><span class="skeleton">Hii Chaman<span></td>
                <td> <span class="skeleton">hiichaman@hii.com</span></td>
                <td>127.0.0.1</td>
                <td>6/12/2025 6:16AM</td>
                <td>Client</td>
                <td><a href="" class="btn"><i class="bi bi-eye-fill"></i></a> </td>
        </tr>
        <tr>
                <td><span class="skeleton">Ashey Chaman<span></td>
                <td> <span class="skeleton">asheychaman@hii.com</span></td>
                <td>127.0.0.2</td>
                <td>6/12/2025 6:18AM</td>
                <td>Client</td>
                <td><a href="" class="btn"><i class="bi bi-eye-fill"></i></a> </td>
        </tr>
         <tr>
                <td><span class="skeleton">DuuChaman<span></td>
                <td> <span class="skeleton">duuchaman@hii.com</span></td>
                <td>127.0.0.3</td>
                <td>6/12/2025 6:19AM</td>
                <td>Client</td>
                <td><a href="" class="btn"><i class="bi bi-eye-fill"></i></a> </td>
        </tr>
                  
                                                            
         
        
     </tbody>
     </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
    </div>
 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- signature tab-->
        <div class="tab-pane fade" id="affiliate-tab-pane" role="tabpanel" aria-labelledby="affiliate-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Affiliate Payments</h3>
                                <p>Track your Affiliate Payments here.</p>
                            </div>
                            
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- affiliate tab-->
      <div class="tab-pane fade" id="dispute-tab-pane" role="tabpanel" aria-labelledby="dispute-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Dispute Options</h3>
                                <p>Check your Dispute Information here.</p>
                            </div>
                            
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity" class="tabs">
                             <div class="clientnav">
                                    <ul class="nav nav-underline" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active"  id="creditb-tab" data-bs-toggle="tab" data-bs-target="#creditb-tab-pane" type="button" role="tab" aria-controls="creditb-tab-pane" aria-selected="true" >Credit Bureaus</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link "    id="reason-tab" data-bs-toggle="tab" data-bs-target="#reason-tab-pane" type="button" role="tab" aria-controls="reason-tab-pane" aria-selected="true" >Dispute Reasons</a>
                                        </li>
                                             <li class="nav-item" role="presentation">
                                            <a class="nav-link "    id="instruction-tab" data-bs-toggle="tab" data-bs-target="#instruction-tab-pane" type="button" role="tab" aria-controls="instruction-tab-pane" aria-selected="true" >Dispute Instructions</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="creditb-tab-pane" role="tabpanel" aria-labelledby="creditb-tab" tabindex="0">
   
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row"  id="CLetter">
                                                        <div class="col" id="CLetterText">
                                                            <h3>Note</h3>
                                                            <p>For custom bureau logos, please upload only JPG, JPEG, GIF, BMP or PNG files with dimensions of 100 x 20. If your account is set up in the USA, bureau information cannot be modified and changes to logos are not permitted. We recommend US accounts do not make any changes to this page.</p>
                                                        </div>
                                                 
                                                    </div> <!--row-->
                

                                                    <br>
                                                    <div  id="loginActivity">

                                                        <div style='overflow-y:auto'>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                <th>Name</th>
                                                                <th>Logo</th>
                                                                <th>Address</th>
                                                                <th></th>
                                                                
                                                           
                                                              
                                                                </tr>
                                                                </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><span class="skeleton">Equifax<span></td>
                                                                    <td><span class="skeleton"> <img src="/img/equifax.png" alt="" width="90px" ></span></td>
                                                                    <td><span class="skeleton">Equifax Information Services LLC</span><br>
                                                                        <span class="skeleton">P.O. Box 740256</span> <br>
                                                                        <span class="skeleton">Atlanta, GA 30374-0256</span>
                                                                    <td> 
                                                                        <!-- Button to Open the Modal -->
                                                                        <button type="button" class="btn edit-btn" data-toggle="modal" data-target="#editClientModal" data-id="">
                                                                            <i class='bx bxs-edit'></i>
                                                                        </button>
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                                                                        </form> 
                                                                    </td>
                                                                </tr>
                                                                   <tr>
                                                                    <td><span class="skeleton">Experian<span></td>
                                                                    <td><span class="skeleton"> <img src="/img/experian.png" alt="" width="90px" ></span></td>
                                                                    <td><span class="skeleton">Experian</span><br>
                                                                        <span class="skeleton">P.O. Box 4500</span><br>
                                                                        <span class="skeleton">Allen, TX 75013</span></td>
                                                                    <td> 
                                                                        <!-- Button to Open the Modal -->
                                                                        <button type="button" class="btn edit-btn" data-toggle="modal" data-target="#editClientModal" data-id="">
                                                                            <i class='bx bxs-edit'></i>
                                                                        </button>
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                                                                        </form> 
                                                                    </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Transunion<span></td>
                                                                    <td><span class="skeleton"> <img src="/img/transunion.png" alt="" width="90px" ></span></td>
                                                                    <td><span class="skeleton">TransUnion LLC Consumer Dispute Center</span><br>
                                                                        <span class="skeleton">P.O. Box 2000</span><br>
                                                                        <span class="skeleton">Chester, PA 19016</span></td>
                                                                    <td> 
                                                                        <!-- Button to Open the Modal -->
                                                                        <button type="button" class="btn edit-btn" data-toggle="modal" data-target="#editClientModal" data-id="">
                                                                            <i class='bx bxs-edit'></i>
                                                                        </button>
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                                                                        </form> 
                                                                    </td>   
                                                                </tr>
                                                             
                                                            
                                                            </tbody>
                                                            </table>
                                                        </div>
 
                                                    </div> 
                                                </div>
                                            </div><!--card-->
                                        </div> <!--col-->
                                    </div> 
     
                                    <div class="tab-pane fade" id="reason-tab-pane" role="tabpanel" aria-labelledby="reason-tab" tabindex="0">
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row"  id="CLetter">
                                                        <div class="col" id="CLetterText">
                                                            <h3>Dispute Options</h3>
                                                            <p>Add, remove or modify the dispute reasons that appear as choices in the Dispute Wizard.</p>
                                                        </div>
                                                        <div class="col-md-3" id="CLetterbtn">
                                                            <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#addReasonModal"></i>&nbsp;&nbsp;ADD NEW REASONS</button>
                                                        </div>
                                                    </div> <!--row-->
                                                    

                                                    <br>
                                                    <div  id="loginActivity">

                                                        <div style='overflow-y:auto'>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                <th>Reason</th>
                                                                
                                                           
                                                                <th></th>
                                                                </tr>
                                                                </thead>
                                                            <tbody>
                                                                <tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Sample Reason<span></td>
                                                                
            
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td><span class="skeleton">The following personal information is incorrect<span></td>
                                                               
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                                  <tr>
                                                                    <td><span class="skeleton">The following account is not mine<span></td>
                                                               
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                                  <tr>
                                                                    <td><span class="skeleton">The status is incorrect for the following account<span></td>
                                                               
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                            
                                                            </tbody>
                                                            </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="instruction-tab-pane" role="tabpanel" aria-labelledby="instruction-tab" tabindex="0">
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row"  id="CLetter">
                                                        <div class="col" id="CLetterText">
                                                            <h3>Dispute Instructions</h3>
                                                            <p>Add, remove or modify the dispute instructions that appear as choices in the Dispute Wizard.</p>
                                                        </div>
                                                        <div class="col-md-3" id="CLetterbtn">
                                                            <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#addInstructionModal"></i>&nbsp;&nbsp;ADD NEW INSTRUCTIONS</button>
                                                        </div>
                                                    </div> <!--row-->
                                                    

                                                    <br>
                                                    <div  id="loginActivity">

                                                        <div style='overflow-y:auto'>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                <th>Instructions</th>
                                                                
                                                           
                                                                <th></th>
                                                                </tr>
                                                                </thead>
                                                            <tbody>
                                                                <tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Please correct/update this inaccurate information on my credit report.<span></td>
                                                                
            
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Please remove this inaccurate information from my credit report.<span></td>
                                                               
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td><span class="skeleton">Please remove it from my credit report.
<span></td>
                                                               
                                                                    <td>
                                                            
                                                                                                        <!-- Button to Open the Modal -->
                                                                                                    
                                                                        <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-lock-fill"></i></button>
                                                                        </form>
                                                                    </td>


                                                                </tr>
                                                            
                                                            </tbody>
                                                            </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        </div>
     
     
        
    </div>
       

</div>
<!--modal add REASON-->
      <div class="modal fade" id="addReasonModal" tabindex="-1" role="dialog" aria-labelledby="addReasonLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReasonLabel">Add Reason</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" >
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="reason">Reason</label>
                                    <input type="text" name="reason" autofocus id="reason" class="form-control" required>
                                </div>
                            </div>
                        </div>
                             
                            

                       <button type="submit" class="btn btn-primary">Add Reason</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
<!--modal add REASON -->
<!--modal add iNstructions-->
      <div class="modal fade" id="addInstructionModal" tabindex="-1" role="dialog" aria-labelledby="addInstructionLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addInstructionLabel">Add Instructions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" >
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="reason">Instructions</label>
                                    <input type="text" name="reason" autofocus id="reason" class="form-control" required>
                                </div>
                            </div>
                        </div>
                             
                            

                       <button type="submit" class="btn btn-primary">Add Instruction</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
<!--modal add instructions-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log("Page loaded, script is running.");

        // Define a mapping from tab IDs to simpler hash names
        const hashMapping = {
            'portal-tab-pane': 'portal',
            'leads-tab-pane': 'leads',
            'signature-tab-pane': 'signature',
            'affiliate-tab-pane': 'affiliate',
            'dispute-tab-pane': 'dispute',
        
        
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