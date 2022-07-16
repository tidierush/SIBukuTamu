<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\GuestBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GuestBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guestbook.index', [
            'guestBooks' => GuestBook::with('guest')->orderBy('created_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guestbook.create', [
            'guests' => Guest::all(),
        ]);
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
            'guest_id' => ['required', 'numeric'],
            'type' => ['required', 'string'],
            'purpose' => ['required', 'string'],
            'purposeinfo' => ['required', 'string'],
            'file' => ['file', 'max:5120', 'mimes:pdf']
        ])->validate();

        $file = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('guestbook-files');
        }

        GuestBook::create([
            'guest_id' => $input['guest_id'],
            'type' => $input['type'],
            'purpose' => $input['purpose'],
            'purposeinfo' => $input['purposeinfo'],
            'file' => $file,
        ]);

        return to_route('guestBook.index')->with('success', 'Data pencatatan buku tamu baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function show(GuestBook $guestBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestBook $guestBook)
    {
        return view('guestbook.edit', [
            'guests' => Guest::all(),
            'guestBook' => $guestBook
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestBook $guestBook)
    {
        $input = $request->all();

        Validator::make($input, [
            // 'guest_id' => ['required', 'numeric'],
            'type' => ['required', 'string'],
            'purpose' => ['required', 'string'],
            'purposeinfo' => ['required', 'string'],
        ])->validate();

        $file = $guestBook->file;

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('guestbook-files');
            if ($guestBook->file) {
                Storage::delete($guestBook->file);
            }
        }

        $guestBook->forceFill([
            // 'guest_id' => $input['guest_id'],
            'type' => $input['type'],
            'purpose' => $input['purpose'],
            'purposeinfo' => $input['purposeinfo'],
            'file' => $file,
        ])->save();

        return to_route('guestBook.index')->with('success', 'Data buku tamu sudah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestBook $guestBook)
    {
        GuestBook::destroy($guestBook->id);
        return to_route('guestBook.index')->with('success', 'Catatan buku tamu tersebut berhasil dihapus!');
    }
}
