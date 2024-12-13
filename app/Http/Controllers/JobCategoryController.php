<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{


    public function categoryPage(){
        try{
            return view("pages.auth.dashboard.category.categoryPage");
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $categories = JobCategory::all();
            return response()->json(["status" => "success", "categoryLists" => $categories]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message"=>$ex->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try{
           
            $request->validate([
                'name' => 'required|unique:job_categories|max:255'
            ],[
                "name.required" => "Name field is requreid",
                "name.unique" => "Name already existes"
            ]);

            JobCategory::create([
                "name" => Str::upper(trim($request->input("name")))    
            ]);
            return response()->json(["status" => "success", "message" => "Category Added Successfully"]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
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
    public function show(job_category $job_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job_category $job_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, job_category $job_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job_category $job_category)
    {
        //
    }
}
