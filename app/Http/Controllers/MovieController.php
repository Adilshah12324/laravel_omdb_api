<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request){
        $apiKey = env('OMDB_API_KEY');
        $movieTitle = $request->input('title');

        $client = new Client();
        $response = $client->get("https://www.omdbapi.com/?t=$movieTitle&apikey=$apiKey");

        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody());


            return response()->json($data);
        } else {
            return redirect('/')->with('error', 'Failed to fetch movie data.');
        }
    }
}
