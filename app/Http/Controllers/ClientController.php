<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

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

    public function show(client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, client $client)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index');
    }

    public function destroy(client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }

    public function store(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255', 
            // 'start_date' => 'nullable|date', 
        ]);

        // Create a new client record
        Client::create([
            'first_name' => $request->input('firstname'),
            'middle_name' => $request->input('middlename'),
            'last_name' => $request->input('lastname'), 
            'suffix' => "suffix test",
            'email' => "email test",
            'ssn' => $request->input('ssn', null),
            'date_of_birth' => $request->input('date_of_birth', now()->toDateString()), 
            'address' =>  "suffix test",
            'city' =>  "suffix test",
            'state' => "suffix test",
            'zip_code' =>  1,
            'country' => "suffix test",
            'mobile_main' =>  "suffix test",
            'mobile_alt' =>  "suffix test",
            'mobile_work' =>  "suffix test",
            'fax' => "suffix test",
            'previous_address' =>  "suffix test",
            'previous_city' => "suffix test",
            'previous_state' =>  "suffix test",
            'previous_zip_code' =>  1,
            'previous_country' =>  "suffix test",
            'status' =>  "suffix test",
            'start_date' =>  $request->input('date_of_birth', now()->toDateString()),
            'assigned_to' => 1,

            // 'start_date' => $request->input('start_date'),
            // 'last_login_date' => $request->input('last_login_date'),
            // 'onboarding_stage' => $request->input('onboarding_stage'),
        ]);

        // Redirect back to the index route with a success message
        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    public function getNames()
    {
        $names = Client::select('id', 'first_name as text')->get();
        return response()->json($names);
    }
}
