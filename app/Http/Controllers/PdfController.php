<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generate(Request $request)
    {
        set_time_limit(0); // No timeout (not recommended for production)

        // You can hardcode or get these from a form/request
        $username = 'jamallrobinson1271@gmail.com';
        $password = 'Love4Trucks1@';
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5teWZyZWVzY29yZW5vdy5jb20vYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE3NDUzMjY3NDAsImV4cCI6MTc0NTM2OTk0MCwibmJmIjoxNzQ1MzI2NzQwLCJqdGkiOiI1WnN2M1RWdFJNeHlDTEIzIiwic3ViIjoiMTcxMzEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.isABTqZpukOZzq6GHuJNas1geUGBWUczbOoJ-H2bSn0'; // Replace with your actual token

       // $response = Http::withToken($token)->post('https://api.myfreescorenow.com/api/auth/3B/report.html', [
        $response = Http::withToken($token)->post('https://api.myfreescorenow.com/api/auth/3B/epic/report.html', [
            'username' => $username,
            'password' => $password,
        ]);

        if ($response->successful()) {
            $responseData = $response->json(); // safely convert to array
        
            // if (isset($responseData['data']['html'])) {
            //     $html = $responseData['data']['html'];
        
            //     $pdf = Pdf::loadHTML($html);
        
            //     return $pdf->download('report.pdf');
            // }

            if (isset($responseData['data'])) {
                $html = $responseData['data'];
        
                $pdf = Pdf::loadHTML($html);
        
                return $pdf->download('report.pdf');
            }
        
            // Optional: Log unexpected response structure
            \Log::error('HTML key not found in API response', $responseData);
            return response()->json([
                'error' => 'The API response did not include expected HTML content.',
                'response' => $responseData
            ], 400);
        }
        
        return response()->json([
            'error' => 'Failed to generate PDF. API returned an error.',
            'status' => $response->status(),
            'body' => $response->body()
        ], 400);
    }
}

