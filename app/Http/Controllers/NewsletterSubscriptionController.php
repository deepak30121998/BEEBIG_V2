<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use App\Http\Requests\StoreNewsletterSubscriptionRequest;
use App\Http\Requests\UpdateNewsletterSubscriptionRequest;

class NewsletterSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addSubscriber(Request $request)
    {
        echo "1";die;
        if($request->ajax())
        {
            $data = $request->all();

            $subscribercount = NewsletterSubscription::where('email',$data['subscriber_email'])->count();
            if($subscribercount > 0)
            {
                return "exists";
            }else{
                 $newsletter = new NewsletterSubscription;
                 $newsletter->email = $data['subscriber_email'];
                 $newsletter->status = 1;
                 $newsletter->save();
                 return "Inserted";
            }
        }
    }

    public function index()
    {
        $subscriber = NewsletterSubscription::orderBy('id','desc')->get();
        return view('Newsletter.index', ['subscriber' => $subscriber]);
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
    public function store(StoreNewsletterSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterSubscriptionRequest $request, NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscription $newsletterSubscription)
    {
        //
    }
}
