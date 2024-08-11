<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Credit Repair') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Bootstrap Select CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet">
        <!-- Fonts, Icons -->
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
        <!-- Fonts, Icons -->

        <!-- custom css --> 
        <link  href="/css/main.css" rel="stylesheet">
        
        <!-- custom css --> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])  
               
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>   --}}
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script> 
        <!-- Scripts -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
 
</head>
    <body> 
        <div> 
                    {{-- @include('layouts.navigation')  --}}
                    @include('layouts.nav')

                    <!-- Page Heading -->
                    {{-- @if (isset($header))
                        <header class="bg-white shadow">
                            <div>
                                {{ $header }}
                            </div>
                        </header>
                    @endif --}}

                    <!-- Page Content -->
                    {{-- <main>
                        {{ $slot }}
                    </main> --}} 
                </div>
            </div>
        </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="/js/toggle-menu.js" type="text/javascript"></script>  
        <script src="{{ asset('js/navbar.js') }}"></script>
        <script src="/js/jscript.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.4"></script>
        <script src="https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.7"></script>  
        {{-- <script src="/js/apply-filter.js"> </script> --}}
        
    <script>
        document.getElementById('confirmDeleteButton').addEventListener('click', function() {
            document.getElementById('deleteForm').submit();
        });
    </script>

    <!-- JavaScript for AJAX requests -->
    <script>
        $(document).ready(function() { 
            // Show client data in modal when edit button is clicked
            $('.edit-btn').on('click', function() {
                var id = $(this).data('id');
                var formAction = '/clients/' + id;

                $('#editClientForm').attr('action', formAction);

               $.get(formAction + '/edit', function(data) {
                    console.log(data);
                    $('#clientId').val(data.id);
                    $('#firstnameEdt').val(data.first_name);
                    $('#middlenameEdt').val(data.middle_name);
                    $('#lastnameEdt').val(data.last_name); 
                    $('#emailEdt').val(data.email); 
                    $('#ssnEdt').val(data.ssn);
                    $('#birthdateEdt').val(data.date_of_birth);
                    $('#cityEdt').val(data.city);
                    $('#stateEdt').val(data.state);
                    $('#zipEdt').val(data.zip_code);
                    $('#mobileEdt').val(data.mobile_main);
                    // Format the created_at date to yyyy-MM-dd
                    var dateAdded = new Date(data.created_at);
                    var formattedDate = dateAdded.getFullYear() + '-' +
                                        (dateAdded.getMonth() + 1).toString().padStart(2, '0') + '-' +
                                        dateAdded.getDate().toString().padStart(2, '0');
                    $('#date_addedEdt').val(formattedDate);
                    $('#start_dateEdt').val(data.start_date);
                });
            });
            
            // Save changes when save button is clicked
            // $('#saveChanges').on('click', function() {
            //     var id = $('#clientId').val();
            //     var formData = $('#editClientForm').serialize();
            //     console.log(formData);
            //     $.post('/clients/' + id, formData).done(function() {
            //         $('#editClientModal').modal('hide');
            //         location.reload();  // Optionally, reload the page to see changes
            //     }).fail(function(err) {
            //         alert('Error updating client');
            //     });
            // });
        });
    </script>
    
    </body>
</html>
