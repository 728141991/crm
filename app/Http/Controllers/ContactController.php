<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth::user()->id;
       // $contacts=User::find($id)->contacts()->get();
        //$organization_name=DB::table('organizations')->where('organizationId',$contacts->organizationId)->organization_name;
        $contacts=DB::table('contacts')
            ->join('organizations','organizations.organizationId','=','contacts.organizationId')
            ->select('contacts.*','organizations.organization_name')->where('contacts.assign_to','=',$id)
            ->get();

        return view('contact.list',['contacts'=>$contacts]);
      // return view('contact.list')->withContacts(Contact::all());
    }
    public function create()
    {
        return view('contact.create');
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

        $contact = new Contact;
        $contact->first_name =$request->input('first_name');
        $contact->last_name =$request->input('last_name');
        $contact->title =$request->input('title');
        $contact->organizationId = $request->input('organization');
        $contact->email = $request->input('email');
        $contact->office_phone = $request->input('office_phone');
        $contact->update = $request->input('update');
        $contact->assign_to =Auth::user()->id;


        if ($contact->save()) {
            return Redirect::to('contact/list');
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
        return view('contact.edit')->withContact(Contact::find($id));
    }
    public function show($id)
    {
        //return view('contact.show')->withContact(Contact::find($id));
        $id=Auth::user()->id;
        $contacts=User::find($id)->contacts;
        return view('contact.list')->withContacts($contacts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        /*$this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);*/
        $contact = Contact::find($id);
        $contact->first_name =$request->input('first_name');
        $contact->last_name =$request->input('last_name');
        $contact->title =$request->input('title');
        $contact->organizationId = $request->input('organizationId');
        $contact->email = $request->input('email');
        $contact->office_phone = $request->input('office_phone');
       // $contact->update = $request->input('update');
       // $contact->assign_to = $request->input('assign_to');

        if ($contact->save()) {
            return Redirect::to('contact/list');
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
        $contact= Contact::find($id);
        $contact->delete();

        return Redirect::to('/contact');
    }
    public function search(Request $request){
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $title=$request->input('title');
        $office_phone=$request->input('office_phone');
        $organization_name=$request->input('organization_name');
        $organization_id=DB::table('organizations')->where('organization_name',$organization_name)->value('organizationId');
        $contacts=DB::table('contacts')->where('first_name',$first_name)
            ->where('last_name',$last_name)->where('title',$title)
            ->where('office_phone',$office_phone)
            ->where('organizationId',$organization_id)
            ->get();
        return view('/contact/list')->withContacts($contacts);
    }

}
