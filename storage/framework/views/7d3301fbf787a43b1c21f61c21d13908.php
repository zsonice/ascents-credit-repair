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
                <td><?php echo e($client->id); ?></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo e($client->name); ?></td>
            </tr>
            <tr>
                <th>Description:</th>
                <td><?php echo e($client->description); ?></td>
            </tr>
        </table>
        
        <a href="<?php echo e(route('clients.index')); ?>" class="btn btn-secondary">Back</a>
        <a href="<?php echo e(route('clients.edit', $client)); ?>" class="btn btn-warning">Edit</a>
        <form action="<?php echo e(route('clients.destroy', $client)); ?>" method="POST" style="display: inline-block;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\PROJECTS\CreditRepairApp\credit-repair\resources\views/clients/show.blade.php ENDPATH**/ ?>