<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Organization;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $id=Auth::id();
         $organizations=User::find($id)->organizations()->get();
        return view('organization.list')->withOrganizations($organizations);
    }
    public function show()
    {
        $id=Auth::id();
        $organizations=User::find($id)->organizations()->get();
        return view('organization.list')->withOrganizations($organizations);
    }
    public function create()
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $organization = new Organization;
        $organization->organization_name =$request->input('organization_name');
        $organization->city = Input::get('city');
        $organization->website = Input::get('website');
        $organization->email = Input::get('email');
        $organization->relationship = Input::get('relationship');
        $organization->phone = Input::get('phone');
        $organization->assign_to = Auth::id();
        $organization->address = Input::get('address');
        $organization->update ="";
        if ($organization->save()) {
            return Redirect::to('organization/list');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $organization=DB::table('organizations')->where('id',$id)->first();
        return view('organization.edit')->withOrganization($organization);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {

        $organization=DB::table('organizations')->where('id',$id)
            ->update(['organization_name'=>$request->input('organization_name'),'phone'=>$request->input('phone'),'city'=>$request->input('city'),'website'=>$request->input('website')]);

        $organization = Organization::find($id);
        $organization->organization_name =$request->input('organization_name');
        $organization->city = Input::get('city');
        $organization->website = Input::get('website');
        $organization->email = Input::get('email');
        $organization->relationship = Input::get('relationship');
        $organization->phone = Input::get('phone');
        $organization->assign_to = Auth::id();
        $organization->address = Input::get('address');
        $organization->update ="";
        if ($organization->save()) {
            return Redirect::to('organization/list');
      } else {
         return Redirect::back()->withInput()->withErrors('保存失败！');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        DB::table('organizations')->where('id',$id)->delete();
        return Redirect::to('organization/list');
    }

}
