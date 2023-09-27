<?php

namespace App\Http\Controllers;

use App\Models\CardMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardMetaController extends Controller
{
    public function store(Request $request){
        $fileds = $request->validate([
            'link'=>'required|url',
            'title'=>'required|string',
            'icon'=>'required',
        ]);
        CardMeta::create([
            'title'=> $fileds['title'],
            'icon'=> $fileds['icon'],
            'link'=> $fileds['link'],
            'card_id'=> Auth::user()->card->id,
        ]);
        return [
            'message'=>'card link creared with successflluy',
        ];
    }
    public function update(Request $request,$id){
        $fileds = $request->validate([
            'link'=>'required|url',
            'title'=>'required|string',
            'icon'=>'required',
        ]);
        $cardmeta = CardMeta::find($id);
        $cardmeta->update([
            'title'=> $fileds['title'],
            'icon'=> $fileds['icon'],
            'link'=> $fileds['link'],
        ]);
        return [
            'message'=>'card link updated with successflluy',
        ];
    }
    public function destroy($id){
        CardMeta::destroy($id);
        return [
            'message' => 'card has been deleted',
        ];
    }

}
