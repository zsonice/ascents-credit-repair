<!DOCTYPE html>
<html>
<head>
    <title>Client Details</title>
    <script 
      src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js">
    </script>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="hello" id="showcontainer">

    <div class="row">
    
    <div class="col">  

    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active"  id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true" >Dashboard</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link "    id="import-tab" data-bs-toggle="tab" data-bs-target="#import-tab-pane" type="button" role="tab" aria-controls="import-tab-pane" aria-selected="true" >Import/Audit</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link"   id="generate-tab" data-bs-toggle="tab" data-bs-target="#generate-tab-pane" type="button" role="tab" aria-controls="generate-tab-pane" aria-selected="true" >Generate Letters</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link"   id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="true" >Notes</a>
  </li>

</ul>
    </div>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
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


<div class="tab-pane fade" id="import-tab-pane" role="tabpanel" aria-labelledby="import-tab" tabindex="0">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h3>hi</h3>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="generate-tab-pane" role="tabpanel" aria-labelledby="generate-tab" tabindex="0">
<div class="col-md-7">
<div class="card">
    <div class="card-body">
<h3>hi letter</h3>
   </div>

</div>
</div>
</div>

<div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
    <div class="row" >
        <div class="col-md-3" id="notesTab">
            <div class="card">
                <div class="card-body">
                        <h3>Notes</h3>
                            <div class="notesNum">
                                <div>
                                <p>56 Notes</p>
                                </div> 
                                <div class="notesSearch">
                            
                                <input class="form-control" type="text" placeholder="Search Notes" aria-label="Search">
                                </div>
                                <div class="addNote">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNotes"><i class="bi bi-plus"></i>ADD NOTE</button>
                                </div>
                                
                                
                            </div>
                            <br>
                            
                            <div class="notesTable" style="overflow-y:scroll; height:600px;">
                                    <table class="table table-hover">
                                        <tr>
                                            <td>
                                                <div class="radiotype">
                                                <p class="important"><i class='bx bxs-circle'></i> Important</p>
                                                </div>
                                                <div class="note-preview">
                                                <h6>   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat....
                                              
                                                <p> July 31, 2024</p>
                                                  </div> 
                                               
                                            </td>
                                            
                                        </tr>
                                       
                                        <tr>
                                            <td>
                                                <div class="radiotype">
                                                <p class="medium"><i class='bx bxs-circle'></i> Medium</p>
                                                </div>
                                                <div class="note-preview">
                                                <h6>   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat....
                                              
                                                <p> July 31, 2024</p>
                                                  </div> 
                                               
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="radiotype">
                                                <p class="low"><i class='bx bxs-circle'></i> Low</p>
                                                </div>
                                                <div class="note-preview">
                                                <h6>   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat....
                                              
                                                <p> June 23, 2024</p>
                                                  </div> 
                                               
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="radiotype">
                                                <p class="low"><i class='bx bxs-circle'></i> Low</p>
                                                </div>
                                                <div class="note-preview">
                                                <h6>   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat....
                                              
                                                <p> June 23, 2024</p>
                                                  </div> 
                                               
                                            </td>
                                            
                                        </tr>
                                    </table>
                                </div>
                </div>
            </div>
        </div> <!--col-->
        <div class="col-md-7" id="notesTab">
            <div class="card">
                <div class="card-body">
           <div class="row">
                <div class="col">
                    <div class="radiotype">
                    <p class="low"><i class='bx bxs-circle'></i> Low</p>
                    </div>
                </div>
                <div class="col">
                    <div class="note-preview">
                    <p> June 23, 2024</p>
                    </div>
                </div>
            </div>
                    <div id="editor">

                    <div class="radiotype">
                
</div>          
                                                <div class="note-preview">
                                                <h6>   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas leo bibendum arcu ultrices porttitor. Integer enim erat, tincidunt ut ligula eu, lacinia mattis ex. Quisque auctor sit amet risus vitae faucibus. Praesent bibendum nisl quis rutrum vestibulum. Curabitur quis tellus pellentesque, aliquam massa laoreet, venenatis risus. Fusce consequat efficitur ornare. Cras finibus faucibus augue eget scelerisque. Nam lorem ex, auctor vel ornare et, dictum eget erat.

