<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Card::all();
    }

    public function cards(){
        $cards = Card::all();
        return view('admin.cards.cards',compact('cards')); 
    } 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $avatar = $request->file('avatar')->store('img','files');
        $cover = $request->file('avatar')->store('img','files');
        Card::create([
            'avatar'=>$avatar,
            'cover'=>$cover,
            'location'=>$request->location,
            'description'=>$request->description,
            'user_id'=>Auth::user()->id,
        ]);

        // return [
        //     'message' => 'information created with successfully',
        // ];
        return $request->file('avatar')->store('img','files');
    }

    /**
     * Display the specified resource.
     */
    public function show($card)
    {
        $card = Card::find($card);
        if(is_null($card)){
            return response([
                'message' => 'no data find',
            ]);
        }else{
            return $card;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('admin.cards.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $card->update([
            'avatar'=>$request->avatar,
            'cover'=>$request->cover,
            'location'=>$request->location,
            'description'=>$request->description,
            'user_id'=>Auth::user()->id,
        ]);
        return [
            'message' => 'information updated with successfully',
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($card)
    {
        Card::destroy($card);
        return [
            'message' => 'card has been deleted',
        ];
    }
}
