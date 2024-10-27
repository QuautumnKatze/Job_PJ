<?php

namespace App\Http\Controllers;

use App\Models\post_categories;
use App\Models\posts;
use Auth;
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
        $createData = new posts();
        $createData->title = $request->title;
        $createData->post_category_id = $request->post_category_id;
        $createData->image = $request->image;
        $createData->shorten = $request->shorten;
        $createData->status = $request->status;
        $createData->content = $request->content;
        $createData->admin_id = Auth::guard('admin')->user()->admin_id;

        $createData->save();
        return redirect()->route("post.index");
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
        $destroy = posts::find($id);
        $destroy->delete();
        return response()->json(['success' => true, 'message' => 'Xóa bài viết thành công']);
    }
}
