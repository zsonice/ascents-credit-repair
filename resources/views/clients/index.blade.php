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
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addClientModalLabel">Add New Client</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form for adding a new client -->
                                        <form action="{{ route('clients.store') }}" method="POST" id="addClientForm">
                                            @csrf
                                            <div class="form-group">
                                                <label for="firstname">First Name:</label>
                                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                                                <label for="middlename">Middle Name:</label>
                                                <input type="text" name="middlename" id="middlename" class="form-control" required>
                                                <label for="lastname">Last Name:</label>
                                                <input type="text" name="lastname" id="lastname" class="form-control" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="team_members">Assigned To:</label>
                                                <input type="text" name="team_members" id="team_members" class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="referred_by">Referred By:</label>
                                                <input type="text" name="referred_by" id="referred_by" class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="date_added">Date Added:</label>
                                                <input type="date" name="date_added" id="date_added" class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="start_date">Start Date:</label>
                                                <input type="date" name="start_date" id="start_date" class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="last_login_date">Last Login Date:</label>
                                                <input type="date" name="last_login_date" id="last_login_date" class="form-control">
                                            </div>
                                            
                                            {{-- <div class="form-group">
                                                <label for="onboarding_stage">Onboarding Stage:</label>
                                                <input type="text" name="onboarding_stage" id="onboarding_stage" class="form-control">
                                            </div> --}}
                                            
                                            <!-- Modal buttons -->
                                            <div class="modal-footer">
                                                <button type="submit" class="primary">Create</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
