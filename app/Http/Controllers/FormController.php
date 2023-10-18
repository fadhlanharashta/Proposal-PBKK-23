<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validation 
        $rules = [
            'Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Email' => 'required|email'
        ];

        // validation messages
        $messages = [
            'required' => 'The :attribute field is required.',
            'email' => 'The :attribute must be a valid email address.',
            'integer' => 'The :attribute must be an integer.',
            'numeric' => 'The :attribute must be a numeric value.',
            'image' => 'The :attribute must be an image file (jpeg, png, jpg, gif).',
            'max' => 'The :attribute must not exceed :max characters.',
        ];

        // Validate data
        $validatedData = $request->validate($rules, $messages);

        if ($request->hasFile('Picture')) {
            $imagePath = $request->file('Picture')->store('public/uploads');
            $validatedData['image'] = $imagePath;
        }

        // If validation passes, display the submitted data
        return view('submitted', compact('validatedData'));
    }
}
