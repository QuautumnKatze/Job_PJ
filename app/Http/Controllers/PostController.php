<?php

namespace App\Http\Controllers;

use App\Models\accounts;
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
        $accountdata = accounts::where('role', 'admin')->get();
        return view("admin.post.index", compact("postdata", "accountdata"));
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
        $createData->admin_id = Auth::user()->admin->admin_id;

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
    public function edit($post_id)
    {
        $postdata = posts::find($post_id);
        $postcategorydata = post_categories::all();
        return view("admin.post.edit", compact("postdata", "postcategorydata"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = posts::find($id);
        $updateData->title = $request->title;
        $updateData->post_category_id = $request->post_category_id;
        $updateData->image = $request->image;
        $updateData->shorten = $request->shorten;
        $updateData->status = $request->status;
        $updateData->content = $request->content;

        $updateData->save();
        return redirect()->route('post.index');
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
