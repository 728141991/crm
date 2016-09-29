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

                        <form action="{{ url('contact/'.$contact->id) }}" method="POST">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <label>姓：</label><input type="text" name="first_name" class="form-control" required="required" value="{{$contact->first_name}}" >
                            <br>
                            <label>名：</label><input type="text" name="last_name" class="form-control" required="required" value="{{$contact->last_name}}">
                            <br>
                            <label>头衔：</label><input type="text" name="title" class="form-control" required="required" value="{{$contact->title}}">
                            <br>
                            <label>相关组织id：</label><input type="text" name="organization_id" class="form-control" required="required" value="{{$contact->organization_id}}">
                            <br>
                            <label>邮件：</label><input type="text" name="email" class="form-control" required="required" value="{{$contact->email}}">
                            <br>
                            <label>电话：</label><input type="text" name="office_phone" class="form-control" required="required" value="{{$contact->office_phone}}">
                            <br>
                            <button class="btn btn-lg btn-info">提交修改</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection