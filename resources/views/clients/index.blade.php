<!DOCTYPE html>
<html>
<head>
    <title>Credit Repair</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">     
</head>
<body>  
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
        <div class="row">
    
            <div>
                <div class="card">
                     <div class="card-body">
                   
                         <nav class="navbar">
  <div class="container-fluid">
  <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 </form>
   
    
    <ul class="nav justify-content-end">

<li class="nav-item">
<a class="btn btn-app">
                  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">
                                Add New Client

                            </button> 
                </a>

</li>
</ul>
  </div>
</nav>
<br>
                    

                       
                   
                        <div>
                             @if ($clients->count() > 0)
                            <table class="table table-bordered">
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
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td> 
                                                <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm">View</a>
                                                <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
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
                                                <button type="submit" class="btn btn-primary">Create</button>
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
   
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</body>
</html>
