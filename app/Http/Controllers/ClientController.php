<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\CmsLogin; 
use App\Models\Note;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log; 
use Carbon\Carbon;

class ClientController extends Controller
{
    // public function index(Request $request)
    // {
    //   // Default pagination: retrieve 5 items per page
    //   $clients = Client::paginate(5);

    //   // Check if the request has a search parameter
    //   if ($request->has('query')) {
    //       // Get the search query, default to an empty string if not present
    //       $query = $request->input('query', '');

    //       // Perform a search query and paginate the results
    //       $clients = Client::where('first_name', 'LIKE', "%{$query}%")->paginate(5);

    //       // Pass the search query to the view
    //       return view('clients.index', compact('clients', 'query'));
    //   }

    //   // Return the view with the clients and an empty search query
    //   return view('clients.index', compact('clients'))->with('query', '');
    // }

    public function getClientData()
    {
        // Define the months of the year
        $months = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ];

        // Initialize arrays to hold the data
        $allClients = array_fill(0, 12, 0);
        $newClients = array_fill(0, 12, 0);

        // Fetch total clients per month using Eloquent
        $totalClients = Client::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        // Fetch new clients per month using Eloquent
        $newClientsData = Client::where('status', 'new')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        // Fill in the data for each month
        foreach ($totalClients as $month => $count) {
            $allClients[$month - 1] = $count; // Adjust month index to 0-based
        }
        foreach ($newClientsData as $month => $count) {
            $newClients[$month - 1] = $count; // Adjust month index to 0-based
        }

        // Return the data as JSON
        return response()->json([
            'allClients' => $allClients,
            'newClients' => $newClients,
            'labels' => $months
        ]);
    }

    public function dashboard()
{
    // Get the total count of all clients
    $totalClientsCount = Client::count();

    // Get the count of active clients excluding 'new' and 'completed' statuses
    $activeClientsCount = Client::whereNotIn('status', ['new', 'completed'])->count();

    // Get the count of new clients
    $newClientsCount = Client::where('status', 'new')->count();

    // Calculate counts for this month and last month
    $startOfMonth = now()->startOfMonth();
    $endOfMonth = now()->endOfMonth();
    $startOfLastMonth = now()->subMonth()->startOfMonth();
    $endOfLastMonth = now()->subMonth()->endOfMonth();

    // Total clients counts
    $totalClientsThisMonth = Client::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
    $totalClientsLastMonth = Client::whereBetween('created_at', [$startOfLastMonth, $endOfLastMonth])->count();

    // New clients counts
    $newClientsThisMonth = Client::where('status', 'new')->whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
    $newClientsLastMonth = Client::where('status', 'new')->whereBetween('created_at', [$startOfLastMonth, $endOfLastMonth])->count();

    // Active clients counts
    $activeClientsThisMonth = Client::whereNotIn('status', ['new', 'completed'])->whereBetween('updated_at', [$startOfMonth, $endOfMonth])->count();
    $activeClientsLastMonth = Client::whereNotIn('status', ['new', 'completed'])->whereBetween('updated_at', [$startOfLastMonth, $endOfLastMonth])->count();

    // Calculate percentage changes
    $percentageChangeTotal = $this->calculatePercentageChange($totalClientsThisMonth, $totalClientsLastMonth);
    $percentageChangeNew = $this->calculatePercentageChange($newClientsThisMonth, $newClientsLastMonth);
    $percentageChangeActive = $this->calculatePercentageChange($activeClientsThisMonth, $activeClientsLastMonth);

    // Get up to 3 new clients
    $newClients = Client::where('status', 'new')->limit(3)->get();

    // Get up to 3 active clients
    $activeClients = Client::whereNotIn('status', ['new', 'completed'])->limit(3)->get();

    // Pass all the data to the view
    return view('home', [
        'totalClientsCount' => $totalClientsCount,
        'activeClientsCount' => $activeClientsCount,
        'newClientsCount' => $newClientsCount,
        'newClients' => $newClients,
        'activeClients' => $activeClients,
        'percentageChangeTotal' => $percentageChangeTotal,
        'percentageChangeNew' => $percentageChangeNew,
        'percentageChangeActive' => $percentageChangeActive,
    ]);
}

