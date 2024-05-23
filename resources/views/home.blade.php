@extends('layouts.app')

@section('content') 


<div class="hello">
 <h1 class="welcome"> Hello Credit Connoisseur!</h1>
        <div class="row">
    
            <div class="col-md-4">  
                <div class="card">
                     <div class="card-body">
                         <div class="card-header">
  
    <h6> Common Tasks </h6>
                         </div>
                             <div class="d-grid gap-2">
    
    <button type="button" class="btn btn-outline-primary"></i><b>Add New Clients</b><br><p>Sign up a new client</p></button>
    <button type="button" class="btn btn-outline-primary"></i><b>Select an Existing Client</b><br><p>Work with an existing client</p></button>
    <button type="button" class="btn btn-outline-primary"></i><b>Run Credit Dispute Wizard</b><br><p>Order reports, review reports, corret errors</p></button>
                             </div>
                      </div>
                </div>
                <div class="card">
                     <div class="card-body">
                         <div class="card-header">
  
    <h6> Personal Tasks </h6>
                         </div>
                             <div class="todo">
                                <br>
    <p> You have no tasks</p>
    <br>
    
    
                             </div>
                             <div class="card-footer">
  
                             <button type="button" class="btn btn-primary"><i class="bi bi-calendar-plus-fill"></i> &nbsp;New Task</button>
                           
                         </div>
                      </div>
                </div>
                
            </div>
            
            <div class="col-md-8">  
                <div class="card">
                     <div class="card-body">
                        <div class="row">
                            <div class="row-links">
                                <div class="col-md-12">
                                     <div class="d-grid gap-2">
        <button type="button" class="btn"> 
        <i class="bi bi-buildings-fill"></i> &nbsp;
  <b>My Company</b>
  <br>
  <p>Configure users, permissions, billing</p>
</button>
    <button type="button" class="btn">
        <i class="bi bi-credit-card"></i>&nbsp;
    <b>Get a Merchant Account</b>
    <br>
    <p>Accept credit card payments from clients</p>
</button>
</button>
    <button type="button" class="btn">
    <i class='bx bxs-report'></i>&nbsp;
    <b>Credit Reports & Scores</b>
    <br>
    <p>Earn money from recommended providers</p>
</button>
<button type="button" class="btn">
<i class='bx bxs-contact' ></i>&nbsp;
    <b>Contacts</b>
    <br>
    <p>Manage contacts and addresses</p>
</button>

<button type="button" class="btn"> 
<i class='bx bx-log-in-circle'></i>&nbsp;
  <b>Client & Affiliate Portal</b>
  <br>
  <p>Client and Affiliates log in here</p>
</button>
    <button type="button" class="btn">
    <i class='bx bxs-file' ></i>&nbsp;
    <b>Library of Dispute Letters</b>
    <br>
    <p>Also add your own custom letters</p>
</button>
<button type="button" class="btn"> 
<i class="bi bi-bar-chart-steps"></i>&nbsp;
  <b>Take the Start Repairing Credit Challenge</b>
  <br>
  <p>Credit repair training and certificate</p>
</button>
    <button type="button" class="btn">
    <i class='bx bxs-window-alt' ></i>&nbsp;
    <b>Get a Business Website</b>
    <br>
    <p>Get a professional site</p>
</button>
</button>
    <button type="button" class="btn">
    <i class='bx bxs-certification' ></i></i>&nbsp;
    <b>Get CRC Certified</b>
    <br>
    <p>Get FREE step-by-step training</p>
</button>
<button type="button" class="btn">
<i class='bx bxs-videos' ></i>&nbsp;
    <b>Free Videos & Resources</b>
    <br>
    <p>Credit Repair Cloud use guides</p>
</button>

<button type="button" class="btn"> 
<i class="bi bi-film"></i>&nbsp;
  <b>Free Live Software Classes</b>
  <br>
  <p>Daily for all Credit Heroes!</p>
</button>
    <button type="button" class="btn">
    <i class="bi bi-file-earmark-arrow-down-fill"></i>&nbsp;
    <b>
        Bonus Materials
    </b>
    <br>
    <p>Legal documents and marketing materials</p>
</button>

                                    </div>
       
                                </div>
                                
    
                          </div>
                          
         
         
                        </div>
                    </div>
                    
                </div>
                
             </div> 
             
            
        </div>
   

</div>
   
   
           


@endsection
