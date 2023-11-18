<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;

class PostController extends Controller
{
    public function index(){
        $users = User::all();

    // Renderiza la vista principal y pasa la variable $users
    return view('principal', compact('users'));
    }

    public function actualizar($id)
    {
        $users = User::findOrFail($id);
        return view('actualizar', compact('users'));
    }

    public function update(Request $request,$id)
    {
        $users = User::find($id);
        $this->validate($request,[
            "name" => 'required|max:30',
            "username" => 'required|min:3|max:50',
            "telefono" => 'required|string|min:3|max:20',
            "direccion" => 'required|max:60',
            "email" => 'required|email|max:60',
        ]);

        $users->update($request->all());
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('post.index');
    }

    public function export_user_pdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('pdf', ['users' => $users]);
        return $pdf->stream('pdf.pdf');
    }

    public function export_user($id)
    {
        $users = User::find($id);
        $pdf = PDF::loadView('pdfu', ['users' => $users]);
        return $pdf->stream('pdf.pdf');
    }
}
