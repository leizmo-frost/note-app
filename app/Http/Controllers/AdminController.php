<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
class AdminController extends Controller
 // Assuming your model name is Note
{
    public function index()
    {
        $notesCountByUser = Note::selectRaw('user_id, count(*) as count')
            ->groupBy('user_id')
            ->get();

        // Fetch data for bar graph (number of users per month)
        $usersCountByMonth = Note::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, count(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        return view('admin', [
            'notesCountByUser' => $notesCountByUser,
            'usersCountByMonth' => $usersCountByMonth
        ]);
    }
}
