<!DOCTYPE html>
<html>

<body>  
@extends('layouts.app')
    @section('content')
    
   

<div class="hello">
    <h1 class="welcome"> Clients</h1>
        <div class="row"> 
            <div>
         
                <div class="card">  
                     <div class="card-body"> 
                        <nav class="navbar">
                            <div class="container-fluid">
                          
                                <ul class="nav justify-content-left"> 
                                    <li class="nav-item">
                                        <a class="btn btn-app" data-toggle="modal" data-target="#filterCondition">
                                            <span class="badge bg-info"></span>
                                            <i class='bx bx-filter'></i> &nbsp; Filter 
                                        </a> 
                                    </li>    

                                    {{-- <li class="nav-item">
                                        <a class="btn btn-app" data-toggle="modal" data-target="#densityOpt">
                                            <span class="badge bg-warning"></span>
                                            <i class='bx bx-coin-stack'></i> &nbsp; Density 
                                        </a> 
                                    </li>     --}}

                                    <li class="nav-item">
                                        <a class="btn btn-app" data-toggle="modal" data-target="#importCreditReportModal">
                                            <span class="badge bg-info"></span>
                                            <i class='bx bx-import'></i> &nbsp; Import 
                                        </a> 
                                    </li>

                                    <li class="nav-item">
                                        <a class="btn btn-app" data-toggle="modal" data-target="#exportCreditReportModal">
                                            <span class="badge bg-warning"></span> 
                                            <i class='bx bx-export'></i>&nbsp; Export
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                                <span class="badge bg-danger"></span> 
                                                <i class="bi bi-printer-fill"></i>&nbsp;Print
                                        </a>
                                    </li> 
                                </ul>
                                
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">   
                                        {{-- <input type="text" placeholder="Search"> --}}
                                        <form id="search-form" action="{{ route('clients.index') }}" method="GET">
                                            <input type="text" name="query" placeholder="Search" onkeypress="submitOnEnter(event)">
                                        </form>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">
                                                    Add Client / Lead
                                            </button> 
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </nav> 
                         
