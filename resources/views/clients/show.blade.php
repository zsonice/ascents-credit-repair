<!DOCTYPE html>
<html>
<head>
    <title>Client Details</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="hello" >
    <h1 class="welcome"> Client Details</h1>
    <div class="row">
    <div class="col-sm-2">  
        <div class="card">
            <div class="card-body">
                
                     <div class="d-grid gap-2">

                     <nav>
        

       
                   
                <ul>
                    <li class="nav-company active"> 
                            <a href="#" >
                      
                                <span class="text nav-ctext">&nbsp;Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-company"> 
                            <a href="#">
                        
                                <span class="text nav-ctext">&nbsp;Import/Audit</span>
                            </a> 
                        </li>
                    <li class="nav-company">
                    <a href="#"> 
               
                        <span class="text nav-ctext">
                        &nbsp;Pending Report
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                
                        <span class="text nav-ctext">
                           &nbsp; Generate Letters
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                 
                        <span class="text nav-ctext">
                           &nbsp; Send Letters
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                   
                        <span class="text nav-ctext">
                           &nbsp; Letters & Status
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
            
                        <span class="text nav-ctext">
                           &nbsp; Dispute Items
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                     
                        <span class="text nav-ctext">
                           &nbsp; Educate
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                      
                        <span class="text nav-ctext">
                           &nbsp; Messages
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                
                        <span class="text nav-ctext">
                           &nbsp; Internal Notes
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
         
                        <span class="text nav-ctext">
                           &nbsp; Invoices
                        </span>
                        </a>

                    </li>
                    <li class="nav-company">
                        <a href="#" >
                
                        <span class="text nav-ctext">
                           &nbsp; Activity
                        </span>
                        </a>

                    </li>
                    
                </ul>
      
        
    </nav>    </div>
            </div>
        </div>
    </div>
    <div class="col">  
        <div class="card">
            <div class="card-body" id="col1">

            <div>
                <h3>Client Name</h3>
                <div class="container-fluid text-left">
                <nav class="navbar">
                        
                                 
                                <ul class="nav justify-content-left"> 
                                    <li class="nav-item">
                                    <button type="button" class="btn btn-outline-primary">  ROUND 1 OUT</button>  
                                         
                                        </a> 
                                    </li>    

                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                
                                        <i class="bi bi-envelope-at-fill"></i>&nbsp; youremail@gmail.com
                                        </a> 
                                    </li>   

                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                  
                                        <i class="bi bi-telephone-fill"></i> &nbsp; 0912-345-6789
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
<h6>Dispute Status</h6>
</div>  
<div class="disputestatus">
         
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
            <td>Unspecified</td> 
            <td>2</td>
            <td>7</td>
            <td>5</td>
         </tr>
    </tbody>
</table>
<div class="dispute">
                <div id="dispute">
                    
                </div>
</div>
</div>

</div>
</div>

<div class="card">
<div class="card-body">
    <h6>Progress</h6>
    <div>
    
    </div>
    </div>
</div>
<div class="card">
<div class="card-body">
    <h6>Billing & Payments</h6>
    <div>
    
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



            <table class="table">
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
                            </form>
        
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
