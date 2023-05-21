<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Http\Requests\StorePagesRequest;
use App\Http\Requests\UpdatePagesRequest;
use Auth;
use Artesaos\SEOTools\Facades\SEOTools;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages= Pages::orderBy('id', 'desc')->get();
        return view('Admin.Pages.index',['pages'=>$pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePagesRequest $request)
    {
        $data= $request->validated();
        $data['user_id'] = Auth::user()->id;
        $pages = Pages::create($data);

        return redirect()->route('admin.pages.index')->withSuccess('Page created !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $page)
    {
        return view('Admin.Pages.edit', ['page'=> $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePagesRequest  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePagesRequest $request, Pages $page)
    {
        $page->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'page_description' => $request->edit_description,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'publish' => $request->publish
        ]);
        return redirect()->route('admin.pages.index')->withSuccess('Page updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect()->back()->withSuccess('Page deleted !!!');
    }

    public function detail($slug)
    {
        $page = Pages::where('slug',$slug)->where('publish',1)->firstOrFail();

        SEOTools::setTitle($page->meta_title);
        SEOTools::setDescription($page->meta_description);
        return view('Frontend.Front.pages', compact('page'));
    }
}
