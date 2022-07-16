<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Guest;
use App\Models\GuestBook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function guest()
    {
        return view('report.guest', [
            'guests' => Guest::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    public function guestBook()
    {
        return view('report.guestbook', [
            'guestBook' => GuestBook::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    public function feedback()
    {
        return view('report.feedback', [
            'feedback' => Feedback::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    public function performance()
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

        return view('report.performance', [
            'guestChartData' => json_encode($guestChartData),
            'guestBookChartData' => json_encode($guestBookChartData),
            'feedbackChartData' => json_encode($feedbackChartData),
            'guest' => Guest::count(),
            'guestBook' => GuestBook::count(),
            'feedback' => Feedback::count(),
            'feedbackSangatBaik' => Feedback::where('rating', '=', 'Sangat Baik')->count(),
            'feedbackBaik' => Feedback::where('rating', '=', 'Baik')->count(),
            'feedbackCukup' => Feedback::where('rating', '=', 'Cukup')->count(),
            'feedbackKurang' => Feedback::where('rating', '=', 'Kurang')->count(),
            'feedbackSangatKurang' => Feedback::where('rating', '=', 'Sangat Kurang')->count()

        ]);
    }

    public function feedbackPerformance()
    {
        $performanceFeedbackChartData = Feedback::select(DB::raw('date(created_at) as date'), DB::raw('count(*) as total'))
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $performanceFeedbackChartData->map(function ($feedback) {
            return $feedback->date;
        });

        $data = $performanceFeedbackChartData->map(function ($feedback) {
            return $feedback->total;
        });

        $performanceFeedbackChartData = [
            'labels' => $labels,
            'data' => $data
        ];

        return view('report.feedbackperformance', [
            'performanceFeedbackChartData' => json_encode($performanceFeedbackChartData),
            'feedbackSangatBaik' => Feedback::where('rating', '=', 'Sangat Baik')->count(),
            'feedbackBaik' => Feedback::where('rating', '=', 'Baik')->count(),
            'feedbackCukup' => Feedback::where('rating', '=', 'Cukup')->count(),
            'feedbackKurang' => Feedback::where('rating', '=', 'Kurang')->count(),
            'feedbackSangatKurang' => Feedback::where('rating', '=', 'Sangat Kurang')->count()

        ]);
    }
}
