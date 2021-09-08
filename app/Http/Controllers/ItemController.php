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
            'product_photo'=>'required|mimes:jpeg,png,jpg|max:2048',
            'price'=>'required',
            'item_number' => 'required'
       ]);

        $photo = $request->file('product_photo');
        $photoName = time(). '.' .$photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'),$photoName);
        

      $insert_item = Item::create([

            'name' => $request->name,
            'category' => $request->category,
            'description' =>$request->description,
            'product_photo' => $photoName,
            'price' => $request->price,
            'item_number' => $request->item_number
      ]);

       //dd($request->all());
        if($insert_item){
            toastr()->success('ITEM ADDED','Item has been added successfully!');
            return redirect()->route('items.index');
        }else{
            oastr()->error('ITEM NOT ADDED','Something is wrong');
            return redirect()->route('items.index');
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
       
        $item = Item::find($id);

      
        return view('items.show',compact('item'));
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
            'photo'=>'required|mimes:jpeg,png,jpg|max:2048',
            'price'=>'required',
            'item_number' => 'required'
       ]
       );

       $photo = $request->file('product_photo');
        $photoName = time(). '.' .$photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'),$photoName);


        $update_item = $item->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' =>$request->description,
            'product_photo' => $photoName,
            'price' => $request->price,
            'item_number' => $request->item_number
        ]);

        if($update_item){
            toastr()->success('ITEM UPDATED','Item has been Updated successfully!');
            return redirect()->route('items.index');
        }else{
            oastr()->error('ITEM NOT UPDATED','Something is wrong');
            return redirect()->route('items.index');
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
        //
        $item = Item::find($id);
        $item_delete = $item->delete();

        if($item_delete){
            toastr()->success('ITEM DELETED','Item has been Deleted successfully!');
            return redirect()->route('items.index');
        }else{
            oastr()->error('ITEM NOT DELETED','Something is wrong');
            return redirect()->route('items.index');
        }
        
    }
}
