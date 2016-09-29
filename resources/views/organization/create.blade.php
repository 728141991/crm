@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增一个组织</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('organization') }}" method="POST">
                        {!! csrf_field() !!}
                         <label>组织名称：</label><input type="text" name="organization_name" class="form-control" required="required" >
                        <br>
                        <label>所在城市：</label><input type="text" name="city" class="form-control" required="required" >
                        <br>
                        <label>相关网站：</label><input type="text" name="website" class="form-control" required="required" >
                        <br>
                        <label>相关电话：</label><input type="text" name="phone" class="form-control" required="required" >
                        <br>
                        <button class="btn btn-lg btn-info">新增组织</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection