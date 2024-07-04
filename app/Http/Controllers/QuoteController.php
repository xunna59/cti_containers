<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Requests\QuoteRequest;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class QuoteController extends Controller
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
    public function store(QuoteRequest $request)
    {
        $recaptchaResponse = $request->input('g-recaptcha-response');

        if (is_null($recaptchaResponse)) {
            return redirect()->back()->with('status', 'Please complete the reCAPTCHA to proceed.');
        }

        $isValidRecaptcha = $this->verifyRecaptcha($recaptchaResponse, $request->ip());

        if (!$isValidRecaptcha) {
            return redirect()->route('get-quote')->with('error', 'Captcha validation failed.');
        }

        $quote = Quote::create($request->validated());

        if ($quote) {
            return redirect()->route('get-quote')->with('success', 'Quote request submitted successfully.');
        } else {
            return redirect()->route('get-quote')->with('error', 'Oops! An error occurred.');
        }
    }


    protected function verifyRecaptcha($recaptchaResponse, $ip)
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptchaResponse,
            'remoteip' => $ip 
        ];

        try {
            $response = Http::asForm()->post($url, $body);
            $result = $response->json();
            return $response->successful() && $result['success'];
        } catch (\Exception $e) {
            return false;
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