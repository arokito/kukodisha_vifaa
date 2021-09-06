<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item =Item::all();
        return view('items.index',compact('item'));
    }
     
    public function homePage(){
        $item = Item::all();
        return view('homepage', compact('item'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('items.create');

        
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
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'price'=>'required',
            'item_number' => 'required'
       ]
       );
       $photo = $request->file('photo');
       $photoName = time().'.'.$request->photo->extention();
       $photo->move(public_path('uploads'), $photoName);
       
      Item::create($request->all());
       

       notify()->success('Data saved⚡️');
       return redirect()->route('items.index');
        
        
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
        $item =Item::find($id);
        return view('items.edit',compact('item'));
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
        $item = Item::find($id);
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'price'=>'required',
            'item_number' => 'required'
       ]
       );
        $item->update($request->all());

        notify()->success('Edited⚡️');
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('items.index')->with('message', 'deleted successfully');
    }
}
