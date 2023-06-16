<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'party_name' => 'required|max:255',
        //     'party_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $party = new Party();
        // $party->party_name = $validatedData['party_name'];

        // if ($request->hasFile('party_logo')) {
        //     $image = $request->file('party_logo');
        //     $filename = time() . '_' . $image->getClientOriginalName();
        //     $image->storeAs('public/images', $filename);
        //     $party->party_logo = $filename;
        // }

        // $party->save();

        // return redirect()->route('parties.index')
        //     ->with('success', 'Party created successfully.');

        $imagePath = $request->file('party_logo')->store('public/logos');
        $imagePath = str_replace('public/', '', $imagePath);

        $partyName = $request->input('party-name');
        $presidant= $request->input('presidant');
        $level= $request->input('level');
        $region= $request->input('region');
        $partylogo = $request->input('party_logo');
        $party = Party::createParty($partyName,$partylogo,$presidant,$level,$region);
        return "hello you have successfuly registered ".$partyName;
    }
}