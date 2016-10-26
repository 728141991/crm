<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Activity;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
class ActivityController extends Controller
{
    public function create()
    {
        return view('activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        /*  $this->validate($request, [
              'title' => 'requdateired|unique:pages|max:255',
              'body' => 'required',
          ]);*/

        $activity = new Activity;
        $activity->activity_type =$request->input('type');
        $activity->subject = $request->input('subject');
        $activity->start_date = $request->input('start_date');
        $activity->end_date = $request->input('end_date');
        $activity->status = $request->input('status');
        $activity->send_notification = $request->input('notification');
        $activity->location = $request->input('location');
        $activity->priority = $request->input('priority');
        $activity->visibility = $request->input('visibility');
        $activity->contactId = $request->input('contact_id');
        $activity->related_to_id = $request->input('related_to_id');
        $activity->related_to_type = $request->input('related_to_type');
        $activity->description = $request->input('description');
       //时间函数？
        $activity->modified_time = date_create();
        $activity->created_time = $request->input('created-time');

        $activity->update = $request->input('update');
        $activity->assign_to = $request->input('assign_to');


        if ($activity->save()) {
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
        return view('activity.edit')->withActivity(Activity::find($id));
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
        $activity = Activity::find($id);
        $activity->activity_type =$request->input('type');
        $activity->subject = $request->input('subject');
        $activity->start_date = $request->input('start_date');
        $activity->end_date = $request->input('end_date');
        $activity->status = $request->input('status');
        $activity->send_notification = $request->input('notification');
        $activity->location = $request->input('location');
        $activity->priority = $request->input('priority');
        $activity->visibility = $request->input('visibility');
        $activity->contactId = $request->input('contact_id');
        $activity->related_to_id = $request->input('related_to_id');
        $activity->related_to_type = $request->input('related_to_type');
        $activity->description = $request->input('description');
        //时间函数？
        $activity->modified_time = date_create();

        $activity->update = $request->input('update');
        $activity->assign_to = $request->input('assign_to');

        if ($activity->save()) {
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
        $activity= Activity::find($id);
        $activity->delete();

        return Redirect::to('admin');
    }

}
