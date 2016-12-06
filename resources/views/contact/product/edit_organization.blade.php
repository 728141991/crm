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
<div id="detail" class="a_title card-panel" style="display: none">
    <div>organization name</div>
    <div>city</div>
    <div>website</div>
    <div>phone</div>
    <div style="position:relative;top:5px">
        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
        <label for="filled-in-box"></label>
    </div>
    <button onclick="$('#detail').attr('display','none');">关闭</button>
    <button type="submit" onclick="$('#detail').attr('display','none');">确定</button>
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

<div class="sidebar">
    <div class="collection">
        <a href="{{url('#detail')}}" class="collection-item">联系人详情</a>
        <a href="{{url('#lead')}}" class="collection-item">线索</a>
        <a href="{{url('#product')}}" class="collection-item" id="item_choose">产品</a>
        <a href="{{url('#organization')}}" class="collection-item">组织</a>
    </div>
</div>


<div class="header_name_edit" >
    &nbsp;<i class="material-icons">star</i><a name="organization" id="organization">&nbsp;选择组织</a>
</div>
<a class="new_create" onclick="show()">增加</a>
<div id="detail_item3" class="a_title card-panel">
    <div>organization name</div>
    <div>city</div>
    <div>website</div>
    <div>phone</div>

</div>

<footer>crm系统</footer>
<script>
    function show(){
        $('#detail').attr('display','');
    }
</script>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
