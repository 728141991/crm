<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lead</title>
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<header>
    <div id="head_icon">icon</div>
    <a class="head_tag" href="{{url('/home')}}">主页</a>
    <a class="head_tag" href="{{url('/contact')}}">联系人</a>
    <a class="head_tag" href="{{url('/organization')}}">组织</a>
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
            <div class="item_name">first name</div>
            <div>last name</div>
            <div>company</div>
            <div>primary phone</div>
            <div>website</div>
            <div>primary email</div>

        </li>
        <form method="get" action="{{url('/lead/search')}}">
            <li id="item_search" class="">
                <div class="item_name">
                    <input type="text" placeholder="first name" name="first_name" />
                </div>
                <div class="input-field col s12">
                    <input type="text" placeholder="last name" name="last_name"/>
                </div>
                <div class="input-field col s12">

                    <input type="text" placeholder="company" name="company" />

                </div>
                <div>
                    <input type="text" placeholder="primary phone" name="primary_phone" />
                </div>
                <div><input type="text" placeholder="website" name="website" /></div>

                <div>
                    <input type="text" placeholder="primary email" name="primary_email"/>
                </div>

                <div class="all_btn">
                    <button class="waves-effect waves-light btn search_btn">搜索</button><a class="waves-effect waves-light btn clear_btn">清空</a>
                </div>
            </li>
        </form>


        @foreach($leads as $lead)
            <li class="item">
                <div class="item_name"> <a href="{{url('lead/'.$lead->id.'/edit')}}">{{$lead->first_name}}</a> </div>
                <div>{{$lead->last_name}}</div>
                <div>{{$lead->company}}</div>
                <div>{{$lead->primary_phone}}</div>
                <div>{{$lead->website}}</div>
                <div>{{$lead->primary_email}}</div>

            </li>
        @endforeach

    </ul>
    <a class="new_create" href="{{url('lead/create')}}">创建新领导人</a>

</article>
<footer>crm系统</footer>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
