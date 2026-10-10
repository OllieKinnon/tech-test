<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return 'Form submitted successfully!';
    }
}
