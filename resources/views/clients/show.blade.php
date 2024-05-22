<!DOCTYPE html>
<html>
<head>
    <title>Show client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    {{-- <div class="container"> --}}
        <div class="py-4">
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            <div class="max-w-full mx-auto sm:px-6 lg:px-8"> 
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <div class="p-6 text-gray-900"> 
                            <h1 class="my-4">client Details</h1>
                            
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
    </div>
    @endsection
</body>
</html>
