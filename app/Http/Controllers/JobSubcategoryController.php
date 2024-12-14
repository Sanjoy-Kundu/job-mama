<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JobSubcategory;

class JobSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $subCategories = JobSubcategory::all();
            return response()->json(["status" => "success", "SubcategoryLists" => $subCategories]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message"=>$ex->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $request->validate(
                [
                    'name' => 'required|unique:job_Subcategories|max:255',
                    'job_categories_id' => 'required'
                ],
                [
                    'name.required' => 'Name field is requreid',
                    'name.unique' => 'Name already existes',
                    'job_categories_id.required' => 'select category'
                ],   
            );

            $name = trim(Str::upper($request->input("name")));
            $job_categories_id = trim($request->input("job_categories_id"));
            $chaekJobSubCategory = JobSubcategory::where("name",$name)->where("job_categories_id")->exists();
            if($chaekJobSubCategory){
                return response()->json(["status" => "error", "message" => "Name and Category Already taken"]);
            }



            JobSubcategory::create([
                'name' => Str::upper(trim($request->input('name'))),
                'job_categories_id' => $request->input('job_categories_id')
            ]);
            return response()->json(['status' => 'success', 'message' => 'Sub Category Added Successfully']);
        } catch (Exception $ex) {
            return response()->json(['status' => 'fail', 'message' => $ex->getMessage()]);
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
    public function show(job_subcategory $job_subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job_subcategory $job_subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, job_subcategory $job_subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job_subcategory $job_subcategory)
    {
        //
    }
}
