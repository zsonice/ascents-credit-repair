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
                     
                             <div style='overflow-x:auto'>
                       
                            <table class="table">
                             
                                <tbody>
                             
                                        <tr>    
                                       <td>Assign tasks to team members</td>
                                            <td> 
                                                <a href="" class="btn"><i class='bx bxs-edit' ></i></a>
                                                <form action="" method="POST" style="display: inline-block;">
                                              
                                                    <button type="submit" class="btn"><i class='bx bxs-trash' ></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                       
                                </tbody>
                            </table>
                    
             
              

    
    
                             </div>
                            <div class="col-tasks">
                     <a class="btn btn-app">View All Tasks</a>
                    
                
                            </div>
                      </div>
                </div>
                
            </div>
</div>
            <div class="col">  
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
    <b>Get Five S Certified</b>
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
        
        <div class="card">
            <div class="card-body">
      
                <div class="card-header">
                    <div>
                        <div class="row m-b-34">
                            <div class="col-6">
                                <h6>Business Status</h6>
                            </div>
                        <div class="col-6 text-right">
                       
                               <h6> <a class="btn btn-app">View Dashboard</a></h6>
                        
                         </div>
                     </div>
                 </div>
             </div> <div class="chart">
                <div id="chart">
                    
                </div>
        </div>
           

            </div>
            
    </div>
    <div class="card">
            <div class="card-body">
      
                <div class="card-header">
                    <div>
                        <div class="row m-b-34">
                            <div class="col-6">
                                <h6>Recent Login Activity</h6>
                            </div>
                        <div class="col-6 text-right">
                       
                               <h6> <a class="btn btn-app">View Full History</a></h6>
                        
                        </div>
                                <div>
                                <p>If you observe any unfamiliar activity: update your password to secure your account or reach out to customer care for further assistance. To ensure the security of your account and client data, IDs and passwords must remain confidential and cannot be used to log in from two different locations or devices at the same time.</p>
                                </div>
                        </div>
                    </div>
                </div>
                <div style='overflow-y:auto'>
                     
                     <table class="table table-hover">
                         <thead>
                             <tr>
                                 <th>User</th>
                                 <th>IP Address</th>
                                 <th>Access Type</th>
                                 <th>Login</th>
                                 <th>Logout</th>
                                 <th>Location</th>
                                 
                             </tr>
                         </thead>
                         <tbody>
                         
                                 <tr>    
                                     <td>sgaas.aila@gmail.com</td> 
                                     <td>103.149.37.177</td> 
                                     <td>Browser</td>
                                     <td>06/11/2024 06:56 PM</td>
                                     <td>-</td>
                                     <td>PH</td>
                                  
                                  
                                 </tr>
                                 <tr>    
                                     <td>admin1@gmail.com</td> 
                                     <td>192.168.37.177</td> 
                                     <td>Mobile</td>
                                     <td>06/16/2024 10:56 AM</td>
                                     <td>-</td>
                                     <td>US</td>
                                  
                                  
                                 </tr>
                                 <tr>    
                                     <td>du123@gmail.com</td> 
                                     <td>192.168.0.1</td> 
                                     <td>Browser</td>
                                     <td>06/18/2024 12:02 PM</td>
                                     <td>-</td>
                                     <td>US</td>
                                  
                                  
                                 </tr>
                         
                         
                         </tbody>
                     </table>
        
</div> 
            </div>
          
           
           
 
    
    </div>
    
</div>
   
   
           

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection
