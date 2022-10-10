<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Ticket;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.dashboard', compact('user'));
    }

    public function show()
    {
        $user = Auth::user();
        $data = Ticket::all();

        return view('admin.list', ['user' => $user, 'data' => $data]);
    }

    public function checkin()
    {
        return view('admin.checkin');
    }
}
