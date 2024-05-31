<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
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
        $successTitle = __('website/layouts/footer.newsletter_success_title');
        $successMessage = __('website/layouts/footer.newsletter_success_message');
        $errorTitle = __('website/layouts/footer.newsletter_error_title');
        $errorMessage = __('website/layouts/footer.newsletter_error_message');
        $emailExistTitle = __('website/layouts/footer.email_exist_title');
        $emailExistMessage = __('website/layouts/footer.email_exist_message');

        $this->validate($request, [
            'email' => 'required'
        ]);
        try {
            
            $res = Newsletter::where(
                'email',$request->input('email')
            )->get()->first();
            if ($res != null) {
                return \json_encode([
                    'requestStatus' => null,
                    'title' => $emailExistTitle,
                    'message' => $emailExistMessage
            ]);
            } else {
                Newsletter::create(
                    [
                        'email' => $request->input('email'),
                    ]
                );
                return \json_encode([
                    'requestStatus' => true,
                    'title' => $successTitle,
                    'message' => $successMessage
            ]);
            }
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
