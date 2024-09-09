<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // You can pass data to the view if needed
        // For example, some statistics, user data, etc.
        $data = [
            'userCount' => 150, // Example data
            'recentActivities' => [
                'Logged in',
                'Viewed dashboard',
                'Checked notifications',
            ],
        ];

        return view('dashboard.index', $data);
    }
}
