<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/edit.css')}}">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
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
<form action="{{ URL('contact') }}" method="POST">

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
</body>

</html>
