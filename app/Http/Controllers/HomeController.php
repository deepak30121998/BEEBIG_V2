<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        SEOTools::setTitle('Beebig Digital');
        SEOTools::setDescription('This is my page description');
        $blog = Post::take(2)->get();
        $post = Post::limit(4)->offset(2)->get();
        return view('Frontend.Front.home', compact('blog', 'post'));
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
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }

    public function redirectUser()
    {
        if(auth()->user()->hasRole('super-admin'))
        {
            return view('Admin.dashboard');
        }else{
            dd("2");
        }
    }
}
