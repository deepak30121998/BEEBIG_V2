<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Http\Requests\StoreblogsRequest;
use App\Http\Requests\UpdateblogsRequest;

class BlogsController extends Controller
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
    public function store(StoreblogsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateblogsRequest $request, blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogs $blogs)
    {
        //
    }
}
