<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
class NotesController extends Controller
{
    public function index()
    {
      $notes = Note::paginate();
      return view('notes/list',compact('notes'));
    }

    public function create()
    {
      return view('notes.create');
    }

    public function store()
    {
      $this->validate(request(),[
        'note'=>['required','max:200']
      ]);
      $data = request()->all();
      Note::create($data);
      return redirect()->to('notes');
    }

    public function show($note)
    {
      $note = Note::findOrFail($note);

      return view('notes/details',compact('note'));
    }
}