<div id="clientTable" style='overflow-x:auto'>
                             @if ($clients->count() > 0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Team Members</th>
                                        <th>Date Added</th>
                                        <th>Start Date</th>
                                        <th>Last Login</th>
                                        <th>Onboarding Stage</th>
                                        <th>Client Status</th>
                                        <!-- <th>Billing Status</th>
                                        <th>Plan Name</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                           
                                <tbody>      
                        
                                @foreach ($clients as $client)
                                        <tr>    
                                            <td><span class="skeleton">{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</span></td> 
                                            <td><span class="skeleton">{{ $client->assignedUser->name ?? 'Unknown' }}</span></td> 
                                            <td><span class="skeleton">{{ $client->created_at }}</span></td>
                                            <td><span class="skeleton">{{ $client->start_date }}</span></td>
                                            <td><span class="skeleton">{{ $client->updated_at }}</span></td>
                                            <td><span class="skeleton">Onboarding stage </span> </td>
                                            <td><span class="skeleton">{{ $client->status }}</span></td>
                                            <!-- <td>Billing status </td>
                                            <td>Plan name </td> -->
                                            <td> 
                                                <a href="{{ route('clients.show', $client) }}" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                                <button type="button" class="btn edit-btn" data-toggle="modal" data-target="#editClientModal" data-id="{{ $client->id }}">
                                                    <i class='bx bxs-edit'></i>
                                                </button>
                                                <form id="deleteForm" action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                                                </form> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                        <br>
                            <h6 style="text-align:center">No clients found.</h6>
                            <br>
                        @endif

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if ($clients->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <span class="page-link" aria-hidden="true">&LT;</span>
                            </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $clients->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&LT;</a>
                                </li>
                            @endif
                             {{-- Pagination Elements --}}
                            @foreach ($clients->links()->elements[0] as $page => $url)
                                @if ($page == $clients->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                @else
                                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($clients->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $clients->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&GT;</a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-link" aria-hidden="true">&GT;</span>
                                </li>
                            @endif   
                        </ul>
                      </nav>

                </div>
            </div>
        </div>
             </div>  

                        
      
    @endsection
  <div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addClientModalLabel">Add Lead/Client</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>When you add a new client, enable Portal Access so they can finish their onboarding and order their reports. After onboarding is complete, you can import their report and conduct a credit audit. You can also import and audit a lead without using the portal, but you'll need to provide them with a credit monitoring service to sign up for. Got your first client and unsure what to do next?<a href="#"> Click here. </a></p>
                                        <!-- Form for adding a new client -->
                                        <form action="{{ route('clients.store') }}" method="POST" id="addClientForm">
                                            @csrf
                                            <div class="form-group">
                                            <div class="row align-items-center">
  <div class="col">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" autofocus id="firstname" class="form-control" required>
  </div>
  <div class="col">
  <label for="middlename">Middle Name</label>
  <input type="text" name="middlename" id="middlename" class="form-control" required>                                        
  </div>
  <div class="col">
  <label for="lastname">Last Name</label>
  <input type="text" name="lastname" id="lastname" class="form-control" required>                                                                       
  </div>
</div>

</div>
<div class="form-group">
<div class="row align-items-center">
<div class="col-md-4">
    <label for="suffix">Suffix</label>
    <input type="text" name="suffix" autofocus id="suffix" class="form-control" >
  </div>
  <div class="col-md-4">
  <label for="email">Email Address</label>
  <input type="email" name="email" id="email" class="form-control" required>                                        
  </div>
  <div class="col-md-2">
  <label for="ssn">Last 4 of SSN</label>
  <input type="text" name="ssn" id="ssn" class="form-control" required>                                                                       
  </div>
  <div class="col-md-2">
  <label for="birthdate">Date of Birth</label>
  <input type="date" name="birthdate" id="birthdate" class="form-control" required>                                                                       
  </div>
                                    </div></div>
                                    <br>
<hr>
<br>
<div class="form-group">
<div class="row align-items-center">
<div class="col-md-4">
    <label for="mailing">Mailing Address</label>
    <input type="text" name="mailing" autofocus id="mailing" class="form-control" >
  </div>
  <div class="col-md-4">
  <label for="city">City</label>
  <input type="text" name="city" id="city" class="form-control" required>                                        
  </div>
  <div class="col-md-2" id="statediv">
  <label for="state">State</label>
  <select name="state" id="state" required>
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
  <label for="zip">Zip Code</label>
  <input type="text" name="zip" id="zip" class="form-control" required>                                                                       
  </div>
                                    </div></div>

                                    <div class="form-group">
<div class="row align-items-center">
<div class="col-md-4">
    <label for="country">Country</label>
    <input type="text" name="country" autofocus id="country" class="form-control" value="United States" disabled >
  </div>
  <div class="col-md-2">
  <label for="mobile">Phone (Mobile)</label>
  <input type="text" name="mobile" id="mobile" class="form-control" required>                                        
  </div>
  <div class="col-md-2">
  <label for="palternate">Phone (Alternate)</label>
  <input type="text" name="palternate" id="palternate" class="form-control" >                                                                       
  </div>
  <div class="col-md-2">
  <label for="pwork">Phone (Work)</label>
  <input type="text" name="pwork" id="pwork" class="form-control" >   
                                                                      
  </div>
  <div class="col-md-2">
  <label for="fax">Fax</label>
  <input type="text" name="fax" id="fax" class="form-control">   
                                                                      
  </div>

                                    </div></div>

                                      
<br>
<hr>
<br>
                                    <div class="form-group">
                                            <div class="row align-items-center">
                                            <div class="col" id="cmsdiv">
                                                <label for="cms_type">Credit Monitoring System</label>
                                             <select name="cms_type" id="cms_type" required>
                                            <option value="" disabled selected>Select</option>
  <option>IdentityIQ</option>
	<option>SmartCredit</option>
	<option>myScoreIQ</option>  
    <option>myfreescorenow</option>  
                     </select>
                      </div>
                      <div class="col">
  <label for="cmsuser">CMS Username</label>
  <input type="text" name="cmsuser" id="cmsuser" class="form-control" required>                                        
  </div>
  <div class="col" >
  <label for="cmspass">CMS Password</label>
  <div id="cmspasscb">
  <input type="password" name="cmspass" id="cmspass" class="form-control" required>
  <input type="checkbox" class="sc-gJwTLC ikxBAC" onclick="myFunction()">    </div>                                 
  </div>
                                            
                                    </div>
                                    </div>
                                            <div class="form-group">
                                            <div class="row align-items-center">
                                            <div class="col">
                                                <label for="date_added">Date Added</label>
                                                <input type="date" name="date_added" id="date_added" class="form-control" required>
                                            </div>
                                            
                                            <div class="col">
                                                <label for="start_date">Start Date</label>
                                                <input type="date" name="start_date" id="start_date" class="form-control" required>
                                            </div>
                                            
                                            <div class="col">
                                                <label for="last_login_date">Last Login Date</label>
                                                <input type="date" name="last_login_date" id="last_login_date" class="form-control" required>
                                            </div>
                                    </div>
                                    </div>
                                       
                                            
                                            <!-- Modal buttons -->
                                            <div class="modal-footer"> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="primary">Create</button>
                                               
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>  
                    </div> 
{{--        
    </x-app-layout>   --}}
     <!-- Add Client Modal -->

     <!-- filter -->
     <div class="modal fade" id="filterCondition" tabindex="-1" role="dialog" aria-labelledby="filterConditionLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterConditionLabel">Filter Condition</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="filterForm" action="{{ route('clients.index') }}" method="GET">
                        <div class="form-group">
                            <label for="nameSelect">Name</label>
                            <select id="nameSelect" name="nameSelect" data-live-search="true" style="width: 100%;">
                                <option value="" disabled selected>Select</option>
                                @foreach ($availableNames as $name)
                                    <option value="{{ $name }}" {{ (request('nameSelect') == $name) ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                     
  <label for="mobileFlt">Phone</label>
  <input type="text" name="mobileFlt" id="mobileFlt" class="form-control">                                        
  </div>
  <div class="form-group">
   <div class="col" id="statusdiv">
                                                <label for="status">Client Status</label>
                                                <select name="status" id="status" >
  <option value="" disabled selected>Select</option>
  <option value="L">Lead</option>
    <option value="C">Client</option>  
    <option value="I">Inactive</option>  
                     </select>
                      </div>
                  </div>
                  <div class="form-group">
   <div class="col" id="billingdiv">
                                                <label for="status">Billing Status</label>
                                                <select name="bstatus" id="bstatus">
  <option value="" disabled selected>Select</option>
  <option value="Active">Active</option>
    <option value="Canceled">Canceled</option>  
    <option value="Expired">Expired</option>  
    <option value="Paused">Paused</option>
    <option value="Delinquent">Delinquent</option>
    <option value="Completed">Completed</option>
    <option value="Recovery">In Recovery</option>
    <option value="Waiting">Waiting for First Letter Created</option>

                     </select>
                      </div>
                  </div>   
                  <div class="form-group">
   <div class="col" id="plandiv">
                                                <label for="plan">Plan Name</label>
                                                <select name="plan" id="plan">
  <option value="" disabled selected>Select</option>
  <option value="">No Options</option> 
                     </select>
                      </div>
                  </div> 
                  <div class="form-group">
                                            <div class="col" id="assigneddiv">
                                                <label for="team_members">Assigned To</label>
                                             <select name="team_members" id="team_members" >
                                            <option value="" disabled selected>Select</option>
  <option>Lala</option>
	<option>Ash</option>
	<option>Du</option>  
    <option>Juib</option>  
                     </select>
                      </div>
</div>
<div class="form-group">
<div class="col" id="referreddiv">
                                                <label for="referred_by">Referred By</label>
                                                <select  name="referred_by" id="referred" >
  <option value="" disabled selected>Select</option>
  <option>Lala</option>
	<option>Ash</option>
	<option>Du</option>  
    <option>Juib</option>  
                     </select>
                      </div></div>
                        <br> <hr><br>
                        <div class="form-group">
                                            <div class="row align-items-center">
  <div class="col">
                            <label for="startDateFrom">Start Date</label>
                            <input type="date" class="form-control" id="startDateFrom" name="startDateFrom" value="{{ request('startDateFrom') }}">
</div>
                        <div class="col">
                            <label for="startDateTo">&nbsp;</label>
                            <input type="date" class="form-control" id="startDateTo" name="startDateTo" value="{{ request('startDateTo') }}">
                        </div>
</div>
</div>

<div class="form-group">
                                            <div class="row align-items-center">
  <div class="col">
                            <label for="addedDateFrom">Added Date</label>
                            <input type="date" class="form-control" id="addedDateFrom" name="addedDateFrom" value="{{ request('addedDateFrom') }}">
                        </div>
                        <div class="col">
                            <label for="addedDateTo">&nbsp;</label>
                            <input type="date" class="form-control" id="addedDateTo" name="addedDateTo" value="{{ request('addedDateTo') }}">
                        </div>
</div></div>
<div class="modal-footer"> 
<a class="icon-link" href="javascript:document.getElementById('filterForm').reset();">
Reset All

</a>
<button type="submit" class="primary">Apply Filters</button>
                                               
                                            </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
     
      <!-- Import Credit Modal -->
      <div class="modal fade" id="importCreditReportModal" tabindex="-1" role="dialog" aria-labelledby="importCreditModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importCreditModalLabel">Import Credit Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                       <!-- Form for importing credit report -->
                       <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="messages">
                         @if (session('success'))
                           <div class="alert alert-success">
                             {{ session('success') }}
                           </div>
                         @endif
                       </div>
                       <div class="fields">
                           <div class="mb-3" id="importcsv">
                               <input type="file" class="form-control" id="import_csv" name="import_csv" accept=".csv">
                          
                           </div>
                       </div>
                       <button type="submit" class="btn btn-success">Import CSV</button>
                   </form>
                </div>
            </div>
        </div>
    </div>

<!-- Export Credit Modal -->
<div class="modal fade" id="exportCreditReportModal" tabindex="-1" role="dialog" aria-labelledby="exportCreditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exportCreditModalLabel">Export Credit Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="exportcsv">
                <!-- Form for exporting credit -->
                <form id="exportCreditReportForm">
                    @csrf

                    <!-- Export button -->
                    <a href="{{ route('clients.export') }}" class="btn btn-success">Export to CSV&nbsp; <i class="bi bi-filetype-csv"></i> </a> 
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
             <!-- Form for editing a  client -->
                {{-- <form action="{{ route('clients.store') }}" method="POST" id="addClientForm"> --}}
                    <form id="editClientForm" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="clientId" name="id">
                    <div class="form-group">
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="firstnameEdt">First Name</label>
                                <input type="text" name="firstnameEdt" autofocus id="firstnameEdt" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="middlenameEdt">Middle Name</label>
                                <input type="text" name="middlenameEdt" id="middlenameEdt" class="form-control" required>                                        
                            </div>
                            <div class="col">
                                <label for="lastnameEdt">Last Name</label>
                                <input type="text" name="lastnameEdt" id="lastnameEdt" class="form-control" required>                                                                       
                            </div>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label for="suffixEdt">Suffix</label>
                                <input type="text" name="suffixEdt" autofocus id="suffixEdt" class="form-control" >
                            </div>
                            <div class="col-md-4">
                                <label for="emailEdt">Email Address</label>
                                <input type="email" name="emailEdt" id="emailEdt" class="form-control" required>                                        
                            </div>
                            <div class="col-md-2">
                                <label for="ssnEdt">Last 4 of SSN</label>
                                <input type="text" name="ssnEdt" id="ssnEdt" class="form-control" required>                                                                       
                            </div>
                            <div class="col-md-2">
                                <label for="birthdateEdt">Date of Birth</label>
                                <input type="date" name="birthdateEdt" id="birthdateEdt" class="form-control" required>                                                                       
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="form-group">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label for="mailingEdt">Mailing Address</label>
                                <input type="text" name="mailingEdt" autofocus id="mailingEdt" class="form-control" >
                            </div>
                            <div class="col-md-4">
                                <label for="cityEdt">City</label>
                                <input type="text" name="cityEdt" id="cityEdt" class="form-control" required>                                        
                            </div>
                            <div class="col-md-2" id="statediv">
                                <label for="stateEdt">State</label>
                                <select name="stateEdt" id="stateEdt" required>
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
                                <label for="zipEdt">Zip Code</label>
                                <input type="text" name="zipEdt" id="zipEdt" class="form-control" required>                                                                       
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label for="countryEdt">Country</label>
                                <input type="text" name="countryEdt" autofocus id="countryEdt" class="form-control" value="United States" disabled >
                            </div>
                            <div class="col-md-2">
                                <label for="mobileEdt">Phone (Mobile)</label>
                                <input type="text" name="mobileEdt" id="mobileEdt" class="form-control" required>                                        
                            </div>
                            <div class="col-md-2">
                                <label for="palternateEdt">Phone (Alternate)</label>
                                <input type="text" name="palternateEdt" id="palternateEdt" class="form-control" >                                                                       
                            </div>
                            <div class="col-md-2">
                                <label for="pworkEdt">Phone (Work)</label>
                                <input type="text" name="pworkEdt" id="pworkEdt" class="form-control" >                                                                   
                            </div>
                            <div class="col-md-2">
                                <label for="faxEdt">Fax</label>
                                <input type="text" name="faxEdt" id="faxEdt" class="form-control">                                                           
                            </div>

                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>             
                    <div class="form-group">
                        <div class="row align-items-center">
                            <div class="col" id="cmsdiv">
                                <label for="cmsEdt">Credit Monitoring System</label>
                                <select name="cmsEdt" id="cmsEdt" required>
                                    <option value="" disabled selected>Select</option>
                                    <option>IdentityIQ</option>
                                    <option>SmartCredit</option>
                                    <option>myScoreIQ</option>  
                                    <option>myfreescorenow</option>  
                                 </select>
                            </div>
                            <div class="col">
                                <label for="cmsuserEdt">CMS Username</label>
                                <input type="text" name="cmsuserEdt" id="cmsuserEdt" class="form-control" required>                                        
                            </div>
                            <div class="col" >
                                <label for="cmspassEdt">CMS Password</label> 
                                <input type="text" name="cmspassEdt" id="cmspassEdt" class="form-control" required>
                            </div>
                                            
                        </div>
                    </div>
                    <!-- Modal buttons -->
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="primary">Save</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>  

     <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Deletion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Are you sure you want to delete this client?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" id="confirmDeleteButton" class="btn btn-danger">Delete</button>
            </div>
        </div>
        </div>
    </div>
   
</body>
</html>

{{-- <script>
   
    document.getElementById('confirmDeleteButton').addEventListener('click', function() {
        document.getElementById('deleteForm').submit();
    });
</script>  --}}

