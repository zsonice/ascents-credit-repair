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
             //   'id' => rand(),
                'first_name' => $column[1],
                'middle_name' =>  $column[2],
                'last_name' =>  $column[3],
                'suffix' =>  $column[4],
                'email' => $column[5],
                'ssn' => $column[6],
                'date_of_birth' => $column[7],
                'address' =>  $column[8],
                'city' =>  $column[9],
                'state' => $column[10],
                'zip_code' =>  $column[11],
                'country' => $column[12],
                'mobile_main' => $column[13],
                'mobile_alt' => $column[14],
                'mobile_work' => $column[15],
                'fax' => $column[16],
               // 'previous_address' => $column[6],
               // 'previous_city' => $column[6],
               // 'previous_state' => $column[6],
               // 'previous_zip_code' =>  1,
               // 'previous_country' =>  "ctryyy prev",
                'status' =>  "Client",
                'start_date' =>  now()->toDateString(),
                'assigned_to' => 1, // user id
            ]);
        }
    }
}
