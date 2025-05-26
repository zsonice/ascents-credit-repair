 
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
            <a class="nav-link "    id="agreement-tab" data-bs-toggle="tab" data-bs-target="#agreement-tab-pane" type="button" role="tab" aria-controls="agreement-tab-pane" aria-selected="true" >Client Agreement Options</a>
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
                                <p>Update your clients and/or Affiliates here.</p>
                            </div>
                            
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
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
                                <p>Track your Leads/Clients Statuses here.</p>
                            </div>
                            <div class="col-md-3" id="CLetterbtn">
                                <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;ADD TEAM MEMBERS</button>
                            </div>
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- leads tab-->
         <div class="tab-pane fade" id="agreement-tab-pane" role="tabpanel" aria-labelledby="agreement-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Client Agreement Options</h3>
                                <p>Check Client Agreement here.</p>
                            </div>
                            <div class="col-md-3" id="CLetterbtn">
                                <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;EDIT ROLES</button>
                            </div>
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- agreement tab-->
         <div class="tab-pane fade" id="signature-tab-pane" role="tabpanel" aria-labelledby="signature-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Digital Signature Records</h3>
                                <p>Check your Digital Signature Records  here.</p>
                            </div>
                            <div class="col-md-3" id="CLetterbtn">
                                <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;EDIT ROLES</button>
                            </div>
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
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