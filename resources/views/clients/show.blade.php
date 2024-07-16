<!DOCTYPE html>
<html>
<head>
    <title>Client Details</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="hello" id="showcontainer">

    <div class="row">
    
    <div class="col">  
       
             <div class="card">
            
        <div class="clientnav">
            <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Import/Audit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Pending Report</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Generate Letters</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Send Letters</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Letters & Status</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Dispute Items</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Educate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Messages</a>
  </li>
  <li class="nav-item disable">
    <a class="nav-link" href="#">Internal Note</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Invoices</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Activity</a>
  </li>


</ul>
</div>
       <!--     <div class="backbtn">
           
            <a class="icon-link icon-link-hover"  href="{{ route('clients.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
</svg>Back
  
</a>
                          
            </div>-->
            
            <div class="card-body" id="col1">

            <div>
                <h3>{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</h3>
                <div class="container-fluid text-left">
                <nav class="navbar">
                        
                                 
                                <ul class="nav justify-content-left"> 
                                    <li class="nav-item">
                                    <button type="button" class="btn btn-outline-info">  ROUND 1 OUT</button>  
                                         
                                        </a> 
                                    </li>    

                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                
                                        <i class="bi bi-envelope-at-fill"></i>&nbsp; {{$client->email}}
                                        </a> 
                                    </li>   

                                    <li class="nav-item" id="ClientNum">
                                        <a class="btn btn-app">
                                  
                                        <i class="bi bi-telephone-fill"></i> &nbsp; {{$client->formatted_phone_number}}
                                        </a> 
                                    </li>

                                   
                                </ul>
                                
                                
                      
                        </nav> 
                   

        
            </div>
            <div class="container-fluid text-left">
                <nav class="navbar">
                        
                                 
                                <ul class="nav justify-content-left" id="clientviews"> 
                                    <li class="nav-item">
                                    <a class="btn btn-app"> View/Edit Profile
                                         
                                        </a> 
                                        
                                    </li>
                                   

                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                View Client Agreement
                                        </a> 
                                    </li>   


                                   
                                </ul>
                                
                                <ul class="nav justify-content-end">
                                <li class="nav-item" id="#clientbtn">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-primary">
                                                   Import/Audit
                                            </button> 
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-primary" >
                                                   Run Dispute Wizard
                                            </button> 
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-primary" >
                                                    Send Message
                                            </button> 
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </nav> 
                   

            </div>
            <br>

            <div class="row" id="ShowClients">
    
            <div class="col-md-6"> 
                 <div class="card" id="scoretable">
                 <div class="card-body">
          <div class="card-header">  
<h6>Scores</h6>
</div>  

<div class="scoretable">
         
<table class="table table-hover" >
    <thead>
            
        <tr>
            <th>&nbsp;</th>
            <th><img src="\img\Equifax1.png" width="100"></th>
            <th><img src="\img\experian.png" width="100"></th>
             <th><img src="\img\transunion2.png" width="100"></th>
                                  
         </tr>
    </thead>
    <tbody>
                            
        <tr>    
            <td>07/12/2024</td> 
            <td>504</td>
            <td>530</td>
            <td>541</td>
         </tr>
    </tbody>
</table>
<div class="score">
                <div id="score">
                    
                </div>
</div>
</div>
<div class="container-fluid text-left">
                <nav class="navbar">                  
                                <ul class="nav justify-content-left" id="startdate" > 
                                    <li class="nav-item">
                                 <h6>Start Date: 06/29/2024</h6>
                                        
                                    </li>
                                </ul>
                                
                                <ul class="nav justify-content-end" id="clientviews">
                          
                                    <li class="nav-item">
                                     
                                        <a class="btn btn-app"> Add/Edit Scores
                                         
                                       
                                        </a> 
                                    </li>
                                  
                                </ul>
                            </div>
                        </nav> 


</div>
</div>


<div class="card"  id="disputestatus">
<div class="card-body">
<div class="card-header">  
    <div class="row">
        <div class="col">
<h6>Dispute Status</h6>
</div>
<div class="col">
<ul class="nav justify-content-end">
                                <li class="nav-item" >
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-secondary">
                                                  View Dispute
                                            </button> 
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-secondary" >
                                                  Import Reports
                                            </button> 
                                        </a> 
                                    </li>
                                   
                                </ul>
</div>
</div> 
 </div>
<div class="disputestatus">
         <div>
<table class="table table-hover" >
    <thead>
            
        <tr>
        <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th><img src="\img\Equifax1.png" width="100"></th>
            <th><img src="\img\experian.png" width="100"></th>
             <th><img src="\img\transunion2.png" width="100"></th>
                                  
         </tr>
    </thead>
    <tbody>
                            
        <tr>    
            <td><div class="square-unspecified"></div></td>
            <td class="squarestatus"> Unspecified</td> 
            <td>2</td>
            <td>7</td>
            <td>5</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Positive</td> 
            <td>32</td>
            <td>29</td>
            <td>22</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Deleted</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Repaired</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Updated</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-indispute"></div></td>
            <td class="squarestatus">In Dispute</td> 
            <td>7</td>
            <td>13</td>
            <td>10</td>
         </tr>
         <tr>    
            <td><div class="square-negative"></div></td>
            <td class="squarestatus">Verified</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-negative"></div></td>
            <td class="squarestatus">Negative</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-bletters"></div></td>
            <td class="squarestatus">Bureau Letters</td> 
            <td>1</td>
            <td>1</td>
            <td>1</td>
         </tr>
    </tbody>
</table>
<div class="fletters">
    <h6>Furnished Letters: 0</h6>
</div>
</div>
<div class="dispute">
                <div id="dispute">
                    
                </div>
                <div>
                    
               <!-- <div class="form-group" id="progress">
                                            <div class="row align-items-center" >
                    <div class="col-sm-2" >
                        <h6>75%</h6>
                    </div>
                    <div class="col">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
</div>
                </div></div></div>-->
                <div class="provider">
                                               
                                                <select name="provider" id="provider" required>
  <option value="" disabled selected></option>
  <option value="All">All</option>
        <option value="Equifax">Equifax</option>  
        <option value="Experian">Experian</option>  

    <option value="Transunion">Transunion</option> 
                     </select>
                      </div>
                      <div class="disputeclients">
                <nav class="navbar">                  
                            
                                <ul class="nav flex-column" id="clientviews">
                          
                                    <li class="nav-item">
                                        <a class="btn btn-app"> Client's Saved Letters
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                     <a class="btn btn-app"> Client's Saved Reports
                                     </a> 
                                    </li>
                                    <li class="nav-item">
                                     <a class="btn btn-app"> Document Storage
                                     </a> 
                                    </li>
                                   </div>
                                </ul>
                            
                        </nav>
</div>
</div>
</div>

</div>
</div>

<div class="card">
<div class="card-body">
<div class="card-header">  
    <h6>Progress</h6>
</div>
    <div class="clientprogress">
    <div style='overflow-y:auto'>
<table class="table" >
    <thead>
            
        <tr>
 
            <th> <i class="bi bi-check-circle-fill"></i></th>
            <th> <i class="bi bi-2-circle-fill"></i></th>
             <th> <i class="bi bi-3-circle-fill"></i></th>
             <th><i class="bi bi-check-circle-fill"></i></th>
             <th> <i class="bi bi-5-circle-fill"></i></th>
             <th><i class="bi bi-check-circle-fill"></i></th>
                                  
         </tr>
    </thead>
    <tbody>
                            
        <tr>    
            <td>Login Details Sent</td> 
            <td>Client Logged In</td>
            <td>Agreement Signed</td>
            <td>Onboarding Completed</td>
            <td>Report Imported</td>
            <td>Letters Saved</td>
         </tr>
    </tbody>
</table>

</div>
    </div>
    </div>
</div>
<div class="card"  id="clientbilling">
<div class="card-body">
<div class="card-header">  
    <div class="row">
        <div class="col">
<h6>Billing & Payments</h6>
</div>
<div class="col">
<ul class="nav justify-content-end">
                                <li class="nav-item" >
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-primary">
                                        New Task
                                            </button> 
                                        </a> 
                                    </li>
                                    
                                   
                                </ul>
</div>
</div> 
 </div>
    <div class="clientbilling">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="false">History</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
  <div class="card">
<div class="card-body">
<div>
    <h6>Overview</h6>
</div>
</div>
  </div>

</div>
  <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
  <div class="card">
<div class="card-body">
<div>
    <h6>History</h6>
</div>
</div>
  </div>  
  </div>
 </div>
    </div>
    </div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-body">
<h6>Tasks</h6>
<div>
    
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-body">
    <h6>Notes</h6>
    <div>
    
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-body">
    <h6>Documents</h6>
    <div>
    
    </div>
    </div>
    </div>
</div>



      <!--      <table class="table">
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ $client->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $client->name }}</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td>{{ $client->description }}</td>
                                </tr>
                            </table>
                            
                            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>-->
        
        </div>
        </div> 
    </div>
     
    
</div>
         

</div>
</div>
</div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
