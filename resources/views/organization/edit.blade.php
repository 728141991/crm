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
                    <div class="panel-heading">编辑组织</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>编辑失败</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ url('organization/'.$organization->id) }}" method="POST">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <label>组织名称：</label><input type="text" name="organization_name" class="form-control" required="required" value="{{$organization->organization_name}}">
                            <br>
                            <label>所在城市：</label><input type="text" name="city" class="form-control" required="required" value="{{$organization->city}}" >
                            <br>
                            <label>相关网站：</label><input type="text" name="website" class="form-control" required="required" value="{{$organization->website}}">
                            <br>
                            <label>相关电话：</label><input type="text" name="phone" class="form-control" required="required" value="{{$organization->phone}}">
                            <br>
                            <button class="btn btn-lg btn-info">提交修改</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection