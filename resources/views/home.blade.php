@extends('layouts.app')

@section('content') 


<div class="hello" id="dashboard">
 <h1 class="welcome"> Dashboard</h1>
 <div class="row">
<div class="col-md-9" id="info-card">
<div class="row" >

    <div class="col">  
        <div class="card" id="info">
             <div class="card-body">
                <div class="head">
                    <div class="labelicon">
                    <div class="cardlabel">
                        <p>All Clients</p>
                        <h2>40,689</h2>      
                    </div>
                    <div class="icon">
<!-- <i class="bi bi-people-fill icon all"></i>    -->
 <img src="/img/all.png" alt="" width="50px" height="50px">
                    </div>
                </div>
         <div class="pastdata"><h6><i class='bx bx-trending-up icon'></i>  &nbsp;<span class="up">8.5%</span>&nbsp; from yesterday</h6> </div> 
                   
                </div>
              </div>
        </div>

    </div>

    <div class="col">  
        <div class="card">
             <div class="card-body">
                <div class="head">
                <div class="labelicon">
                    <div class="cardlabel">
                        <p>New Clients</p>
                        <h2>1,689</h2>      
                    </div>
                    <div class="icon">
                 <!--   <i class="bi bi-person-plus-fill icon new"></i> -->
                 <img src="/img/new.png" alt="" width="50px" height="50px">
                 
                    </div>
</div>
         <div class="pastdata"><h6><i class='bx bx-trending-down icon down'></i>  &nbsp;<span class="down">1.5%</span>&nbsp; from past week</h6> </div> 
                   
                </div>
              </div>
        </div>

    </div>

    <div class="col">  
        <div class="card">
             <div class="card-body">
                <div class="head">
                <div class="labelicon">
                    <div class="cardlabel">
                        <p>Active Clients</p>
                        <h2>36,119</h2>      
                    </div>
                    <div class="icon">
                  <!--  <i class="bi bi-person-fill-check icon active"></i> -->
                  <img src="/img/active.png" alt="" width="50px" height="50px">
                    </div>
</div>
         <div class="pastdata"><h6><i class='bx bx-trending-down icon down'></i>  &nbsp;<span class="down">4.5%</span>&nbsp; from past yesterday</h6> </div> 
                   
                </div>
              </div>
        </div>

    </div>


</div> <!--row-->


<div class="row">
<div class="col">
<div class="card">
            <div class="card-body">
      
                <div class="clientgraph">
                <div id="clientgraph">
                    
                </div>
        </div>
           

            </div>
            
    </div>
</div>
</div>
</div>


<div class="col-md-3" id="Reminders">  
        <div class="card">
             <div class="card-body">
               <div>
                <h3>Reminders</h3>
               </div>
               <div class="iAlerts">
                 <h6>Important Alerts</h6>
               </div>
               <div class="iBody">
         
                     
                     <table class="table table-hover">
                    
                         <tbody>
                         
                                 <tr>    
                                     <td><i class="bi bi-exclamation-triangle-fill"></i></td> 
                                     <td><a href="#"> Past due - Ashley's Debt</a>  
                                     <h6>Email Send</h6></td> 

                                 </tr>
                               
                                 <tr>    
                                     <td><i class="bi bi-exclamation-triangle-fill"></i></td> 
                                     <td> <a href="#"> Past due - Ashley's Tuwep</a>  
                                     <h6>Follow-Up tuwep</h6></a></td> 

                                 </tr>
                                 <tr>    
                                     <td><i class="bi bi-exclamation-triangle-fill"></i></td> 
                                     <td> <a href="#"> Past due - Lala letter</a>  
                                     <h6>Letter Send</h6></a></td> 

                                 </tr>
                                 <tr>    
                                     <td><i class="bi bi-exclamation-triangle-fill"></i></td> 
                                     <td> <a href="#"> Past due - Duan Chismosa</a>  
                                     <h6>Meeting with Tuwep GC</h6></a></td> 

                                 </tr>
                         
                         </tbody>
                    
                     </table>
      

            
               </div>  <div class="iView">

<a href="#">View All</a>
        </div>
        
     </div> 
  
</div>
</div>

