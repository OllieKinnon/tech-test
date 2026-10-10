<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'first_name' => 'required|string|max:25',
        'last_name' => 'required|string|max:25',
        'email' => 'required|email|max:50',
        'phone' => ['required', 'string', 'max:15', 'regex:/^[0-9+\s().-]+$/', 'regex:/[0-9].*[0-9]/'],
        'date_of_birth' => 'required|date|before:today',
        'marketing_consent' => 'sometimes|accepted',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->route('customers.create')
            ->withErrors($validator)
            ->withInput();
    }

        $validated = $validator->validated();

try {
    $response = Http::withToken(config('services.customer_api.token'))
        ->acceptJson()
        ->post(config('services.customer_api.url'), $validated);
} catch (\Illuminate\Http\Client\ConnectionException $e) {
    return redirect()
        ->route('customers.create')
        ->withErrors(['api' => 'Sorry, we could not connect to the service. Please try again.'])
        ->withInput();
}

if ($response->failed()) {
    return redirect()
        ->route('customers.create')
        ->withErrors(['api' => 'Sorry, we could not submit your details. Please try again.'])
        ->withInput();
    }

    return view('customers.success', [
    'customer' => $validated,
    ]);
    }
}
