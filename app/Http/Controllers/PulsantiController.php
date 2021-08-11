<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use Storage;
class PulsantiController extends Controller
{
    public function indexScenari() {
      return view('pulsantihome.scenari');
    }

    public function indexRepository() {
      $documents = Document::all();
      return view('pulsantihome.repository',compact('documents'));
    }

    public function scenario1() {
      return view('storyboards.storyboard1');
    }
    public function scenario2() {
      return view('storyboards.storyboard2');
    }
    public function scenario3() {
      return view('storyboards.storyboard3');
    }

    public function download($file)
    {
      $document = Document::where('id',$file)->first(); 
      $documentfile = $document->url;
      $file = public_path().$documentfile;

      return response()->download(storage_path($documentfile));

    }
}
