 
    @extends('layouts.app')
    @section('content') 
   <div class="hello" id="dashboard">
    <!-- header -->
  <h1 class="welcome"> Business Settings</h1>
    {{-- Add your letter content and any other necessary UI components here --}}
    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active"  id="company-tab" data-bs-toggle="tab" data-bs-target="#company-tab-pane" type="button" role="tab" aria-controls="company-tab-pane" aria-selected="true" >Company Profile</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="team-tab" data-bs-toggle="tab" data-bs-target="#team-tab-pane" type="button" role="tab" aria-controls="team-tab-pane" aria-selected="true" >Team Members</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles-tab-pane" type="button" role="tab" aria-controls="roles-tab-pane" aria-selected="true" >Roles & Permissions</a>
        </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link "    id="billing-tab" data-bs-toggle="tab" data-bs-target="#billing-tab-pane" type="button" role="tab" aria-controls="billing-tab-pane" aria-selected="true" >Billing Payments</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link "    id="website-tab" data-bs-toggle="tab" data-bs-target="#website-tab-pane" type="button" role="tab" aria-controls="website-tab-pane" aria-selected="true" >Website Tools</a>
        </li>
       
       
       
</ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="company-tab-pane" role="tabpanel" aria-labelledby="company-tab" tabindex="0">
   
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Company Profile</h3>
                                <p>Edit your company profile here.</p>
                             <br><!--FORM-->
                              
                                <form action="" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label for="companyname">Company Name</label>
                                                <input type="text" name="companyname" autofocus id="companyname" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="website">Website</label>
                                                <input type="text" name="website" id="website" class="form-control" required>                                        
                                            </div>
                                            <div class="col" id="cmsdiv">
                                                <label for="timezone">Timezone</label>
                                                <select name="timezone_offset" id="timezone-offset" class="span5">
                                                <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                                <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                                <option value="-10:00">(GMT -10:00) Hawaii</option>
                                                <option value="-09:50">(GMT -9:30) Taiohae</option>
                                                <option value="-09:00">(GMT -9:00) Alaska</option>
                                                <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                                <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                                <option value="-04:50">(GMT -4:30) Caracas</option>
                                                <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                                <option value="-03:50">(GMT -3:30) Newfoundland</option>
                                                <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                                <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                                <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                                <option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                                <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                                                <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                                <option value="+03:50">(GMT +3:30) Tehran</option>
                                                <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                                <option value="+04:50">(GMT +4:30) Kabul</option>
                                                <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                                <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                                <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                                <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                                <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                                <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                                <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                                <option value="+08:75">(GMT +8:45) Eucla</option>
                                                <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                                <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                                <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                                <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                                <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                                <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                                <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                                <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                                <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                                <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                                            </select>
                                            </div>                                                                  
                                        </div>
                                    </div> <!--form-group-->
                            
                         
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label for="companymailing">Mailing Address</label>
                                            <input type="text" name="companymailing" autofocus id="companymailing" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="companycity">City</label>
                                                <input type="text" name="companycity" id="companycity" class="form-control" required>                                        
                                        </div>
                                        <div class="col-md-2" id="companystatediv">
                                            <label for="companystate">State</label>
                                            <select name="companystate" id="companystate" required>
                                                <option value="" disabled selected>Select</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>                                                                    
                                        </div>
                                        <div class="col-md-2">
                                            <label for="companyzip">Zip Code</label>
                                            <input type="text" name="companyzip" id="companyzip" class="form-control" required>                                                                       
                                        </div>
                                    </div>
                                </div> <!--form-group-->

                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label for="companycountry">Country</label>
                                            <input type="text" name="companycountry" autofocus id="companycountry" class="form-control" value="United States" disabled >
                                        </div>
                                        <div class="col">
                                            <label for="mobile">Phone (Mobile)</label>
                                            <input type="text" name="mobile" id="mobile" class="form-control" required>                                        
                                        </div>
                                        
                                        <div class="col">
                                            <label for="fax">Fax</label>
                                            <input type="text" name="fax" id="fax" class="form-control">   
                                        </div>
                                    </div>
                                </div>

                                      
<br>
        <p>You may designate a different name (or a company name) and email below for all notifications sent.</p>
