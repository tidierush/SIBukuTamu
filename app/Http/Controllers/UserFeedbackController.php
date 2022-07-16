<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Feedback;

class UserFeedbackController extends Controller

{
    public function create()
    {
        return view('foruser.feedback');
    }

    public function store(Request $request)
    {
        
    }
}

