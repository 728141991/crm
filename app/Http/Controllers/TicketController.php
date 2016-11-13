<?php

namespace App\Http\Controllers;


use App\Ticket;
use App\User;
use App\Contact;
use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

//前端爆肝中

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id=Auth::user()->id;
        $tickets=DB::table('tickets')
            ->select('tickets.*')->where('tickets.assign_to','=',$id);
        return view('ticket.list',['tickets'=>$tickets]);
    }

    public function create()
    {
        return view('ticket.create');
    }

    public function store(Request $request)
    {
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);
        */
        $ticket=new Ticket;
        $ticket->title=$request->input('title');
        $ticket->priority=$request->input('priority');
        $ticket->status=$request->input('status');
        $ticket->severity=$request->input('severity');
        $ticket->ticket_num=$request->input('ticket_num');
        $ticket->description=$request->input('description');
        //Get the real time
        //$ticket->create_time=$request->input(create_time);
        //$ticket->modified_time=$request->input(modified_time);
        $ticket->assign_to=Auth::id();
        //Update
        //假装有
        $ticket->update="";
        //这样写行不行
        //$lead->update="创建票务 ".$request->input(title)." 于 ".$ticket->create_time;

        $organization_name=$request->input('organization_name');
        $contact_name=$request->input('contact_name');
        $organizationId=DB::table('organizations')->where('organization_name',$organization_name)
            ->value('id');
        $contactId=DB::table('contacts')->where('full_name',$contact_name)
            ->value('id');

        //If the organization doesn't exist
        if($organizationId=='') {
            //Create a new organization
            $organization=new Organization;
            $organization->organization_name=$request->input('organization_name');
            $organization->assign_to=Auth::id();
            $organization->city="";
            $organization->website="";
            $organization->phone="";
            $organization->update="";
            $organization->save();

            $organizationId=DB::table('organizations')->where('organization_name',$organization_name)
                ->value('id');
            $ticket->organization_id=$organizationId;
        }
        //If the organization exists
        else{
            $ticket->organization_id=$organizationId;
        }

        //If the organization doesn't exist
        if($contactId=='') {
            //Create a new contact
            $contact=new Contact;
            $contact->assign_to=Auth::id();
            $contact->first_name="";
            $contact->last_name="";
            $contact->full_name=$request->input('contact_name');
            $contact->title="";
            $contact->organization_id="";
            $contact->email="";
            $contact->update="";
            $contact->save();

            $contactId=DB::table('contacts')->where('contact_name',$contact_name)
                ->value('id');
            $ticket->contact_id=$contactId;
        }
        //If the organization exists
        else{
            $ticket->contact_id=$contactId;
        }

        if($ticket->save())
        {   return Redirect::to('ticket/list');  }
        else
        {   return Redirect::back()->withInput()->withErrors('保存失败！');  }
    }

    public function show($id)
    {
        $id=Auth::user()->id;
        $tickets=DB::table('tickets')
            ->leftjoin('organizations','organizations.id','=','tickets.organization_id')
            ->leftjoin('contacts','contacts.id','=','tickets.contact_id')
            ->select('tickets.*','organizations.organization_name','contacts.full_name')
            ->where('contacts.assign_to','=',$id)
            ->get();

        return view('ticket.list')->withTickets($tickets);
    }

    public function edit($id)
    {
        $organizationId=Ticket::find($id)->organization_id;
        $organization_name=DB::table('organizations')
            ->where('id',$organizationId)->value('organization_name');
        $contactId=Ticket::find($id)->organization_id;
        $contact_name=DB::table('contacts')
            ->where('id',$contactId)->value('full_name');

        return view('contact.edit',
            ['contact'=>Contact::find($id),
                'organization_name'=>$organization_name,
                'contact_name'=>$contact_name]
        );
    }

    public function update(Request $request,$id)
    {
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);
        */
        $ticket=Ticket::find($id);
        $ticket->title=$request->input('title');
        $ticket->priority=$request->input('priority');
        $ticket->status=$request->input('status');
        $ticket->severity=$request->input('severity');
        $ticket->ticket_num=$request->input('ticket_num');
        $ticket->description=$request->input('description');
        //Get the real time
        //$ticket->create_time=$request->input(create_time);
        //$ticket->modified_time=$request->input(modified_time);
       // $ticket->assign_to=$request->input(assign_to);
        //Update
        //假装有
        $ticket->update="";
        //这样写行不行
        //$lead->update="创建票务 ".$request->input(title)." 于 ".$ticket->create_time;

        $organization_name=$request->input('organization_name');
        $contact_name=$request->input('contact_name');
        $organizationId=DB::table('organizations')->where('organization_name',$organization_name)
            ->value('id');
        $contactId=DB::table('contacts')->where('full_name',$contact_name)
            ->value('id');

        //If the organization doesn't exist
        if($organizationId=='') {
            //Create a new organization
            $organization=new Organization;
            $organization->organization_name=$request->input('organization_name');
            $organization->assign_to=Auth::id();
            $organization->city="";
            $organization->website="";
            $organization->phone="";
            $organization->update="";
            $organization->save();

            $organizationId=DB::table('organizations')->where('organization_name',$organization_name)
                ->value('id');
            $ticket->organization_id=$organizationId;
        }
        //If the organization exists
        else{
            $ticket->organization_id=$organizationId;
        }

        //If the organization doesn't exist
        if($contactId=='') {
            //Create a new contact
            $contact=new Contact;
            $contact->assign_to=Auth::id();
            $contact->first_name="";
            $contact->last_name="";
            $contact->full_name=$request->input('contact_name');
            $contact->title="";
            $contact->organization_id="";
            $contact->email="";
            $contact->update="";
            $contact->save();

            $contactId=DB::table('contacts')->where('contact_name',$contact_name)
                ->value('id');
            $ticket->contact_id=$contactId;
        }
        //If the organization exists
        else{
            $ticket->contact_id=$contactId;
        }

        if($ticket->save())
        {   return Redirect::to('ticket/list');  }
        else
        {   return Redirect::back()->withInput()->withErrors('保存失败！');  }
    }

    public function destroy(Request $request,$id)
    {
        $ticket=Ticket::find($id);
        $ticket->delete();
        return Redirect::to('/ticket');

    }

    //看完文档记得改成like
    public function search(Request $request)
    {
        $title=$request->input('title');
        $status=$request->input('status');
        $priority=$request->input('priority');
        $contact_name=$request->input('contact_name');
        $organization_name=$request->input('organization_name');
        $organization_id=DB::table('organizations')->where('organization_name',$organization_name)->value('organization_id');
        $contact_id=DB::table('contacts')->where('full_name',$contact_name)->value('contact_id');
        $tickets=DB::table('tickets')->where('title',$title)
            ->where('status',$status)
            ->where('priority',$priority)
            ->where('contact_id',$contact_id)
            ->where('organization_id',$organization_id)
            ->get();
        return view('/ticket/list')->wothTickets($tickets);

    }

}

