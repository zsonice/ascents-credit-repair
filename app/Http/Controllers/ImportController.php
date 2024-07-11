<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Client;

class ImportController extends Controller
{
    public function importCSV(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'import_csv' => 'required|mimes:csv,txt', // Allow CSV and text files
        ]);

        // Read CSV file
        $file = $request->file('import_csv');
        $handle = fopen($file->getRealPath(), 'r');

        // Skip the header row
        $header = fgetcsv($handle);
        Log::info('CSV Header:', $header);

        // Process data in chunks
        $chunksize = 25;
        while (!feof($handle)) {
            $chunkdata = [];

            for ($i = 0; $i < $chunksize; $i++) {
                $data = fgetcsv($handle);
                if ($data === false) {
                    break;
                }
                $chunkdata[] = $data;
            }

            // Log the chunk data
            Log::info('Chunk Data:', $chunkdata);

            // Process the chunk data
            $this->processData($chunkdata);
        }

        fclose($handle);
        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    private function processData($sheetData)
    {
        foreach ($sheetData as $column) {
            // Validate the data format
            if (count($column) < 2) { // Adjust according to your CSV structure
                Log::error('Invalid CSV row format:', $column);
                continue;
            }

            // Log each row being processed
            Log::info('Processing row:', $column);

            // Create a new Client
            Client::create([
                'id' => rand(),
                'first_name' => $column[1],
                'middle_name' => "mid test",
                'last_name' => "last test",
                'suffix' => "suffix test",
                'email' => "email@ test",
                'date_of_birth' => now()->toDateString(),
                'address' =>  "add test",
                'city' =>  "ct test",
                'state' => "state test",
                'zip_code' =>  1,
                'country' => "ctry test",
                'mobile_main' =>  "mb test",
                'mobile_alt' =>  "aklt test",
                'mobile_work' =>  "mbwork test",
                'fax' => "fax test",
                'previous_address' =>  "add test",
                'previous_city' => "cty test",
                'previous_state' =>  "state test",
                'previous_zip_code' =>  1,
                'previous_country' =>  "ctryyy prev",
                'status' =>  "statuys test",
                'start_date' =>  now()->toDateString(),
                'assigned_to' => 1,
                // Map other columns accordingly
            ]);
        }
    }
}
