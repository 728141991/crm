<!DOCTYPE html>
<html lang="en">

<head>
    <style>
       #item_choose{
            background-color: #ddd;
        }
    </style>
    <meta charset="UTF-8">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/edit.css')}}">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<header>
    <div id="head_icon">icon</div>
    <a class="head_tag" href="{{url('/home')}}">主页</a>
    <a id="contact" class="head_tag choose" href="{{url('/contact')}}">联系人</a>
    <a class="head_tag" href="{{url('/organization')}}">组织</a>
    <a class="head_tag" href="{{url('/lead')}}">线索</a>
    <a class="head_tag" href="{{url('/product')}}">产品</a>
    <a class="head_tag" href="{{url('/campaign')}}">计划</a>
    <a class="head_tag" href="{{url('/opportunity')}}">机会</a>
    <a class="head_tag" href="{{url('/activity')}}">备忘录</a>
    <a class="head_tag" href="{{url('/document')}}">文件</a>
    <a class="head_tag" href="{{url('/ticket')}}">票务</a>
</header>

<div class="header_name_edit">
    &nbsp;<i class="material-icons">star</i><div  name="detail">&nbsp;编辑联系人</div>
</div>
<form action="{{ URL('contact/'.$contact->id) }}" method="POST" class="edit_form">
    <div class="card" id="edit_field">
        <div class="edit_item">first name
            <input type="text" placeholder="first name" id="first_name" name="first_name" value="{{$contact->first_name}}" />
        </div>
        <div class="edit_item">last name
            <input type="text" placeholder="last name" id="last_name" name="last_name" value="{{$contact->last_name}}" />
        </div>
        <div class="edit_item">title
            <input type="text" placeholder="title" id="title"name="title"  value="{{$contact->title}}" />
        </div>
        <div class="edit_item">email
            <input type="text" placeholder="email" id="email" name="email" value="{{$contact->email}}" />
        </div>
        <div class="edit_item">organization
           <input type="text" placeholder="organization" id="organization"name="organization_name"  value="{{$organization_name}}" />
        </div>
        <div class="edit_item">office phone
            <input type="text" placeholder="office phone" id="office_phone"name="office_phone" value="{{$contact->office_phone}}" />
        </div>
        <div class="edit_item">organzation
            <input type="text" placeholder="organzation" id="organzation"name="organzation" value="{{$contact->office_phone}}" />
        </div>

</div>
    <input name="_method" type="hidden" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button style="margin-left:50px;display: inline-block" class="waves-effect waves-light btn sub_btn">提交</button>
    <form action="{{ URL('contact/'.$contact->id) }}" method="POST" style="display: inline;">
        <input name="_method" type="hidden" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button style="margin:20px;" type="submit" class="btn btn-danger del_btn1">删除</button>
    </form>
</form>
<div class="sidebar">
    <div class="collection">
        <a href="{{url('contact/'.$contact->id.'/edit')}}" class="collection-item" id="item_choose">联系人详情</a>
        <a href="{{url('contact/'.$contact->id.'/edit-lead')}}" class="collection-item">线索</a>
        <a href="{{url('contact/'.$contact->id.'/add_product/list')}}" class="collection-item">产品</a>
        <a href="{{url('contact/'.$contact->id.'/edit')}}" class="collection-item">组织</a>
    </div>
</div>

<footer>crm系统</footer>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
