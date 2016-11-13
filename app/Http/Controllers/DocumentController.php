<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Document;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth::user()->id;
        $documents=User::find($id)->documents()->get();

        return view('document.list',['documents'=>$documents]);

    }
    public function show()
    {
        $id=Auth::user()->id;
        $documents=User::find($id)->documents()->get();

        return view('document.list',['documents'=>$documents]);

    }
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $document = new Document;
        $document->title =$request->input('title');
        $document->folder_name = $request->input('folder_name');
        $document->note = $request->input('note');
        $document->file_name = $request->input('file_name');
        $document->created_time = date_create();
        $document->modified_time = date_create();
        $document->update = "";
        $document->assign_to = Auth::id();


        if ($document->save()) {
            return Redirect::to('document/list');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Document.edit')->withDocument(Document::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $document = Document::find($id);
        $document->title =$request->input('title');
        $document->folder_name = $request->input('folder_name');
        $document->note = $request->input('note');
        $document->file_name = $request->input('file_name');
        //$document->create_time = date_create();
        $document->modified_time = date_create();
        $document->update ="";

        if ($document->save()) {
            return Redirect::to('document/list');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document= Document::find($id);
        $document->delete();

        return Redirect::to('document/lsit');
    }

}
