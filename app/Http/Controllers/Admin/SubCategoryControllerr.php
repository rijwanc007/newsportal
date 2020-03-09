<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Category;
use App\Subcategory;
use DB;
class SubCategoryControllerr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('category_name','id')->get();
        $sub_categories = Subcategory::all();

        $sub_categories = DB::table('categories')
                          ->Join('subcategories','subcategories.category', '=' , 'categories.id' )
                          ->get();


         return view('backend.sub-category.manage_subcategory',compact('categories','sub_categories'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'sub_category'=> 'required|unique:subcategories'
        ]);
       $sub_category = new Subcategory();
       $sub_category->category = $request->category_name;
       $sub_category->sub_category = $request->sub_category;
       $sub_category->save();
       return Redirect::to('subcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_subcategory = Subcategory::find($id);
        return response()->json($edit_subcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $subcatid = $request['subcategory_id'];
       $sub_category = new Subcategory();
       $sub_category = Subcategory::find($subcatid );
       $sub_category->category = $request->category_name;
       $sub_category->sub_category = $request->sub_category;
       $sub_category->save();
       return response()->json($sub_category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return Redirect::to('subcategory');
    }
}
