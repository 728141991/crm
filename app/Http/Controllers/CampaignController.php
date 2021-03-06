<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth::id();
        $campaigns=User::find($id)->campaigns()->get();
        return view('campaign.list')->withCampaigns($campaigns);
    }
    public function show()
    {
        $id=Auth::id();
        $campaigns=User::find($id)->campaigns()->get();
        return view('campaign.list')->withCampaigns($campaigns);
    }

    public function create()
    {
        return view('campaign.create');
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

        $campaign = new Campaign();
        $campaign->campaign_name =$request->input('campaign_name');
        $campaign->type =$request->input('type');
        $campaign->status = $request->input('status');
        $campaign->budget =$request->input('budget');
        $campaign->value = $request->input('value');
        $campaign->expected_close_data =$request->input('expected_close_data');
        $campaign->assign_to =Auth::id();


        if ($campaign->save()) {
            return Redirect::to('campaign/list');
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
        return view('campaign.edit')->withCampaign(Campaign::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $campaign = Campaign::find($id);
        $campaign->campaign_name =$request->input('campaign_name');
        $campaign->type =$request->input('type');
        $campaign->status = $request->input('status');
        $campaign->budget =$request->input('budget');
        $campaign->value = $request->input('value');
        $campaign->expected_close_data =$request->input('expected_close_data');
        $campaign->assign_to =Auth::id();
        //时间函数？
//        $campaign->modified_time = date_create();
        if ($campaign->save()) {
            return Redirect::to('campaign/list');
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
        $campaign= Campaign::find($id);
        $campaign->delete();

        return Redirect::to('campaign/list');
    }
}
