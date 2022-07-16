<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function feedback()
    {
        return view('public.feedback');
    }

    public function storeFeedback(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'purpose' => ['required'],
            'rating' => ['required',],
            'critics' => ['required'],
            'suggestion' => ['required']
        ])->validate();

        Feedback::create([
            'purpose' => $input['purpose'],
            'rating' => $input['rating'],
            'critics' => $input['critics'],
            'suggestion' => $input['suggestion']
        ]);

        return to_route('public.doneStoreFeedback')->with('success', 'Kritik & Saran berhasil ditambahkan! Terima kasih telah membantu Kantor kami dalam meningkatkan performa kami.');
    }

    public function doneStoreFeedback()
    {
        return view('public.doneStoreFeedback');
    }
}
