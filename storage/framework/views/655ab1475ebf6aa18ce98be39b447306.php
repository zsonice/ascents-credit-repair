<!DOCTYPE html>
<html>
<head>
    <title>Credit Repair</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">     
</head>
<body>  

    <?php $__env->startSection('content'); ?>
        <div class="py-4">
            
            <div class="max-w-full mx-auto sm:px-6 lg:px-8"> 
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <div class="p-6 text-gray-900"> 
                        
                               <!-- Button to open the modal -->
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addClientModal">
                            Add New Client
                        </button>   
                        
                        <?php if($clients->count() > 0): ?>
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
                                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>    
                                            <td><?php echo e($client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name); ?></td> 
                                            <td><?php echo e($client->user->name ?? 'Unknown'); ?></td> 
                                            <td><?php echo e($client->created_at); ?></td>
                                            <td><?php echo e($client->start_date); ?></td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td>zzzzzzzzzzzzzz</td>
                                            <td> 
                                                <a href="<?php echo e(route('clients.show', $client)); ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="<?php echo e(route('clients.edit', $client)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="<?php echo e(route('clients.destroy', $client)); ?>" method="POST" style="display: inline-block;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p>No clients found.</p>
                        <?php endif; ?>


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
                                        <form action="<?php echo e(route('clients.store')); ?>" method="POST" id="addClientForm">
                                            <?php echo csrf_field(); ?>
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
    <?php $__env->stopSection(); ?>


    
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECTS\CreditRepairApp\credit-repair\resources\views/clients/index.blade.php ENDPATH**/ ?>