</div> <!--row-->
<div class="row">
<div class="col-md-9" id="info-card">
<div class="row" >

    <div class="col">  
        <div class="card" id="NewClients">
             <div class="card-body">
             <div>
                <h3>New Clients</h3>
               </div>
               <div style='overflow-y:auto'>
                     
                     <table class="table table-hover">
                         <thead>
                             <tr>
                             <th>Name</th>
                                 <th>Assigned To</th>
                                 <th>Date</th>
                            
                                 <th>Action</th>
                       
                                 
                             </tr>
                         </thead>
                         <tbody>
                         
                                 <tr>    
                                 <td>Lala Chan</td> 
                                     <td>Lala</td> 
                                     <td>06/11/2024 06:56 PM</td>
                                  
                                     <td> <button class="btn btn-primary">View</button>  
                                   </td>
                                
                                 </tr>
                                 <tr>    
                                 <td>Ashwe Bading</td> 
                                     <td>Lala</td> 
                                     <td>04/12/2024 10:56 AM</td>
                             
                                     <td><button class="btn btn-primary">View</button>  
                               </td>
                         
                                 </tr>
                                 <tr>    
                                 <td>Duan Bading</td> 
                                     <td>Lala</td> 
                                     <td>04/12/2024 10:56 AM</td>
                                   
                                     <td><button class="btn btn-primary">View</button>  
                               </td>
                         
                                 </tr>
                           
                        
                         
                         
                         </tbody>
                     </table>
                     <div class="iView">

<a href="#">View All</a>
        </div>
                     
        
</div> 
              

    </div>
    

</div> <!--row-->


<div class="row">
<div class="col">
<div class="card"  id="ActiveClients">
            <div class="card-body">
      
            <div>
                <h3>Active Clients</h3>
               </div>
               <div style='overflow-y:auto'>
                     
                     <table class="table table-hover">
                         <thead>
                             <tr>
                             <th>Name</th>
                                 <th>Assigned To</th>
                                 <th>Date</th>
                                 <th>Status</th>
                                 <th>Action</th>
                       
                                 
                             </tr>
                         </thead>
                         <tbody>
                         
                                 <tr>    
                                 <td>Lala Chan</td> 
                                     <td>Lala</td> 
                                     <td>06/11/2024 06:56 PM</td>
                                     <td>Active</td>
                                     <td> <button class="btn btn-primary">View</button>  
                                   </td>
                                
                                 </tr>
                                 <tr>    
                                 <td>Ashwe Bading</td> 
                                     <td>Lala</td> 
                                     <td>04/12/2024 10:56 AM</td>
                                     <td>Inactive</td>
                                     <td><button class="btn btn-primary">View</button>  
                               </td>
                         
                                 </tr>
                                 <tr>    
                                 <td>Duan Bading</td> 
                                     <td>Lala</td> 
                                     <td>04/12/2024 10:56 AM</td>
                                     <td>Inactive</td>
                                     <td><button class="btn btn-primary">View</button>  
                               </td>
                         
                         
                         
                         
                         </tbody>
                     </table>
                     <div class="iView">

<a href="#">View All</a>
        </div> 
</div> 
              

   
                </div>
        </div>
           

            </div>
            
    </div>
</div>
</div>
</div>


<div class="col-md-3" id="Messages">  
        <div class="card">
             <div class="card-body">
               <div>
                <h3>Messages</h3>
               </div>
         
               <div class="iMessageBody">
         
                     
                     <table class="table table-hover">
                    
                         <tbody>
                         
                                 <tr>    
                                     <td><i class="bi bi-chat-left-text-fill"></i></td> 
                                     <td><a href="#">Ashwe Bading</a>  
                                     <h6>Great morning, this is Ashwe Bading...</h6></td> 

                                 </tr>
                               
                                 <tr>    
                                     <td><i class="bi bi-chat-left-text-fill"></i></td> 
                                     <td><a href="#">Duan Tuwep</a>
                                     <h6>Hi this is duan tuwep. I just want to...</h6></td> 

                                 </tr>
                                 <tr>    
                                     <td><i class="bi bi-chat-left-text-fill"></i></td> 
                                     <td><a href="#">Ashwe Bading</a>  
                                     <h6>Great morning, this is Ashwe Bading...</h6></td> 

                                 </tr>
                                 <tr>    
                                     <td><i class="bi bi-chat-left-text-fill"></i></td> 
                                     <td><a href="#">Ashwe Bading</a>  
                                     <h6>Great morning, this is Ashwe Bading...</h6></td> 

                                 </tr>
                         </tbody>
                    
                     </table>
      

            
               </div>  <div class="iView">

<a href="#">View All</a>
        </div>
        
     </div> 
  
</div>
</div>

</div> <!--row-->

    <div class="card" id="loginActivity">
            <div class="card-body">
                                <h3>Recent Login Activity</h3>
                          
                    
               
             
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
                     <div class="iView">

<a href="#">View All</a>
        </div>         
                   <!--  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <div class="pagination">
        
  <a href="#">❮</a>
  <a href="#">❯</a>
</div>
  </ul>
</nav> -->
</div> 
            </div>
          
           
           
 
    
    </div>
    
</div>



            
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection
