<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use File;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('admin');
  }

  public function index() {
    return view('admin.index');
  }

  public function store(Request $request)
  {
    // dd($request->all());
      $request -> validate([
     'file' => 'required',
     'title' => 'required|string',
     'description' => 'required|string'
      ]);
      $data = $request->all();
      $doc = $request -> file('file');
      $ext = $doc -> getClientOriginalExtension();
      $name = rand(100000,999999). '_' . time();
      $file = $name . '.'. $ext;
      $original_file_name = $request->file('file')->getClientOriginalName();
      $fileStore = $doc -> storeAs('documents', $file ,'public');
      $document = new Document();
      $document -> title = $data['title'];
      $document -> type = $ext;
      $document -> description = $data['description'];
      $document -> url = '/app/public/documents/'.$file;
      if ($ext == 'pptx') {
        $document->logo = 'storage/doc-icons/repository-icon-ppt.png';
      }elseif ($ext == 'pdf') {
        $document->logo = 'storage/doc-icons/repository-icon-pdf.png';
      }else {
        $document->logo = 'storage/doc-icons/repository-icon-doc.png';
      }
        $document->original_name = $original_file_name;
        $document->save();

      return redirect()->back()->with('success', 'Il documento è stato salvato con successo!');
  }

  public function delete($file)
  {
    $document = Document::where('id',$file)->first();
    $documentfile = $document->url;
    // $document->delete();
    // $file = storage_path().$documentfile;
    // dd($file);
    if (File::exists(storage_path($documentfile))) {
      File::delete(storage_path($documentfile));
    }else {
      dd('not');
    }

    return redirect()->back()->with('success', 'Il documento è stato cancellato con successo!');


  }
}
