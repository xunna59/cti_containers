<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $allQuotes = Quote::latest()->paginate(4);

        return view('admin/dashboard', ['allQuotes' => $allQuotes]);
    }
}