private function calculatePercentageChange($thisMonth, $lastMonth)
{
    if ($lastMonth > 0) {
         return (($thisMonth - $lastMonth) / $lastMonth) * 100;
    }

    return 0;
}
    

    public function index(Request $request)
    {
        $query = Client::query();

         // Fetch available names for the select input
        $availableNames = Client::distinct()->pluck('first_name');

        // Apply filters
        if ($request->has('query') && $request->query('query') != '') {
            $queryParam = $request->query('query');
            $query->where('first_name', 'LIKE', "%{$queryParam}%");
        }          
        if ($request->has('nameSelect') && $request->nameSelect != '') {
            $query->where('first_name', $request->nameSelect);
        }
        if ($request->has('startDateFrom') && $request->startDateFrom != '') {
            $query->whereDate('start_date', '>=', $request->startDateFrom);
        }
        if ($request->has('startDateTo') && $request->startDateTo != '') {
            $query->whereDate('start_date', '<=', $request->startDateTo);
        }
        if ($request->has('addedDateFrom') && $request->addedDateFrom != '') {
            $query->whereDate('created_at', '>=', $request->addedDateFrom);
        }
        if ($request->has('addedDateTo') && $request->addedDateTo != '') {
            $query->whereDate('created_at', '<=', $request->addedDateTo);
        }

        // Paginate the results
        $clients = $query->paginate(5);

        // Return the view with the clients and filter parameters
        return view('clients.index', compact('clients', 'availableNames'))
            ->with('query', $request->query ?? '')
            ->with('nameSelect', $request->nameSelect ?? '')
            ->with('startDateFrom', $request->startDateFrom ?? '')
            ->with('startDateTo', $request->startDateTo ?? '')
            ->with('addedDateFrom', $request->addedDateFrom ?? '')
            ->with('addedDateTo', $request->addedDateTo ?? '');
    } 

    public function create()
    {
        return view('clients.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'description' => 'required',
    //     ]);

    //     client::create($request->all());

    //     return redirect()->route('clients.index');
    // }





    public function show(Client $client)
    {
        // Format the phone number if it has 10 digits
        $phoneNumber = $client->mobile_main;
        if (strlen($phoneNumber) === 10 && ctype_digit($phoneNumber)) {
            $formattedMobilemain = '(' . substr($phoneNumber, 0, 3) . ') ' . substr($phoneNumber, 3, 3) . '-' . substr($phoneNumber, 6);
        } elseif ($phoneNumber == ''){
            $formattedMobilemain == '-';
        } else {
            $formattedMobilemain = $phoneNumber; // Use original if not valid
        }

        // Format the phone number if it has 10 digits
        $phoneNumber = $client->mobile_alt;
        if (strlen($phoneNumber) === 10 && ctype_digit($phoneNumber)) {
            $formattedMobilealt = '(' . substr($phoneNumber, 0, 3) . ') ' . substr($phoneNumber, 3, 3) . '-' . substr($phoneNumber, 6);
        } elseif ($phoneNumber == ''){
            $formattedMobilealt == '-';
        } else {
            $formattedMobilealt = $phoneNumber; // Use original if not valid
        }

        // Format the phone number if it has 10 digits
        $phoneNumber = $client->mobile_work;
        if (strlen($phoneNumber) === 10 && ctype_digit($phoneNumber)) {
            $formattedMobilework = '(' . substr($phoneNumber, 0, 3) . ') ' . substr($phoneNumber, 3, 3) . '-' . substr($phoneNumber, 6);
        } elseif ($phoneNumber == ''){
            $formattedMobilework == '-';
        }  else {
            $formattedMobilework = $phoneNumber; // Use original if not valid
        }
    

         // Convert the date_of_birth string to a formatted date using Carbon
        $formattedDateOfBirth = Carbon::createFromFormat('Y-m-d', $client->date_of_birth)->format('F j, Y');
        $formattedStartDate = Carbon::createFromFormat('Y-m-d', $client->start_date)->format('F j, Y');



        // Add the formatted phone number to the $client object
        $client->formattedMobilemain = $formattedMobilemain;
        $client->formattedMobilealt = $formattedMobilealt;
        $client->formattedMobilework = $formattedMobilework;
        $client->formattedDateOfBirth = $formattedDateOfBirth;
        $client->formattedStartDate = $formattedStartDate;

        // Fetch the client along with the count of notes
        $client->loadCount('notes');
    
        // Fetch notes for the specified client using the relationship
        $notes = $client->notes; // This should retrieve the related notes
    
        // Return the view with the modified $client object and notes
        return view('clients.show', [
            'client' => $client,
            'notes' => $notes
        ]);
    }

    public function deleteNote($id)
    {
        // Find the note by its ID
        $note = Note::find($id);

        // Check if the note exists
        if (!$note) {
            // Handle the case where the note is not found
            return redirect()->back()->with('error', 'Note not found.');
        }

        // Retrieve the client ID from the note
        $clientId = $note->client_id;

        // Delete the note
        $note->delete();

        // Check if clientId is valid before redirecting
        if (!$clientId) {
            return redirect()->route('clients.index')->with('error', 'Client not found for this note.');
        }
        
        // Redirect to the client's show page with the #notes fragment
        return redirect()->route('clients.show', ['client' => $clientId])->withFragment('notes');
    }

    public function updateNote(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'notes' => 'required|string|max:5000', // Adjust max length as needed
        ]);
    
        // Find the note by ID
        $note = Note::find($id);
    
        // Check if the note exists
        if ($note) {
            // Update the note's content
            $note->notes = strip_tags($request->input('notes'));
            $note->notes = $request->input('notes');
            $note->save(); // Save changes to the database
    
            return response()->json(['success' => true]); // Return success response
        }
    
        // Return an error response if the note is not found
        return response()->json(['success' => false], 404);
    }
    



    public function storeNote(Request $request)
    {
         // Retrieve the authenticated user's ID from the session
         $userId = auth()->id();

        // Validate the request
        $request->validate([
            'notes' => 'required|string',
            'client_id' => 'required|exists:clients,id',
            'level' => 'required|integer|in:0,1,2',
        ]);

        // Create a new note
        $note = Note::create([
            'notes' => $request->input('notes'),
            'client_id' => $request->input('client_id'),
            'created_by' => $userId, // Current logged-in user
            'level' => $request->input('level'),
        ]);

        // Redirect to the client view with the notes tab active
        return redirect()->route('clients.show', ['client' => $request->input('client_id')])->with('success', 'Note added successfully!')->withFragment('notes');
    }


    public function showNotes($client)
    {
        // Fetch notes for the specified client
        $notes = Note::where('client_id', $client)->get();

        // Fetch the client information
        $client = Client::findOrFail($client);

        // Return the view with notes and client data
        return view('clients.show', [
            'notes' => $notes,
            'client' => $client
        ]);
    }

    public function fetchNoteDetails($id)
    {
        $note = Note::find($id);

        if ($note) {
            return response()->json(['success' => true, 'note' => $note]);
        }

        return response()->json(['success' => false]);
    }
            

    // public function edit(client $client)
    // {
    //     return view('clients.edit', compact('client'));
    // }

    // Method to fetch client data
    public function edit($id)
    {
      //  $client = Client::find($id);
        $client = Client::with('cmsLogin')->findOrFail($id);
        return response()->json($client);
    }


    // public function update(Request $request, client $client)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'description' => 'required',
    //     ]);

    //     $client->update($request->all());

    //     return redirect()->route('clients.index');
    // }

     // Method to update client data
     public function update(Request $request, $id)
     {
         // Validate the request data
         $request->validate([
             'firstnameEdt' => 'required|string|max:255',
             'middlenameEdt' => 'nullable|string|max:255',
             'lastnameEdt' => 'required|string|max:255',
             'suffixEdt' => 'nullable|string|max:10',
             'emailEdt' => 'required|email|max:255',
             'ssnEdt' => 'required|string|max:255',
             'birthdateEdt' => 'required|date',
             'mailingEdt' => 'nullable|string|max:255',
             'cityEdt' => 'required|string|max:255',
             'stateEdt' => 'required|string|max:2',
             'zipEdt' => 'required|string|max:10',
             'mobileEdt' => 'required|string|max:20',
             'palternateEdt' => 'nullable|string|max:20',
             'pworkEdt' => 'nullable|string|max:20',
             'faxEdt' => 'nullable|string|max:20',
             'cmsEdt' => 'nullable|string|max:255',
             'cmsuserEdt' => 'nullable|string|max:255',
             'cmspassEdt' => 'nullable|string|max:255', // Consider a secure handling for the password
         ]);
     
         // Find the client and update the details
         $client = Client::findOrFail($id);
         $client->first_name = $request->input('firstnameEdt'); 
         $client->middle_name = $request->input('middlenameEdt'); 
         $client->last_name = $request->input('lastnameEdt'); 
         $client->suffix = $request->input('suffixEdt'); 
         $client->email = $request->input('emailEdt'); 
         $client->ssn = $request->input('ssnEdt'); 
         $client->date_of_birth = $request->input('birthdateEdt'); 
         $client->address = $request->input('mailingEdt'); 
         $client->city = $request->input('cityEdt'); 
         $client->state = $request->input('stateEdt'); 
         $client->zip_code = $request->input('zipEdt'); 
         $client->mobile_main = $request->input('mobileEdt'); 
         $client->mobile_alt = $request->input('palternateEdt'); 
         $client->mobile_work = $request->input('pworkEdt'); 
         $client->fax = $request->input('faxEdt'); 
         $client->save(); // Save the client details
     
         // Update the CMS Login details
         if ($client->cmsLogin) {
             $cmslogin = $client->cmsLogin;
         } else {
             // If CMS Login doesn't exist, create a new one
             $cmslogin = new CmsLogin();
             $cmslogin->client_id = $client->id; // Set the foreign key
         }
     
         $cmslogin->cms_type = $request->input('cmsEdt'); 
         $cmslogin->username = $request->input('cmsuserEdt'); 
         $cmslogin->password = $request->input('cmspassEdt'); 
       
     
         $cmslogin->save(); // Save or update the CMS Login details
     
         return redirect()->back()->with('success', 'Client updated successfully');
     }

    public function destroy(client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }

    public function store(Request $request)
    {
        // Retrieve the authenticated user's ID from the session
        $userId = auth()->id();

        // Validate the form inputs
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255', 
            // 'start_date' => 'nullable|date', 
        ]);

        //assigning variable based on input
          $fname = $request->input('firstname');
          $mname = $request->input('middlename');
          $lname =  $request->input('lastname'); 
          $suffix = $request->input('suffix');
          $email = $request->input('email');
          $ssn = $request->input('ssn');
          $bday =  $request->input('birthdate', now()->toDateString());
          $address =  $request->input('mailing');
          $city =  $request->input('city');
          $state =  $request->input('state');
          $zipcode = $request->input('zip');
          $mobile = $request->input('mobile');
          $altmobile = $request->input('palternate');
          $workmobile = $request->input('pwork');
          $fax = $request->input('fax');

        // Create a new client record
        $client = Client::create([
            'first_name' => $fname,
            'middle_name' => $mname,
            'last_name' => $lname,
            'suffix' => $suffix,
            'email' => $email,
            'ssn' => $ssn,
            'date_of_birth' => $bday,
            'address' => $address,
            'city' =>  $city,
            'state' => $state,
            'zip_code' =>  $zipcode,
            'country' => 'United States',
            'mobile_main' =>  $mobile,
            'mobile_alt' =>  $altmobile,
            'mobile_work' => $workmobile,
            'fax' => $fax,
            'previous_address' =>  '',
            'previous_city' => '',
            'previous_state' => '',
            'previous_zip_code' => null,
            'previous_country' => '',
            'status' =>   'new',
            'start_date' =>  $request->input('start_date', now()->toDateString()),
            'assigned_to' =>  $userId,

            //'assigned_to' => $request->input('team_members')

            'start_date' => $request->input('start_date'),
            'last_login_date' => $request->input('last_login_date'),
            // 'onboarding_stage' => $request->input('onboarding_stage'),
        ]);

        // Create a new cms_login record
        CmsLogin::create([
            'username' => $request->input('cmsuser'),
            'password' => $request->input('cmspass'), 
            'cms_type' => $request->input('cms_type'),
            'client_id' => $client->id, // Link to the newly created client
        ]);

        // Redirect back to the index route with a success message
        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    // public function getNames()
    // {
    //     $names = Client::select('id', 'first_name as text')->get();
    //     return response()->json($names);
    // }

    public function exportToCsv()
    {
        $clients = Client::all();

        $csvFileName = 'Clients_' . date('Ymd_His') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$csvFileName\"",
        ];

        $columns = ['ID',
                    'First Name',
                    'Middle Name',
                    'Last Name', 
                    'Suffix',
                    'Email',
                    'SSN',
                    'Birth Date', 
                    'Mailing Address',
                    'City',
                    'State',
                    'Zip Code',
                    'Country',
                    'Mobile Number',
                    'Alternative Number',
                    'Work Number',
                    'Fax'
                ];

        $callback = function() use ($clients, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($clients as $client) {

                  // Convert NULL values to empty strings
                    $id = $client->id ?? '';
                    $fname = $client->first_name ?? '';
                    $mname = $client->middle_name ?? '';
                    $lname =  $client->last_name ?? '';
                    $suffix =  $client->suffix ?? '';
                    $email = $client->email ?? '';
                    $ssn =  $client->ssn ?? '';
                    $bday =  $client->date_of_birth ?? '';
                    $address =  $client->address ?? '';
                    $city =  $client->city ?? '';
                    $state =  $client->state ?? '';
                    $zipcode = $client->zip_code ?? '';
                    $country =  $client->country ?? '';
                    $mobile =  $client->mobile_main ?? '';
                    $altmobile =  $client->mobile_alt ?? '';
                    $workmobile = $client->mobile_work ?? '';
                    $fax = $client->fax ?? '';

                fputcsv($file, [
                                $id,
                                $fname,
                                $mname,
                                $lname,
                                $suffix,
                                $email,
                                $ssn,
                                $bday,
                                $address,
                                $city,
                                $state,
                                $zipcode,
                                $country,
                                $mobile,
                                $altmobile,
                                $workmobile,
                                $fax
                            ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}
