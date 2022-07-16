<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback.index', [
            'feedbacks' => Feedback::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return to_route('feedback.index')->with('success', 'Kritik & Saran berhasil ditambahkan secara manual!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        return view('feedback.edit', [
            'feedback' => $feedback,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedbackRequest  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        $input = $request->all();

        Validator::make($input, [
            'purpose' => ['required'],
            'rating' => ['required'],
            'critics' => ['required'],
            'suggestion' => ['required']
        ])->validate();

        $feedback->forceFill([
            'purpose' => $input['purpose'],
            'rating' => $input['rating'],
            'critics' => $input['critics'],
            'suggestion' => $input['suggestion']
        ])->save();

        return to_route('feedback.index')->with('success', 'Kritik & Saran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        Feedback::destroy($feedback->id);
        return to_route('feedback.index')->with('success', 'Kritik & Saran berhasil dihapus!');
    }
}
