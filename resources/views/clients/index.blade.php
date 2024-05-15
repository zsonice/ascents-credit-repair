<!DOCTYPE html>
<html>
<head>
    <title>Credit Repair</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">     
</head>
<body>  
@extends('layouts.app')
    @section('content')
        <div class="py-4">
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            <div class="max-w-full mx-auto sm:px-6 lg:px-8"> 
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <div class="p-6 text-gray-900"> 
                        {{-- <a href="{{ route('clients.create') }}" class="btn btn-primary mb-4">Add New client</a> --}}
                               <!-- Button to open the modal -->
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addClientModal">
                            Add New Client
                        </button>   
                        
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
                            <p>No clients found.</p>
                        @endif


                         <!-- Add Client Modal -->
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
                </div>
            </div>
        </div>
    @endsection

{{--        
    </x-app-layout>   --}}
    
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</body>
</html>
