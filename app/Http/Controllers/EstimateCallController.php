<?php

namespace App\Http\Controllers;

use App\Models\EstimateCall;
use Illuminate\Http\Request;

class EstimateCallController extends Controller
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
       $successTitle = __('website/home.success_title');
       $successMessage = __('website/home.success_message');
       $errorTitle = __('website/home.error_title');
       $errorMessage = __('website/home.error_message');

            $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        try { 
                EstimateCall::create(
                    [
                        'first_name' => $request->input('firstName'),
                        'last_name' => $request->input('lastName'),
                        'email' => $request->input('email'),
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
