<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
            
       ]
       );
       $add_category = Category::create($request->all());

       
       if($add_category){
        toastr()->success('CATEGORY ADDED','Category has been Updated successfully!');
        return redirect()->route('categories.index');
    }else{
        oastr()->error('CATEGORY NOT UPDATED','Something is wrong');
        return redirect()->route('categories.index');
    }
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
        //
        $category = Category::find($id);
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $category = Category::find($id);
        
        $update_category = $category->update($request->all());

        if($update_category){
            toastr()->success('CATEGORY UPDATED','Category has been Updated successfully!');
            return redirect()->route('categories.index');
        }else{
            oastr()->error('CATEGORY IS NOT UPDATED','Something is wrong');
            return redirect()->route('categories.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category_delete = $category->delete();

        if($category_delete){
            toastr()->success('CATEGORY DELETED','Category has been Updated successfully!');
            return redirect()->route('categories.index');
        }else{
            oastr()->error('CATEGORY NOT UPDATED','Something is wrong');
            return redirect()->route('categories.index');
        }

    }
}
