<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function index() 
    {
        $listItems=listitem::all();

        return view('welcome', compact('listItems'));   
    }
     
    public function saveItem(Request $request) 
    {
        $item = new ListItem;
        $item->name = $request->name;
        $item->is_complete = 0;
        $item->save();

        $listItems=listitem::all();

        return view('welcome', compact('listItems'));  
 
        
    }

    public function markItem($id)
    {
        $item = ListItem::find($id);
        $item-> is_complete = 1;

        $item->save();

        $listItems=listitem::all();

        return view('welcome', compact('listItems'));  
        //return redirect()->back();

    }
}
