<!DOCTYPE html>
<html>
<head>
    <title>Edit client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    {{-- <x-app-layout>  
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Client') }}
            </h2>
        </x-slot> --}}
            <div class="container">
                <h1 class="my-4">Edit client</h1>
                
                <form action="{{ route('clients.update', $client) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $client->client_name }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Team Members:</label>
                        <textarea name="description" id="description" class="form-control" required>{{ $client->team_members }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update client</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
    {{-- </x-app-layout>  --}}
    @endsection('content')
</body>
</html>
