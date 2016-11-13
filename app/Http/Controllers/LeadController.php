<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Lead;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


//天国的前端

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id=Auth::user()->id;
        $leads=DB::table('leads')
            ->select('leads.*')->where('leads.assign_to','=',$id)
            ->get();

        return view('lead.list',['leads'=>$leads]);
    }
    public function show()
    {
        $id=Auth::user()->id;
        $leads=DB::table('leads')
            ->select('leads.*')->where('leads.assign_to','=',$id)
            ->get();

        return view('lead.list',['leads'=>$leads]);
    }
    public function create()
    {
        return view('lead.create');
    }

    public function edit($id)
    {

        $lead=Lead::find($id);
        return view('lead/edit')->withLead($lead);
    }

    //URL:
    public function store(Request $request)
    {
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);
        */
        $lead=new Lead;
        $lead->first_name=$request->input('first_name');
        $lead->last_name=$request->input('last_name');
        $lead->company=$request->input('company');
        $lead->primary_phone=$request->input('primary_phone');
        $lead->website=$request->input('website');
        $lead->primary_email=$request->input('primary_email');
        $lead->assign_to=Auth::id();
        $lead->update="";
        //Update
        //这样写行不行
        //少个时间函数
        //$lead->update="创建领导 ".$request->input(first_name)." ".$request->input(last_name);

        if($lead->save())
        {   return Redirect::to('lead/list');  }
        else
        {   return Redirect::back()->withInput()->withErrors('保存失败！');  }
    }

    public function update(Request $request,$id)
    {
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);
        */
        $lead=Lead::find($id);
        //Update
        $lead->first_name=$request->input('first_name');
        $lead->last_name=$request->input('last_name');
        $lead->company=$request->input('company');
        $lead->primary_phone=$request->input('primary_phone');
        $lead->website=$request->input('website');
        $lead->primary_email=$request->input('primary_email');
        //这样写行不行
        //少个时间函数
        //$lead->update="更新领导 ".$request->input(first_name)." ".$request->input(last_name);
        if($lead->save())
        {   return Redirect::to('lead/list');  }
        else
        {   return Redirect::back()->withInput()->withErrors('保存失败！');  }
    }

    public function destroy(Request $request,$id)
    {
        $lead=Lead::find($id);
        $lead->delete();
        return Redirect::to('/lead');
    }

    public function search(Request $request)
    {
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $company=$request->input('company');
        $primary_phone=$request->input('primary_phone');
        $website=$request->input('website');
        $primary_email=$request->input('primary_email');
        $assign_to=Auth::id();

        //Search
        $leads=DB::table('leads')->where('first_name',$first_name)
            ->where('last_name',$last_name)
            ->where('company',$company)
            ->where('primary_phone',$primary_phone)
            ->where('website',$website)
            ->where('primary_email',$primary_email)
            ->where('assign_to',$assign_to)
            ->get();
        return view('/lead/list')->withLeads($leads);

    }
}

