<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('message', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ],[
            'name.required' => 'nama wajib di isi',
            'email.email' => 'format email tidak sesuai',
            'email.required' => 'email wajib di isi',
            'subject.required' => 'subject wajib di isi',
            'message.required' => 'message wajib di isi',
        ]);

        Message::create($validated);

        if ($request->ajax()) {
            return response()->json(['message' => 'Pesan berhasil dikirim!']);
        }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
?>