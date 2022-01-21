<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $user = auth()->user();
        $items = Item::where('user_id', '=', $user->id)-> get();
        //dd($user->id, $user->name, $user->email);
        return view('shopping.index', compact('user', 'items'));
    }

    public function store(Request $request){
        $user = auth()->user();
        Item::create([
            'name' => $request->name,
            'user_id' => $user->id
        ]);

        return redirect('/dashboard');
    }
}
