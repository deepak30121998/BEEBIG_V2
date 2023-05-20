<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\Post;
use App\Http\Requests\StoreblogsRequest;
use App\Http\Requests\UpdateblogsRequest;
use Artesaos\SEOTools\Facades\SEOTools;


class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOTools::setTitle('Blogs - Beebig Digital');
        SEOTools::setDescription('This is my page description');
        $Blogs = Post::where('publish',1)->orderBy('id', 'desc')->get();
        return view('Frontend.Front.blogs', compact('Blogs'));
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
     * @param  \App\Http\Requests\StoreblogsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreblogsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
        ->with('user:id,name', 'comments.replies', 'comments.users:id,name', 'comments.replies.users:id,name')
        ->first();

        SEOTools::setTitle($post->meta_title);
        SEOTools::setDescription($post->meta_description);

        return view('Frontend.Front.blog-detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogsRequest  $request
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateblogsRequest $request, blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogs $blogs)
    {
        //
    }
}
