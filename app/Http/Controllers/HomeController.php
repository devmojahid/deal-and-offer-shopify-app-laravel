<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        // Fetch any necessary data for the home page
        $data = [
            'example_data' => 'This is some example data',
            'apiKey' => config('shopify.api_key'),
            'shopOrigin' => session('shopify_domain'),
        ];

        // Return an Inertia response to render the Home component
        return Inertia::render('Home', $data);
    }
}
