<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Note;

class NoteController extends Controller
{
    public function createNote()
    {
        return view("note.create");
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'title' => 'required', 
            'body' => 'required'
        ]);
        
        $note = new Note();
        $note->title = $request->title;
        $note->body = $request->body;
        $note->save();

        Session::flash('success', 'The new route created successfully');

        return redirect()->route('home');
    }

    public function updatePage($id)
    {
        $note = Note::find($id);
        return view('note.update', compact('note'));
    } 

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required', 
            'body' => 'required'
        ]);

        $note = Note::find($request->id);
        $note->title = $request->title;
        $note->body = $request->body;
        $note->save();

        Session::flash('success', 'The route has been updated successfully');
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $note = Note::find($id);
        $note->delete();
        Session::flash('success', 'The route has been deleted successfully');
        return redirect()->route('home');
    }
}
