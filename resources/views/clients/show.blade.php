<!DOCTYPE html>
<html>
<head>
    <title>Show client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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
</body>
</html>
