 
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
                                            <a class="nav-link active"  id="nonclient-tab" data-bs-toggle="tab" data-bs-target="#nonclient-tab-pane" type="button" role="tab" aria-controls="nonclient-tab-pane" aria-selected="true" >Non-Client Statues</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link "    id="client-tab" data-bs-toggle="tab" data-bs-target="#client-tab-pane" type="button" role="tab" aria-controls="client-tab-pane" aria-selected="true" >Client Statues</a>
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
                                                            <h3>Non-client Statues</h3>
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
</div> </div></div></div> </div>
        
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
                                <p>Check your disputes here.</p>
                            </div>
                            
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- dispute tab-->
     
     
     
     
        
    </div>
       

</div>
    @endsection