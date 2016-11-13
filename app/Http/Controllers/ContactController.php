<?php

namespace App\Http\Controllers;

use App\Product;
use App\Organization;
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
        $contacts=DB::table('contacts')
            ->leftjoin('organizations','organizations.id','=','contacts.organization_id')
            ->select('contacts.*','organizations.organization_name')->where('contacts.assign_to','=',$id)
            ->get();

        return view('contact.list',['contacts'=>$contacts]);

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
        $contact = new Contact;
        $contact->first_name =$request->input('first_name');
        $contact->last_name =$request->input('last_name');
        $full_name=$request->input('first_name')." ".$request->input('last_name');
        $contact->full_name =$full_name;
        $contact->title =$request->input('title');
        $contact->email = $request->input('email');
        $contact->office_phone = $request->input('office_phone');
        $contact->update ="";

        $organizationId=DB::table('organizations')->where('organization_name', $request->input('organization_name'))
        ->value('id');
        if($organizationId!='')
        {
            $contact->organization_id =$organizationId;
            $contact->assign_to =Auth::user()->id;


            if ($contact->save()) {
                return Redirect::to('contact/list');
            } else {
                return Redirect::back()->withInput()->withErrors('保存失败！');
            }
        }
       else{
           $organization=new Organization;
           $organization->organization_name=$request->input('organization_name');
           $organization->city = "";
           $organization->website = "";
           $organization->phone ="";
           $organization->update ="";
           $organization->assign_to=Auth::id();
           $organization->save();
           $organization_Id=DB::table('organizations')->where('organization_name', $request->input('organization_name'))
               ->value('id');
           $contact->organization_id =$organization_Id;
           $contact->assign_to =Auth::user()->id;


           if ($contact->save()) {
               return Redirect::to('contact/list');
           } else {
               return Redirect::back()->withInput()->withErrors('保存失败！');
           }
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
        $organizationId=Contact::find($id)->organization_id;
        $organization_name=DB::table('organizations')
            ->where('id',$organizationId)->value('organization_name');
        return view('contact.edit',['contact'=>Contact::find($id),'organization_name'=>$organization_name]);
    }
    public function show()
    {
        $id=Auth::user()->id;
        $contacts=DB::table('contacts')
            ->leftjoin('organizations','organizations.id','=','contacts.organization_id')
            ->select('contacts.*','organizations.organization_name')->where('contacts.assign_to','=',$id)
            ->get();
        return view('contact.list',['contacts'=>$contacts]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $organization_id=DB::table('organizations')->where('organization_name',$request->input('organization_name'))
           ->value('id');
        $contact = Contact::find($id);
        $contact->first_name =$request->input('first_name');
        $contact->last_name =$request->input('last_name');
        $full_name=$request->input('first_name')." ".$request->input('last_name');
        $contact->full_name =$full_name;
        $contact->title =$request->input('title');
        $contact->email = $request->input('email');
        $contact->office_phone = $request->input('office_phone');
        if($organization_id!='')
        {
            $contact->organization_id =$organization_id ;
        }
        else{
            $organization=new Organization;
            $organization->organization_name=$request->input('organization_name');
            $organization->city = "";
            $organization->website = "";
            $organization->phone ="";
            $organization->assign_to=Auth::id();
            $organization->save();
            $organization_id=DB::table('organizations')->where('organization_name',$request->input('organization_name'))
                ->value('id');
            $contact->organization_id =$organization_id ;
        }
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
        $organization_id=DB::table('organizations')->where('organization_name',$organization_name)->value('id');
        $contacts=DB::table('contacts')->where('first_name',$first_name)
            ->where('last_name',$last_name)->where('title',$title)
            ->where('office_phone',$office_phone)
            ->where('organization_id',$organization_id)
            ->get();
        return view('/contact/list')->withContacts($contacts);
    }
    public function list_product($id){
        $products=Contact::find($id)->products()->get();
        return view('contact/product/list',['contact'=>Contact::find($id),'products'=>$products]);
    }
    public function edit_product($id){
        $products=User::find(Auth::id())->products()->get();
        return view('contact/product/edit',['contact'=>Contact::find($id),'products'=>$products]);
    }
    public function save_product(Request $request,$id){
        $products=User::find(Auth::id())->products()->get();
        return view('contact/product/edit',['contact'=>Contact::find($id),'products'=>$products]);
    }

}
