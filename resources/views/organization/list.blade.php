<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Organization</title>
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<header>
    <div id="head_icon">icon</div>
    <a class="head_tag" href="{{url('/home')}}">主页</a>
    <a class="head_tag" href="{{url('/contact')}}">联系人</a>
    <a id="organization" class="head_tag" href="{{url('/organization')}}">组织</a>
    <a class="head_tag" href="{{url('/lead')}}">领导</a>
    <a class="head_tag" href="{{url('/product')}}">产品</a>
    <a class="head_tag" href="{{url('/campaign')}}">计划</a>
    <a class="head_tag" href="{{url('/opportunity')}}">机会</a>
    <a class="head_tag" href="{{url('/activity')}}">备忘录</a>
    <a class="head_tag" href="{{url('/document')}}">文件</a>
    <a class="head_tag" href="{{url('/ticket')}}">票务</a>
</header>
<article>
    <ul class="item_list card">
        <li id="item_title" class="">
            <div class="item_name">organization name</div>
            <div>city</div>
            <div>website</div>
            <div>phone</div>


        </li>
        <form method="get" action="{{url('/organization/search')}}">
            <li id="item_search" class="">
                <div class="item_name">
                    <input type="text" placeholder="organization name" name="organization_name" />
                </div>
                <div class="input-field col s12">
                    <input type="text" placeholder="city" name="city"/>
                </div>
                <div class="input-field col s12">

                    <input type="text" placeholder="website" name="website" />
                </div>
                <div>
                    <input type="text" placeholder="phone" name="phone" />
                </div>
                <div class="all_btn">
                    <button class="waves-effect waves-light btn search_btn">搜索</button><a class="waves-effect waves-light btn clear_btn">清空</a>
                </div>
            </li>
        </form>


        @foreach($organizations as $organization)
            <li class="item">
                <div class="item_name"> <a href="{{url('organization/'.$organization->id.'/edit')}}">{{$organization->organization_name}}</a> </div>
                <div>{{$organization->city}}</div>
                <div>{{$organization->website}}</div>
                <div>{{$organization->phone}}</div>


            </li>
        @endforeach

    </ul>
    <a class="new_create" href="{{url('organization/create')}}">创建新组织</a>

</article>
<footer>crm系统</footer>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