<br>
                    <div class="form-group">
                        <div class="row align-items-center">
                          
                            <div class="col">
                                <label for="sendername">Sender Name</label>
                                <input type="text" name="sendername" id="sendername" class="form-control" required>                                        
                            </div>
                            <div class="col">
                                <label for="senderemail">Sender Email</label>
                                <input type="text" name="senderemail" id="senderemail" class="form-control" required>                                        
                            </div>  
                            <div class="col">
                                <label for="sendercompany">Name/Company</label>
                                <input type="text" name="sendercompany" id="sendercompany" class="form-control" required>                                        
                            </div>
                        </div>
                    </div>
                                           
                                       
                                            
                                        
                        <div class="modal-footer" id="divfooter"> 
                           
                            <button type="submit" class="primary">Save</button>
                        </div>
                    </form>

                </div>
            </div> <!--row-->
           
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- company tab-->
        
        <div class="tab-pane fade" id="team-tab-pane" role="tabpanel" aria-labelledby="team-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Team Members</h3>
                                <p>Edit your team members here.</p>
                            </div>
                            <div class="col-md-3" id="CLetterbtn">
                                <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#addRoleModal"></i>&nbsp;&nbsp;ADD TEAM MEMBERS</button>
                            </div>
                        </div> <!--row-->
                            <br>
                        <div class="row">
                            <div id="cagentinfo">  
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h3>Agent Info</h3>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="agentinfobody">
                                                <div class="agentimg">
                                                    <img src="/img/agent-info.png" alt="agent" >
                                                </div>
                                                <div class="agentname">
                                                    <h5>Ashley Chan</h5>
                                                    <h6>Credit Specialist</h6>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-2">
                                            <div class="agentinfobody">
                                                <div class="agentimg">
                                                    <img src="/img/agent-info.png" alt="agent" >
                                                </div>
                                                <div class="agentname">
                                                    <h5>Lala Chan</h5>
                                                    <h6>GHL Specialist</h6>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-2">
                                            <div class="agentinfobody">
                                                <div class="agentimg">
                                                    <img src="/img/agent-info.png" alt="agent" >
                                                </div>
                                                <div class="agentname">
                                                    <h5>Duan Chan</h5>
                                                    <h6>Developer</h6>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                    </div> <!--cardbody-->
                                </div><!--card-->
                            </div><!--cagent info-->
                        </div><!--row-->
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- team tab-->
         <div class="tab-pane fade" id="roles-tab-pane" role="tabpanel" aria-labelledby="roles-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Roles & Permissions</h3>
                                <p>Edit your roles & permissions here.</p>
                            </div>
                            <div class="col-md-3" id="CLetterbtn">
                                <button class="btn btn-primary" id="addRoleModal" type="button" data-toggle="modal" data-target="#addRoleModal"></i>&nbsp;&nbsp;ADD NEW ROLE</button>
                            </div>
                        </div> <!--row-->
                

                            <br>
                     <div  id="loginActivity">

                        <div style='overflow-y:auto'>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Role Name</th>
                                        <th></th>
                              
                                    </tr>
                                </thead>
                                <tbody>
                                       <tr>
                                        <td><span class="skeleton">Account Manager<span></td>
                                        <td class="left">
                                            <a href="" class="btn">Manage Permissions</i></a>
                                                <!-- Button to Open the Modal -->
                                             
                                            <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                @csrf
                                                @method('DELETE')
                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" disabled><i class='bx bxs-trash' ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="skeleton">Credit Repair Specialist<span></td>
                                        <td class="left">
                                            <a href="" class="btn">View Permissions</i></a>
                                                <!-- Button to Open the Modal -->
                                             
                                            <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                                                @csrf
                                                @method('DELETE')
                                            <button type="button" class="btn-bnw" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" ><i class="bi bi-lock-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
         
        
     </tbody>
     </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
    </div>
</div>
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- roles tab-->


         <div class="tab-pane fade" id="billing-tab-pane" role="tabpanel" aria-labelledby="billing-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Billing Payments</h3>
                                <p>Update your billing payments here.</p>
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
        </div> <!-- billing tab-->
        <div class="tab-pane fade" id="website-tab-pane" role="tabpanel" aria-labelledby="website-tab" tabindex="0">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row"  id="CLetter">
                            <div class="col" id="CLetterText">
                                <h3>Website Tools</h3>
                                <p>Website Tools Information here.</p>
                            </div>
                            
                        </div> <!--row-->
                

                            <br>
                        <div  id="loginActivity">

 
                        </div> 
                    </div>
                </div><!--card-->
            </div> <!--col-->
        </div> <!-- website tab-->
     
     
     
     
     
        
    </div>
       

</div>
    @endsection
<!--modal add role-->
      <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Add role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
      
                       <form action="" method="POST" >
                       
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label for="rolename">Role Name</label>
                                        <input type="text" name="rolename" autofocus id="rolename" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                       <button type="submit" class="btn btn-primary">Add role</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
<!--modal add role -->