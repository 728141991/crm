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
    <a class="head_tag" href="{{url('/contact')}}">联系人</a>
    <a id="organization" class="head_tag" href="{{url('/organization')}}">组织</a>
    <a class="head_tag" href="{{url('/lead')}}">线索</a>
    <a class="head_tag" href="{{url('/product')}}">产品</a>
    <a class="head_tag" href="{{url('/campaign')}}">计划</a>
    <a class="head_tag" href="{{url('/opportunity')}}">机会</a>
    <a class="head_tag" href="{{url('/activity')}}">备忘录</a>
    <a class="head_tag" href="{{url('/document')}}">文件</a>
    <a class="head_tag" href="{{url('/ticket')}}">票务</a>
</header>
<form action="{{ URL('organization') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button id="edit_sub" >提交点我提交</button>
    <div id="edit_field">
        <div class="edit_item">
            <p>name:</p> <input type="text" id="organization_name" name="organization_name" />
        </div>
        <div class="edit_item">
            <p>city:</p>  <input type="text" id="city" name="city"  />
        </div>
        <div class="edit_item">
            <p>website:</p> <input type="text" id="website" name="website"   />
        </div>
        <div class="edit_item">
            <p>phone:</p> <input type="text" id="phone" name="phone"/>
        </div>


    </div>
</form>
<footer>crm系统</footer>


<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/edit.js')}}"></script>
</body>

</html>
