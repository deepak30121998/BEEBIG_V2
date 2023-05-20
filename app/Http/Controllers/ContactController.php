<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Closure;
use Illuminate\Support\Facades\Http;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Frontend.Front.contact-us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Remove all characters except digits
                    $value = preg_replace('/[^0-9]/', '', $value);

                    // Check if the phone number starts with +91 or 0
                    if (!preg_match('/^(\\+91|0)?[6-9]\\d{9}$/', $value)) {
                        $fail('The '.$attribute.' must be a valid Indian phone number.');
                    }
                },
            ],

            'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, Closure $fail) {
                $google_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $value,
                    'remoteip' => \request()->ip()
                ]);

                if (!$google_response->json('success')) {
                    $fail("The {$attribute} is invalid.");
                }
            },]
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
dd($request);
        $contact = Contact::create($request->validated());

        Alert::success('Thanks', 'Your Message Sent Successfully');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact = Contact::orderBy('id', 'desc')->get();
        return view('Leads.index', ['contacts' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