Vivamus et elementum lectus, sit amet congue nisl. Proin condimentum arcu non dui volutpat efficitur. Nunc condimentum ex ut laoreet mollis. Donec auctor lacus felis, in faucibus ex semper at. In aliquam purus mauris, ac mattis nunc auctor vitae. Sed ac porta velit, nec convallis neque. Fusce quis congue quam. Nulla rhoncus eu quam vel egestas. Nulla dictum molestie gravida. Sed feugiat purus eget est placerat, non pretium ligula lacinia.

Donec vestibulum massa eget aliquet luctus. In hac habitasse platea dictumst. Integer condimentum, justo a venenatis pharetra, nisi metus rutrum urna, eget interdum metus orci eget arcu. Phasellus imperdiet tempor convallis. Nunc non gravida nunc. Suspendisse potenti. Fusce id iaculis eros. Morbi et ligula in felis dignissim scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam pharetra, massa eget porta commodo, nisi lacus elementum urna, quis porta turpis diam eu augue. Vivamus arcu mauris, congue id ullamcorper at, elementum vitae ex. Nullam ac leo ipsum. Nunc lacinia laoreet ante, eget gravida nisl hendrerit vitae.

Curabitur fermentum mi sapien, vitae fermentum libero malesuada in. Cras sit amet leo mattis, suscipit quam vel, elementum nisl. Phasellus vestibulum massa mi, convallis maximus quam efficitur sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum eu efficitur nunc, sit amet condimentum diam. Mauris sed efficitur nulla. Morbi vel aliquam ex, nec vestibulum diam. Phasellus suscipit condimentum nulla non mattis. Integer a ornare ligula. Nam quis nisl at lacus interdum dapibus. Mauris facilisis, ex et pellentesque tincidunt, mi lorem sagittis lectus, eget placerat turpis odio non diam.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin vitae cursus leo. Mauris non risus vehicula, finibus tellus vitae, ultrices ex. Nam augue sem, vulputate eu massa sit amet, tristique aliquam nibh. Mauris dictum est sem, sed ornare metus scelerisque condimentum. Quisque magna sapien, interdum eu libero sit amet, sollicitudin tincidunt lorem. Ut tempus lacus ligula, auctor facilisis sapien molestie in. Aliquam quis leo ultrices, elementum odio eget, convallis ipsum. Donec at condimentum lorem. Morbi efficitur tortor a turpis pretium malesuada sit amet quis nulla. Nam dapibus iaculis massa at accumsan. Nullam id tincidunt urna. Etiam fringilla vehicula lorem id aliquam. In hac habitasse platea dictumst. Vestibulum et nibh ac enim tempor commodo.
                                       
                                                  </div> 
                                                  
                    </div>
                  
                    <div class="NoteBtn">
                   
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy-fill"></i></button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-trash-fill"></i></button>
                </div>
                <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
                </div>
            </div>
        </div> <!--col-->
    </div>  <!-- row-->
</div>

</div>





<!-- Add Notes Modal-->
<div class="modal fade" id="addNotes" tabindex="-1" role="dialog" aria-labelledby="addNotes" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNotes"><i class="bi bi-pencil-fill"></i>Add Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                       <form action="#" method="POST" >
                       
                        <div>
                            <div  class="notesRadio">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioimportant" checked>
                                <label class="form-check-label" for="flexRadioimportant">
                                    Important
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadio" id="flexRadiomedium" >
                                <label class="form-check-label" for="flexRadiomedium">
                                    Medium
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadio" id="flexRadiolow" >
                                <label class="form-check-label" for="flexRadiolow">
                                Low
                                </label>
                                </div>
                            </div>    
                            <div>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>    
                            
                    </div>
                       <button type="submit" class="btn btn-primary"><i class="bi bi-floppy-fill"></i></button>
                   </form>
                </div>
            </div>
        </div>
    </div>


        <!-- 
             <div class="card">
            
        
          <div class="backbtn">
           
            <a class="icon-link icon-link-hover"  href="{{ route('clients.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
</svg>Back
  
</a>
                          
            </div>
            
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
                    
               <div class="form-group" id="progress">
                                            <div class="row align-items-center" >
                    <div class="col-sm-2" >
                        <h6>75%</h6>
                    </div>
                    <div class="col">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
</div>
                </div></div></div>
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
     
    
</div>--> 
  

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
