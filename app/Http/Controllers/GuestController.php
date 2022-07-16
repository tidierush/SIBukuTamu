<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\GuestBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.index', [
            'guests' => Guest::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'agency' => ['required'],
            'position' => ['required']
        ])->validate();

        Guest::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'agency' => $input['agency'],
            'position' => $input['position']
        ]);

        return to_route('guest.index')->with('success', 'Pencatatan tamu baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        return view('guest.edit', [
            'guest' => $guest,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $input = $request->all();

        Validator::make($input, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'agency' => ['required'],
            'position' => ['required'],
        ])->validate();

        $guest->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'agency' => $input['agency'],
            'position' => $input['position']
        ])->save();

        return to_route('guest.index')->with('success', 'Data tamu berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        Guest::destroy($guest->id);
        GuestBook::where('guest_id', '=', $guest->id)->delete();
        return to_route('guest.index')->with('success', 'Data tamu berhasil dihapus');
    }
}
