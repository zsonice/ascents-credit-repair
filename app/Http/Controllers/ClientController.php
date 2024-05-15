<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = client::all();
        return view('clients.index', compact('clients'));
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
}
