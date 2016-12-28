<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #create_form{
            position: relative;
            top: 20px;
            left: 290px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Contact</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/crm/public/materialize/css/materialize.css">
    <link rel="stylesheet" href="/crm/public/css/edit.css">
=======
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/edit.css')}}">
>>>>>>> panshan
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<<<<<<< HEAD
<div>展示 插入数据后可以</div>
<div class="edit_item">
    <span type="text" id="first_namex">test</span>
</div>
<div class="edit_item">
    <span type="text" id="campagin_typex"></span>
</div>
<div class="edit_item">
    <span type="text" id="campagin_statusx"></span>
</div>
<div class="edit_item">
    <span type="text" id="campagin_namex"></span>
</div>
<div class="edit_item">
    <span type="text" id="created_timex"></span>
</div>
<div class="edit_item">
    <span type="text" id="modified_timex"></span>
</div>
<div class="edit_item">
    <span type="text" id="target_audiencex"></span>
</div>
<div class="edit_item">
    <span type="text" id="expected_close_datax"></span>
</div>
<div class="edit_item">
    <span type="text" id="producr_idx"></span>
</div>
<div class="edit_item">
    <span type="text" id="num_userx" ></span>
</div>
<div class="edit_item">
    <span type="text" id="budget_costx"></span>
</div>
<div class="edit_item">
    <span type="text" id="actual_costx"></span>
</div>
<div class="edit_item">
    <span type="text" id="expected_responsex"></span>
</div>
<div class="edit_item">
    <span type="text" id="expected_revenuex"></span>
</div>
<div class="edit_item">
    <span type="text" id="expected_roix"></span>
</div>
<div class="edit_item">
    <span type="text" id="actual_roix"></span>
</div>
<div class="edit_item">
    <span type="text" id="updatex"></span>
</div>
<div class="edit_item">
    <span type="text" id="assign_tox"></span>
</div>

<form action="{{ URL('contact') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button id="edit_sub" >提交点我提交</button>
    <div id="edit_field">
        <div class="edit_item">
            <p>first_name:</p> <input type="text" id="first_name" name="first_name" />
        </div>
        <div class="edit_item">
            <p>last_name:</p>  <input type="text" id="last_name" name="last_name"  />
        </div>
        <div class="edit_item">
            <p>title:</p> <input type="text" id="title"name="title"   />
        </div>
        <div class="edit_item">
            <p>email:</p> <input type="text" id="email" name="email"/>
        </div>
        <div class="edit_item">
            <p>organization:</p> <input type="text" id="organization"name="organization"   />
        </div>
        <div class="edit_item">
            <p>office_phone:</p> <input type="text" id="office_phone"name="office_phone"  />
        </div>

    </div>
</form>

<div>编辑</div>


<script type="text/javascript" src="/crm/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/crm/public/materialize/js/materialize.js"></script>
<script type="text/javascript" src="/crm/public/js/edit.js"></script>
=======
<header>
    <div id="head_icon">icon</div>
    <a class="head_tag" href="{{url('/home')}}">主页</a>
    <a class="head_tag" id="contact" href="{{url('/contact')}}">联系人</a>
    <a class="head_tag" href="{{url('/organization')}}">组织</a>
    <a class="head_tag" href="{{url('/lead')}}">领导</a>
    <a class="head_tag" href="{{url('/product')}}">产品</a>
    <a class="head_tag" href="{{url('/campaign')}}">计划</a>
    <a class="head_tag" href="{{url('/opportunity')}}">机会</a>
    <a class="head_tag" href="{{url('/activity')}}">备忘录</a>
    <a class="head_tag" href="{{url('/document')}}">文件</a>
    <a class="head_tag" href="{{url('/ticket')}}">票务</a>
</header>
<div class="header_name_edit">
    &nbsp;<i class="material-icons">star</i><span>&nbsp;创建新联系人</span>
</div>
<form action="{{ URL('contact') }}" method="POST" id="create_form">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="edit_field" class="card">
        <div class="edit_item">
            <input type="text" id="first_name" name="first_name" placeholder="first name"/>
        </div>
        <div class="edit_item">
            <input type="text" id="last_name" name="last_name" placeholder="last name"/>
        </div>
        <div class="edit_item">
            <input type="text" id="title"name="title"  placeholder="title"/>
        </div>
        <div class="edit_item">
            <input type="text" id="email" name="email" placeholder="email"/>
        </div>

        <div class="edit_item">
            <input type="text" id="organization"name="organization_name" placeholder="organization"/>
        </div>
        <div class="edit_item">
          <input type="text" id="office_phone"name="office_phone" placeholder="office phone"/>
        </div>
        <button class="waves-effect waves-light btn sub_btn">点击提交</button>

</div>
</form>
<footer>crm系统</footer>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/edit.js')}}"></script>
>>>>>>> panshan
</body>

</html>
