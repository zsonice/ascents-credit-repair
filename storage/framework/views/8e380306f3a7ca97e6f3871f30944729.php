<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Credit Repair')); ?></title>

        <!-- Fonts, Icons -->
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
        <!-- Fonts, Icons -->

        <!-- custom css --> 
        <link  href="/css/styles.css" rel="stylesheet">
        <!-- custom css --> 

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>  
               
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>  
        <script src="/js/script.js" type="text/javascript"></script>
        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased"> 
        <div class="min-h-screen bg-gray-100"> 
                    
                    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- Page Heading -->
                    

                    <!-- Page Content -->
                     
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\PROJECTS\CreditRepairApp\credit-repair\resources\views/layouts/app.blade.php ENDPATH**/ ?>