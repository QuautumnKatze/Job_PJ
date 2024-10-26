<?php

namespace App\Http\Controllers;

use App\Models\post_categories;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postdata = posts::all();
        return view("admin.post.index", compact("postdata"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postcategorydata = post_categories::all();
        return view("admin.post.create", compact("postcategorydata"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
