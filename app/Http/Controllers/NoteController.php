<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

use App\Imports\NotesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Helpers\LinoHelper;

class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',[ 'except' => ['index', 'view'] ]);
    }
    
    //
    public function import() 
    {
        Excel::import(new NotesImport, 'notes.csv');
        
        return redirect('/')->with('success', 'All good!');
    }
    
    public function index(){
      $notes = Note::all();
      //dump(LinoHelper::getWords($notes, 10));
      //return $notes;   // return json in frontend...

      return view('note/index', ['notes'=>$notes]);
    }
    
    public function view($slug){
      $note = Note::where('slug', 'like', $slug)->firstOrFail();
      //return $note;   // return json in frontend...

      return view('note/view', ['slug' => $slug, 'note'=>$note]);
    }
    
    public function admin_edit(Note $note){
      //$note = Note::findOrFail($note);
      //return $note;   // return json in frontend...

      return view('note/edit', ['note'=>$note]);
    }
    
    public function admin_update(Note $note){
      //return $note;
      request()->validate([
        'title' => 'required',
        'body' => 'required'
      ]);
      
      $note->title = request('title');
      $note->body = request('body');
      $note->save();

      return redirect()->route('note.view', [$note]);
    }
    
}
