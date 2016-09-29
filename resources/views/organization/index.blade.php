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
                    <div class="panel-heading">组织管理</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <a href="{{ url('organization/create') }}" class="btn btn-lg btn-primary">新增组织</a>
                        <br>
                        <div class="bottomscroll-div" style="width: 911px">
                            <table class="table table-bordered listViewEntriesTable">
                                <thead>
                                <tr class="listViewHeaders">
                                    <th nowrap><a href="javascript:void(0);" class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="accountname">organization_name&nbsp;</a></th>
                                    <th nowrap><a  class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="bill_city">city&nbsp;&nbsp;</a>
                                    </th>
                                    <th nowrap><a href="javascript:void(0);" class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="website">website&nbsp;&nbsp;</a>
                                    </th>
                                    <th nowrap><a  class="listViewHeaderValues"
                                                  data-nextsortorderval="ASC" data-columnname="phone">phone&nbsp;&nbsp;</a>
                                    </th>
                                    <th nowrap colspan="2"><a href="javascript:void(0);" class="listViewHeaderValues"
                                                              data-nextsortorderval="ASC" data-columnname="smownerid">Operation&nbsp;&nbsp;</a></th>
                                </tr>
                                </thead>
                                @foreach ($organizations as $organization)
                                <tr class="listViewEntries" href="{{ url('campaign/'.$organization->id) }}">
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $organization->organization_name}}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $organization->city }}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $organization->website }}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <p>{{ $organization->phone }}</p>
                                    </td>
                                    <td class="listViewEntryValue medium">
                                        <a href="{{ url('organization/'.$organization->id.'/edit') }}" class="btn btn-success">编辑</a>
                                        <form action="{{ url('organization/'.$organization->id) }}" method="POST" style="display: inline;">
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