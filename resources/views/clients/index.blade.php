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
                                        <th>Billing Status</th>
                                        <th>Plan Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>    
                                            <td>{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</td> 
                                            <td>{{ $client->user->name ?? 'Unknown' }}</td> 
                                            <td>{{ $client->created_at }}</td>
                                            <td>{{ $client->start_date }}</td>
                                            <td>Last login {{ $client->updated_at }}</td>
                                            <td>Onboarding stage </td>
                                            <td>Client status {{ $client->status }}</td>
                                            <td>Billing status </td>
                                            <td>Plan name </td>
                                            <td> 
                                                <a href="{{ route('clients.show', $client) }}" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <a href="{{ route('clients.edit', $client) }}" class="btn"><i class='bx bxs-edit' ></i></a>
                                                <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn"><i class='bx bxs-trash' ></i></button>
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
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $clients->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
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
                                    <a class="page-link" href="{{ $clients->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-link" aria-hidden="true">&raquo;</span>
                                </li>
                            @endif   
                        </ul>
                      </nav>

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
    <label for="firstname">Suffix</label>
    <input type="text" name="suffix" autofocus id="suffix" class="form-control" >
  </div>
  <div class="col-md-4">
  <label for="middlename">Email Address</label>
  <input type="email" name="email" id="email" class="form-control" required>                                        
  </div>
  <div class="col-md-2">
  <label for="lastname">Last 4 of SSN</label>
  <input type="text" name="lastname" id="lastname" class="form-control" required>                                                                       
  </div>
  <div class="col-md-2">
  <label for="lastname">Date of Birth</label>
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
  <label for="pmobile">Phone (Mobile)</label>
  <input type="text" name="mobile" id="mobile" class="form-control" required>                                        
  </div>
  <div class="col-md-2">
  <label for="palternate">Phone (Alternate)</label>
  <input type="text" name="palternate" id="palternate" class="form-control" required>                                                                       
  </div>
  <div class="col-md-2">
  <label for="pwork">Phone (Work)</label>
  <input type="text" name="pwork" id="pwork" class="form-control" required>   
                                                                      
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
                                            <div class="col">
                                                <label for="team_members">Assigned To</label>
                                                <input type="text" name="team_members" id="team_members" class="form-control" required >
                                            </div>
                                            
                                            <div class="col">
                                                <label for="referred_by">Referred By</label>
                                                <input type="text" name="referred_by" id="referred_by" class="form-control" required>
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
        <div class="modal-dialog" role="document">
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
                            <select class="form-control selectpicker" id="nameSelect" name="nameSelect" data-live-search="true" style="width: 100%;">
                                <option value="">Nothing selected</option>
                                @foreach ($availableNames as $name)
                                    <option value="{{ $name }}" {{ (request('nameSelect') == $name) ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label for="startDateFrom">Start Date (From)</label>
                            <input type="date" class="form-control" id="startDateFrom" name="startDateFrom" value="{{ request('startDateFrom') }}">
                        </div>
                        <div class="form-group">
                            <label for="startDateTo">Start Date (To)</label>
                            <input type="date" class="form-control" id="startDateTo" name="startDateTo" value="{{ request('startDateTo') }}">
                        </div>
                        <div class="form-group">
                            <label for="addedDateFrom">Added Date (From)</label>
                            <input type="date" class="form-control" id="addedDateFrom" name="addedDateFrom" value="{{ request('addedDateFrom') }}">
                        </div>
                        <div class="form-group">
                            <label for="addedDateTo">Added Date (To)</label>
                            <input type="date" class="form-control" id="addedDateTo" name="addedDateTo" value="{{ request('addedDateTo') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Apply Filters</button>
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
                       <form action="{{ route('clients.store') }}" method="POST" id="importCreditReportForm">
                        @csrf
                        <div class="form-group">
                            <label for="CRRepProvider">Choose Provider: </label>
                        </br>
                            <select name="CRRepProvider" id="CRRepProvider">
                                <option value="identityIQ">IdentityIQ</option> 
                             </select>
                        </div>
                        <div class="form-group">
                            <label for="CRRepID">Credit Report Source Code: </label>
                            <textarea id="CRRepID" name="CRRepID" rows="4" cols="50"></textarea>
                        </div>
                        
                       </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Export Credit Modal -->
    <div class="modal fade" id="exportCreditReportModal" tabindex="-1" role="dialog" aria-labelledby="exportCreditModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exportCreditModalLabel">Export Credit Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                       <!-- Form for exporting credit-->
                       <form action="{{ route('clients.store') }}" method="POST" id="exportCreditReportForm">
                        @csrf

                        
                       </form>
                </div>
            </div>
        </div>
    </div> 
    
</body>
</html>
