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

    <div class="clientnav">
    <ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Import/Audit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Generate Letters</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Notes</a>
  </li>

</ul>
    </div>

    <div class="row">
<div class="col-md-7" id="clientinfo">

            <div class="row">
            <div class="col">
            <div class="card">
            <div class="card-body">
      <div class="clientname">
        <h1>{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</h1>
      </div>


      <div class="container">
   <div class="row">
     <div class="col">
       <ul id="progress-bar" class="progressbar">
         <li class="active">Account Created</li>
         <li>Credit Import</li>
         <li>Dispute Round 1</li>
         <li>Dispute Round 2</li>
         <li>Completed</li>
      </ul>
     </div>
  </div>
</div>
<div class="row">
<div class="col">
    <div class="clientinfo">
        <div id="clientaddress">
<i class="bi bi-house-fill"></i> &nbsp;
    <h6>1027 Racebrook Rd Woodbridge<br>Connecticut 06525 United States</h6>
        </div>
        <div id="clientemail">
        <i class="bi bi-envelope-at-fill"></i> &nbsp;
    <h6>lala@thefunnelpanda.com</h6>
        </div>
       <div id="clientphone">
       <i class="bi bi-telephone-fill"></i> </i>  &nbsp;
       <div id="phonenum">
    <h6>(555) 555-1234 &nbsp;<span>(Mobile)</span></h6>
    <h6>(523) 532-1234 &nbsp;<span>(Alt)</span></h6>
    <h6>(523) 532-1234 &nbsp;<span>(Work)</span></h6></div>
        </div>
</div>
</div>
<div class="col">
    <div class="clientinfo2">
        <div id="clientssn">
<label for="ssn">SSN:</label>
    <h6>&nbsp;1027</h6>
        </div>
        <div id="clientdob"> 
<label for="dob">Date of Birth:</label>
    <h6>&nbsp;May 29, 1997</h6>
        </div>
        <div id="clientstart">
<label for="start_date">Start Date:</label> 
    <h6>&nbsp;July 20, 2024</h6>
        </div>
        <div id="clientcreate">
       <label for="create_date">Created Date:</label> 
    <h6>&nbsp;July 12, 2024</h6>
        </div>
       
    </div>
</div>
</div>                
            </div>
            </div>
           

            </div>
            
             </div>
             <!--row-->
</div>
<div class="col-md-3" id="Notes">  
        <div class="card">
             <div class="card-body">
               <div>
                <h3>Notes</h3>
               </div>
               
               <div class="iBody">
         
                     
                     <table class="table table-hover">
                    
                         <tbody>
                         
                                 <tr>    
                                     <td><h6>July 24, 2024</h6></td> 
                                     <td>
                                     <h6>Send Documents</h6></td> 

                                 </tr>
                               
                                 <tr>    
                                     <td><h6>July 22, 2024</h6></td> 
                                     <td> 
                                     <h6>Follow-Up Email</h6></td> 

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
<div class="col-md-7" id="scores">
<div class="row" >

    <div class="col">  
        <div class="card" id="info">
             <div class="card-body">
                <div class="head">
                  
 
                <div id="equifax" style="max-width: 400px; height: 200px;margin: 0px auto;"></div>
                    

                </div>
               
          
              </div>
        </div>

    </div>

    <div class="col">  
        <div class="card">
             <div class="card-body">
                <div class="head">
                <div id="experian" style="max-width: 400px; height: 200px;margin: 0px auto;"></div>
                    
            </div>
              </div>
        </div>

    </div>

    <div class="col">  
        <div class="card">
             <div class="card-body">
                <div class="head">
                <div id="transunion" style="max-width: 400px; height: 200px;margin: 0px auto;"></div>
                    


                </div>
              </div>
        </div>

    </div>


</div> <!--row-->
             <!--row-->
</div>
<div class="col-md-3" id="agentinfo">  
        <div class="card">
             <div class="card-body">
               <div>
                <h3>Agent Info</h3>
               </div>
               
               <div class="agentinfobody">
                <div class="agentimg">
                    <img src="/img/agent-info.png" alt="agent" >
                </div>
                <div class="agentname">
                    <h5>Ashley Chan</h5>
                    <h6>Virtual Assistant</h6>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jscharting.com/latest/jscharting.js"></script>
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
</body>

</html>
