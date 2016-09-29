@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增一个计划</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('campaign') }}" method="POST">
                        {!! csrf_field() !!}
                        <label>计划名称：</label><input type="text" name="campaign_name" class="form-control" required="required" placeholder="请输入计划名称">
                        <br>
                        <label>计划类型：</label><input type="text" name="campaign_status" class="form-control" required="required" placeholder="请输入计划状态">
                        <br>
                        <label>计划状态：</label><input type="text" name="campaign_type" class="form-control" required="required" placeholder="请输入计划类型">
                        <br>
                        <button class="btn btn-lg btn-info">新增计划</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection