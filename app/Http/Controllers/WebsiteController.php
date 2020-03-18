<?php

namespace App\Http\Controllers;

use App\Website;
use App\Filters\WebsiteFilters;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * View all websites in JSON format.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexJSON()
    {
        return Website::all();
    }

    /**
     * View all websites or based on criteria.
     *
     * @param Request $request
     * @param WebsiteFilters $filters
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request, WebsiteFilters $filters)
    {
        $websites = $this->getWebsites($filters);

        return view('websites.index', compact('websites'));
    }

    /**
     * @param WebsiteFilters $filters
     * @return mixed
     */
    public function getWebsites(WebsiteFilters $filters)
    {
        return Website::filter($filters)->paginate(5);
    }

    /**
     * Create a new website.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('websites.create');
    }

    /**
     * Persist a new website.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'url' => 'required|unique:websites,url|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
        ]);

        auth()->user()->websites()->create($attributes);

        return redirect('/websites');
    }

    /**
     * Show a single website.
     *
     * @param Website $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        return view('websites.show', compact('website'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
