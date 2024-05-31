<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $successTitle = __('website/contact.success_title');
        $successMessage = __('website/contact.success_message');
        $errorTitle = __('website/contact.error_title');
        $errorMessage = __('website/contact.error_message');

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'motive' => 'required',
            'message' => 'required'
        ]);

        try {
                ContactUs::create(
                    [
                        'first_name' => $request->input('firstName'),
                        'last_name' => $request->input('lastName'),
                        'email' => $request->input('email'),
                        'contact' => $request->input('contact'),
                        'company_name' => $request->input('companyName'),
                        'sector_of_activity' => $request->input('sectorOfActivity'),
                        'motive' => $request->input('motive'),
                        'message' => $request->input('message')
                    ]
                );
                return \json_encode([
                    'requestStatus' => true,
                    'title' => $successTitle,
                    'message' => $successMessage
            ]);
            
        } catch (\Throwable $th) {
            return \json_encode([
                'requestStatus' => false,
                'title' => $errorTitle,
                'message' => $errorMessage
        ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
