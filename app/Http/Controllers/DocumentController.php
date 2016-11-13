<?php
namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\User;
>>>>>>> panshan
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Document;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
class DocumentController extends Controller
{
=======
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
>>>>>>> panshan
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
<<<<<<< HEAD
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);*/
=======
>>>>>>> panshan

        $document = new Document;
        $document->title =$request->input('title');
        $document->folder_name = $request->input('folder_name');
        $document->note = $request->input('note');
        $document->file_name = $request->input('file_name');
<<<<<<< HEAD
        $document->create_time = date_create();
        $document->modified_time = date_create();
        $document->update = $request->input('update');
        $document->assign_to = $request->input('assign_to');


        if ($document->save()) {
            return Redirect::to('');
=======
        $document->created_time = date_create();
        $document->modified_time = date_create();
        $document->update = "";
        $document->assign_to = Auth::id();


        if ($document->save()) {
            return Redirect::to('document/list');
>>>>>>> panshan
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
<<<<<<< HEAD
        return view('Document.edit')->withDocuments(Document::find($id));
=======
        return view('Document.edit')->withDocument(Document::find($id));
>>>>>>> panshan
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
<<<<<<< HEAD
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);
=======
>>>>>>> panshan
        $document = Document::find($id);
        $document->title =$request->input('title');
        $document->folder_name = $request->input('folder_name');
        $document->note = $request->input('note');
        $document->file_name = $request->input('file_name');
<<<<<<< HEAD
        $document->create_time = date_create();
        $document->modified_time = date_create();
        $document->update = $request->input('update');
        $document->assign_to = $request->input('assign_to');

        if ($document->save()) {
            return Redirect::to('');
=======
        //$document->create_time = date_create();
        $document->modified_time = date_create();
        $document->update ="";

        if ($document->save()) {
            return Redirect::to('document/list');
>>>>>>> panshan
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

<<<<<<< HEAD
        return Redirect::to('admin');
=======
        return Redirect::to('document/lsit');
>>>>>>> panshan
    }

}
