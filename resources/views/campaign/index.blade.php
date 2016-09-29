@extends('layouts.app')
<style>
    .bottomscroll-div, .topscroll-div {
        display: table;
        min-width: 100%;
    }

    .fa-btn {
        margin-right: 6px;
    }
    thead {
        display: table-header-group;
        vertical-align: middle;
        border-color: inherit;
    }
    .listViewHeaders a.listViewHeaderValues {
        color: #444444;
    }
    .table-bordered {
        border-radius: 1px;
        margin-bottom: 0;
    }
    .medium, .table td.medium, .listViewEntries td.medium, td.listViewEntryValue.medium {
        padding: 5px 6px!important;
    }
    tr {
        display: table-row;
        vertical-align: inherit;
        border-color: inherit;
    }
</style>
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">计划管理</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <a href="{{ url('campaign/create') }}" class="btn btn-lg btn-primary">新增计划</a>
                        <br>
                        <div class="bottomscroll-div" style="width: 911px">
                            <table class="table table-bordered listViewEntriesTable">
                                <thead>
                                <tr class="listViewHeaders">
                                    <th nowrap><a href="javascript:void(0);" class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="accountname">Campaign
                                            Name&nbsp;&nbsp;</a></th>
                                    <th nowrap><a  class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="bill_city">Campaign type&nbsp;&nbsp;</a>
                                    </th>
                                    <th nowrap><a href="javascript:void(0);" class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="website">Campaign status&nbsp;&nbsp;</a>
                                    </th>
                                    <th nowrap><a  class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="phone">Created timee&nbsp;&nbsp;</a>
                                    </th>
                                    <th nowrap colspan="2"><a href="javascript:void(0);" class="listViewHeaderValues"
                                                              data-nextsortorderval="ASC" data-columnname="smownerid">Assigned
                                            To&nbsp;&nbsp;</a></th>
                                </tr>
                                </thead>
                                @foreach ($campaigns as $campaign)
                                <tr class="listViewEntries" href="{{ url('campaign/'.$campaign->id) }}">
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $campaign->campaign_name}}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $campaign->campaign_type }}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $campaign->campaign_status }}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $campaign->created_time }}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <a href="{{ url('campaign/'.$campaign->id.'/edit') }}" class="btn btn-success">编辑</a>
                                        <form action="{{ url('campaign/'.$campaign->id) }}" method="POST" style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                        {{--@foreach ($campaigns as $campaign)--}}
                            {{--<li style="margin: 50px 0;">--}}
                                {{--<div class="title">--}}
                                    {{--<a href="{{ url('campaign/'.$campaign->id) }}">--}}
                                        {{--<h4>{{ $campaign->campaign_name}}</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="body">--}}
                                    {{--<a>计划类型</a>--}}
                                    {{--<p>{{ $campaign->campaign_type }}</p>--}}
                                    {{--<a>计划状态</a>--}}
                                    {{--<p>{{ $campaign->campaign_status }}</p>--}}
                                    {{--<a>创建时间</a>--}}
                                    {{--<p>{{ $campaign->created_time }}</p>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<a href="{{ url('campaign/'.$campaign->id.'/edit') }}" class="btn btn-success">编辑</a>--}}
                            {{--<form action="{{ url('campaign/'.$campaign->id) }}" method="POST" style="display: inline;">--}}
                                {{--{{ method_field('DELETE') }}--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<button type="submit" class="btn btn-danger">删除</button>--}}
                            {{--</form>--}}
                        {{--@endforeach--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection