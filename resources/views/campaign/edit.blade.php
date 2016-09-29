@extends('layouts.app')
<style>
    label {
        display: block;
        margin-bottom: 5px;
        color: #333333;
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑活动</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>编辑失败</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ url('campaign/'.$campaign->id) }}" method="POST">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <label>计划名称：</label><input type="text" name="campaign_name"  class="form-control"  required="required" placeholder="请输入计划名称" value="{{ $campaign->campaign_name }}">
                            <br>
                            <label>计划类型：</label><input name="campaign_type"  class="form-control" required="required" placeholder="请输入计划类型" value="{{ $campaign->campaign_type }}" >
                            <br>
                            {{--这里不一定能够成功--}}
                            <label>计划状态：</label>
                            <select placeholder="请输入计划状态" class="form-control"  required="required" name="{{$campaign->campaign_status}}" value="{{ $campaign->campaign_status }}" autofocus="{{$campaign->campaign_status}}">
                                <option value="on" >正在进行</option>
                                <option value="off">已经停止</option>
                            </select>
                            <br>
                            <button class="btn btn-lg btn-info">提交修改</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection