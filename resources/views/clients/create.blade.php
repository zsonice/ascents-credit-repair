<!DOCTYPE html>
<html>
<head>
    <title>Create client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Create New client</h1>
        
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Create client</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
