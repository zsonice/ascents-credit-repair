@extends('layouts.app')

@section('content') 
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
 
    </a>
    <ul class="nav justify-content-end">

<li class="nav-item">
<a class="btn btn-app">
                  
                  <i class="fas fa-users"></i> Clients
                  <span class="badge bg-info">85</span>
                </a>

</li>
<li class="nav-item">
  <a class="btn btn-app">
                  
                  <i class="fas fa-envelope"></i> Inbox
               <span class="badge bg-warning">12</span> </a>
  </li>
  <li class="nav-item">
  <a class="btn btn-app">
                  
                  <i class="fas fa-bullhorn"></i> Notifications
              <span class="badge bg-danger">97</span>  </a>
  </li>
 
</ul>
  </div>
</nav>

<div class="hello">
 <h1 class="welcome"> Hello Credit Connoisseur!</h1>
        <div class="row">
    
            <div class="col-md-4">  
                <div class="card">
                     <div class="card-body">
                         <div class="card-header">
  
    <h6> Your Common Tasks </h6>
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
    <p> You have no tasks</p>
    
    
                             </div>
                             <div class="card-footer">
  
                             <button type="button" class="btn btn-primary"><i class="bi bi-plus"></i> &nbsp;New Task</button>
                           
                         </div>
                      </div>
                </div>
            </div>
            
            <div class="col-md-8">  
                <div class="card">
                     <div class="card-body">
                        <div class="row">
                            <div class="row-links">
                                <div class="col-md-6">
                                     <div class="d-grid gap-2">
        <button type="button" class="btn"> 
        <i class="bi bi-buildings-fill"></i>
  <b>My Company</b>
  <br>
  <p>Configure users, permissions, billing</p>
</button>
    <button type="button" class="btn"></i>
    <b>Get a Merchant Account</b>
    <br>
    <p>Accept credit card payments from clients</p>
</button>
</button>
    <button type="button" class="btn"></i>
    <b>Credit Reports & Scores</b>
    <br>
    <p>Earn money from recommended providers</p>
</button>
<button type="button" class="btn"></i>
    <b>Contacts</b>
    <br>
    <p>Manage contacts and addresses</p>
</button>

<button type="button" class="btn"> 
        <i class="bi bi-buildings-fill"></i>
  <b>Client & Affiliate Portal</b>
  <br>
  <p>Client and Affiliates log in here</p>
</button>
    <button type="button" class="btn"></i>
    <b>Library of Dispute Letters</b>
    <br>
    <p>Also add your own custom letters</p>
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
