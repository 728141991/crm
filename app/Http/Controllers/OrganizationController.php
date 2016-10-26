<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Organization;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
class OrganizationController extends Controller
{
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
      /*  $this->validate($request, [
            'title' => 'required|unique:pages|max:255',
            'body' => 'required',
        ]);*/

        $organization = new Organization;
        $organization->organization_name =$request->name;
        $organization->city = Input::get('city');
        $organization->website = Input::get('website');
        $organization->phone = Input::get('phone');
        $organization->assign_to = Input::get('assign_to');
        $organization->update = Input::get('update');
        if ($organization->save()) {
            return Redirect::to('');
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
        return view('organization.edit')->withOrganization(Organization::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);
        $organization = Organization::find($id);
        $organization->organization_name = Input::get('name');
        $organization->city = Input::get('city');
        $organization->website = Input::get('website');
        $organization->phone= Input::get('phone');
        $organization->assign_to = Input::get('assign_to');
        $organization->update = Input::get('update');

        if ($organization->save()) {
            return Redirect::to('admin');
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
        $organization = Organization::find($id);
        $organization->delete();

        return Redirect::to('admin');
    }

}
