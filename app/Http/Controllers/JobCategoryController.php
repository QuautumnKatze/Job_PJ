<?php

namespace App\Http\Controllers;

use App\Models\job_categories;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobcategorydata = job_categories::all();
        return view("admin.jobcategory.index", compact("jobcategorydata"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.jobcategory.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createData = new job_categories();
        $createData->job_category_name = $request->job_category_name;
        $createData->description = $request->description;
        $createData->status = $request->status;

        $createData->save();
        return redirect()->route("jobC.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jobcategorydata = job_categories::find($id);
        return view("admin.jobcategory.edit", compact("jobcategorydata"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = job_categories::find($id);
        $updateData->job_category_name = $request->job_category_name;
        $updateData->description = $request->description;
        $updateData->status = $request->status;
        $updateData->save();
        return redirect()->route('jobC.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = job_categories::find($id);
        $destroy->delete();
        return response()->json(['success' => true, 'message' => 'Xóa danh mục thành công']);
    }
}
