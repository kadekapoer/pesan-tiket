<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class UserController extends Controller
{
    public function index()
    {
        return view('user.welcome');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'email' => ['email','unique:tickets,email']
        ]);

        $name = $request->name;
        $email = $request->email;

        $data = Ticket::create([
            'name' => $name,
            'email' => $email,
            'code' => 'TICKET' . time()
        ]);

        return view('user.success', ['data' => $data]);
    }


}
