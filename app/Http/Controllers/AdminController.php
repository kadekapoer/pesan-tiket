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

    public function edit($id)
    {
        $data = Ticket::findOrFail($id);

        return view('admin._form-edit-list', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;
        $email = $request->email;

        $data = Ticket::findOrFail($id);

        $data->update([
            'name' => $name,
            'email' => $email
        ]);

        return redirect('/admin/list');
    }

    public function destroy($id)
    {
        $data = Ticket::findOrFail($id);
        $data->delete();
        return redirect('/admin/list');
    }
}
