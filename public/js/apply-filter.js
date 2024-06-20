
$(document).ready(function() {
    // Initialize Bootstrap Select
    $('.selectpicker').selectpicker();

    // Fetch names from the server
    $.ajax({
        url: '/get-names', // Your route to fetch the names
        method: 'GET',
        success: function(response) {
            // Assuming the response is an array of names
            response.forEach(function(name) {
                $('#nameSelect').append(new Option(name.text, name.id));
            });
            // Refresh the selectpicker to apply changes
            $('#nameSelect').selectpicker('refresh');
            $('#nameSelect').prop('disabled', false);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.error('Error fetching names:', xhr);
        }
    });

    // Re-initialize selectpicker every time the modal is shown
    $('#filterCondition').on('shown.bs.modal', function () {
        $('#nameSelect').selectpicker('refresh');
    });

    // Handle form submission
    $('#filterForm').on('submit', function(event) {
        event.preventDefault();

        const filters = {
            name: $('#nameSelect').val(),
            startDateFrom: $('#startDateFrom').val(),
            startDateTo: $('#startDateTo').val(),
            addedDateFrom: $('#addedDateFrom').val(),
            addedDateTo: $('#addedDateTo').val()
        };

        console.log(filters);

        // Send the filter data to the server using AJAX
        $.ajax({
            url: '/clients', // Your existing route
            method: 'GET',
            data: filters,
            success: function(response) {
                // Assuming response contains the HTML for the updated table
                $('#clientTable').html(response);
                console.log('Filters applied successfully:', response);
            },
            error: function(xhr, textStatus, errorThrown) {
                console.error('Error applying filters:', xhr);
            }
        });

        // Close the modal after applying filters
        $('#filterCondition').modal('hide');
    });
});