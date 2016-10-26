<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Document;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
class DocumentController extends Controller
{
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
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);*/

        $document = new Document;
        $document->title =$request->input('title');
        $document->folder_name = $request->input('folder_name');
        $document->note = $request->input('note');
        $document->file_name = $request->input('file_name');
        $document->create_time = date_create();
        $document->modified_time = date_create();
        $document->update = $request->input('update');
        $document->assign_to = $request->input('assign_to');


        if ($document->save()) {
            return Redirect::to('');
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
        return view('Document.edit')->withDocuments(Document::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);
        $document = Document::find($id);
        $document->title =$request->input('title');
        $document->folder_name = $request->input('folder_name');
        $document->note = $request->input('note');
        $document->file_name = $request->input('file_name');
        $document->create_time = date_create();
        $document->modified_time = date_create();
        $document->update = $request->input('update');
        $document->assign_to = $request->input('assign_to');

        if ($document->save()) {
            return Redirect::to('');
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

        return Redirect::to('admin');
    }

}
