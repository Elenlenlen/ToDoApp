<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Http\Requests\CardRequest;

class CardController extends Controller
{
    function create(CardRequest $request){

        return Card::create([
            'description' => $request->input('description'),
            'done' => $request->input('done'),
            'priority' => $request->input('priority'),
            'user_id' => auth()->user()->id
        ]);
    }

    function all(){

        return Card::all();
    }

    public function delete(Request $request, Card $card)
    {
        $card->delete();

        return $card;
    }

    public function update(CardRequest $request, Card $card)
    {
        $card->update($request->all());

        return $card;
    }

    public function one(Request $request, Card $card){

        return $card;
    }
}