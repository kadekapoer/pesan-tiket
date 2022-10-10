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
        $data = Ticket::all();
        $belum_ditukar = Ticket::where('status','0')->get();
        $sudah_ditukar = Ticket::where('status','1')->get();

        return view('admin.dashboard', [
            'data' => $data,
            'belum_ditukar' => $belum_ditukar,
            'sudah_ditukar' => $sudah_ditukar,
        ]);
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

    public function ticket_check(Request $request)
    {
    
        $data = Ticket::where('code', $request->code);

        if($data->exists()){
            if(Ticket::where('code', $request->code)->where('status', '0')->first()){
                $tiket = Ticket::where('code', $request->code);
                $tiket->update(['status' => '1']);
                return view('admin.update-status');
            } else {
                return view('admin.sudah-terpakai');
            }
        } else {
            return view('admin.tidak-valid');
        }

    }
}
