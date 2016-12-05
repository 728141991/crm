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
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/edit.css')}}">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div id="aaaaa">
    <div class="overlay"></div>
    <div class="overDetail">
        <div>
            <div class="card" id="edit_field_O">
                <div class="edit_item_O">first name
                    <input type="text" placeholder="first name" id="first_name" name="first_name" value="{{$contact->first_name}}" />
                </div>
                <div class="edit_item_O">last name
                    <input type="text" placeholder="last name" id="last_name" name="last_name" value="{{$contact->last_name}}" />
                </div>
                <div class="edit_item_O">title
                    <input type="text" placeholder="title" id="title"name="title"  value="{{$contact->title}}" />
                </div>
                <div class="edit_item_O">email
                    <input type="text" placeholder="email" id="email" name="email" value="{{$contact->email}}" />
                </div>
                <div class="edit_item_O">organization
                    <input type="text" placeholder="organization" id="organization"name="organization_name"  value="{{$organization_name}}" />
                </div>
                <div class="edit_item_O">office phone
                    <input type="text" placeholder="office phone" id="office_phone"name="office_phone" value="{{$contact->office_phone}}" />
                </div>
                <div class="edit_item_O">organzation
                    <input type="text" placeholder="organzation" id="organzation"name="organzation" value="{{$contact->office_phone}}" />
                </div>
            </div>
        </div>
        <button style="width:60px;margin-left:560px" id="overClose" type="submit" class="btn btn-danger del_btn1">关闭</button>


    </div>
</div>
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
<a href="{{url('contact/'.$contact->id.'/add_product/list')}}"></a>
{{--<div class="header_name_edit">--}}
    {{--&nbsp;<i class="material-icons">star</i><a  name="detail">&nbsp;编辑联系人</a>--}}
{{--</div>--}}
{{--<form action="{{ URL('contact/'.$contact->id) }}" method="POST" class="edit_form">--}}
    {{--<div class="card" id="edit_field">--}}
        {{--<div class="edit_item">first name--}}
            {{--<input type="text" placeholder="first name" id="first_name" name="first_name" value="{{$contact->first_name}}" />--}}
        {{--</div>--}}
        {{--<div class="edit_item">last name--}}
            {{--<input type="text" placeholder="last name" id="last_name" name="last_name" value="{{$contact->last_name}}" />--}}
        {{--</div>--}}
        {{--<div class="edit_item">title--}}
            {{--<input type="text" placeholder="title" id="title"name="title"  value="{{$contact->title}}" />--}}
        {{--</div>--}}
        {{--<div class="edit_item">email--}}
            {{--<input type="text" placeholder="email" id="email" name="email" value="{{$contact->email}}" />--}}
        {{--</div>--}}
        {{--<div class="edit_item">organization--}}
            {{--<input type="text" placeholder="organization" id="organization"name="organization_name"  value="{{$organization_name}}" />--}}
        {{--</div>--}}
        {{--<div class="edit_item">office phone--}}
            {{--<input type="text" placeholder="office phone" id="office_phone"name="office_phone" value="{{$contact->office_phone}}" />--}}
        {{--</div>--}}
        {{--<div class="edit_item">organzation--}}
            {{--<input type="text" placeholder="organzation" id="organzation"name="organzation" value="{{$contact->office_phone}}" />--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<input name="_method" type="hidden" value="PUT">--}}
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{--<button style="margin-left:50px;display: inline-block" class="waves-effect waves-light btn sub_btn">提交</button>--}}
    {{--<form action="{{ URL('contact/'.$contact->id) }}" method="POST" style="display: inline;">--}}
        {{--<input name="_method" type="hidden" value="DELETE">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{--<button style="margin:20px;" type="submit" class="btn btn-danger del_btn1">删除</button>--}}
    {{--</form>--}}
{{--</form>--}}
<div class="sidebar">
    <div class="collection">
        <a href="{{url('#detail')}}" class="collection-item">联系人详情</a>
        <a href="{{url('#lead')}}" class="collection-item" id="item_choose">线索</a>
        <a href="{{url('#product')}}" class="collection-item">产品</a>
        <a href="{{url('#organization')}}" class="collection-item">组织</a>
    </div>
</div>

<div class="header_name_edit">
    &nbsp;<i class="material-icons">star</i><a name="lead" id="lead">&nbsp;选择线索</a>
</div>
<div id="detail_item1" class="a_title card-panel">
    <div>last name</div>
    <div>company</div>
    <div>primary phone</div>
    <div>website</div>
    <div>primary email</div>
    <div style="position:relative;top:5px"><input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
        <label for="filled-in-box"></label>
    </div>
</div>
{{--<div class="header_name_edit">--}}
    {{--&nbsp;<i class="material-icons">star</i><a name="product" id="product">&nbsp;选择产品</a>--}}
{{--</div>--}}
{{--<div id="detail_item2" class="a_title card-panel">--}}
    {{--<div>code</div>--}}
    {{--<div>description</div>--}}
    {{--<div>part number</div>--}}
    {{--<div>unit price</div>--}}
    {{--<div>commission rate</div>--}}
    {{--<div>quantity per unit</div>--}}
    {{--<div>weight</div>--}}
    {{--<div>sales start date</div>--}}
    {{--<div>sales end date</div>--}}
    {{--<div style="position:relative;top:5px">--}}
        {{--<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />--}}
        {{--<label for="filled-in-box"></label>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="header_name_edit" >--}}
    {{--&nbsp;<i class="material-icons">star</i><a name="organization" id="organization">&nbsp;选择组织</a>--}}
{{--</div>--}}
{{--<div id="detail_item3" class="a_title card-panel">--}}
    {{--<div>organization name</div>--}}
    {{--<div>city</div>--}}
    {{--<div>website</div>--}}
    {{--<div>phone</div>--}}
    {{--<div style="position:relative;top:5px">--}}
        {{--<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />--}}
        {{--<label for="filled-in-box"></label>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="card card_edit" style="height:400px" >--}}
{{--<button id="chocie-more" style="margin:20px;" type="submit" class="btn btn-danger">选择</button>--}}
{{--
{{--<div>--}}

{{--<div style="margin-left:100px">--}}
{{--<div>--}}

{{--</div>--}}

{{--<div id="detail_item3" style="display: none">--}}
{{--<div class="a_title">--}}
{{--<div class="item_name">organization name</div>--}}
{{--<div>city</div>--}}
{{--<div>website</div>--}}
{{--<div>phone</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<footer>crm系统</footer>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
