<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Guest;
use App\Models\GuestBook;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $guestBookChartData = GuestBook::select(DB::raw('date(created_at) as date'), DB::raw('count(*) as total'))
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $guestBookChartData->map(function ($guestBook) {
            return $guestBook->date;
        });

        $data = $guestBookChartData->map(function ($guestBook) {
            return $guestBook->total;
        });

        $guestBookChartData = [
            'labels' => $labels,
            'data' => $data
        ];

        $guestChartData = Guest::select(DB::raw('date(created_at) as date'), DB::raw('count(*) as total'))
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $guestChartData->map(function ($guest) {
            return $guest->date;
        });

        $data = $guestChartData->map(function ($guest) {
            return $guest->total;
        });

        $guestChartData = [
            'labels' => $labels,
            'data' => $data
        ];

        $feedbackChartData = Feedback::select(DB::raw('date(created_at) as date'), DB::raw('count(*) as total'))
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $feedbackChartData->map(function ($feedback) {
            return $feedback->date;
        });

        $data = $feedbackChartData->map(function ($feedback) {
            return $feedback->total;
        });

        $feedbackChartData = [
            'labels' => $labels,
            'data' => $data
        ];

        return view('home.index', [
            'guestChartData' => json_encode($guestChartData),
            'guestBookChartData' => json_encode($guestBookChartData),
            'feedbackChartData' => json_encode($feedbackChartData),
            
        ]);
    }
}
