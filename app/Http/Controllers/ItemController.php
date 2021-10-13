<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Item;


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
    public function vieweditItems(){
        
        return view('editItem');

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
        $items= Item::find($item_id);

       
        $request->validate([
            
            'item_name'=>'required|string|max:50',
            'amount'=>'required',
         
        ]);

       
        $item->item_name = $request->item_name;
        $item->amount = $request->amount;
       
        $item->save();
        return redirect()->back()->with('success','Successfully Saved!');


    }
    public function deleteMeeting($meetingID){
        $meeting = Meeting::find($meetingID);
        app('App\Http\Controllers\UserManagment\NotificationController')->sendMeetingCancelNotification($meeting);
        $meeting->delete();
        return redirect()->back();
    }
}
