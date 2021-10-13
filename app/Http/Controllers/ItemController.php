<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Item;


class ItemController extends Controller
{
    //

    public function viewItems(){
        $items = Item::all();
        return view('items')->with('items', $items);

    } //
    public function viewaddItems (){
        
        return view('additem');

    }
    public function vieweditItems($item_id){
        $item= Item::find($item_id);
        return view('edititem1')->with('item', $item);

    }//
    public function addItem(Request $request){

       
        $request->validate([
            
            'item_name'=>'required|string|max:50',
            'amount'=>'required',
            
         
        ]);
        
        $item = new Item();

        $item->item_name = $request->item_name;
        $item->amount = $request->amount;
       
        $item->save();

        return $item;

    }
    public function editItem(Request $request,$item_id){
        $item= Item::find($item_id);

       
        $request->validate([
            
            'item_name'=>'required|string|max:50',
            'amount'=>'required',
         
        ]);

       
        $item->item_name = $request->item_name;
        $item->amount = $request->amount;
       
        $item->save();
        return redirect()->back()->with('success','Successfully Saved!');


    }
    public function deleteItem($item_id){
        $item = Item::find($item_id);
        $item->delete();
        return redirect()->back();
    }
}
