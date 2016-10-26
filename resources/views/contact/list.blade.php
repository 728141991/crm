<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="/newproject/public/materialize/css/materialize.css">
    <link rel="stylesheet" href="/newproject/public/css/main.css">
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
            <div>title</div>
            <div>email</div>
            <div>office phone</div>
            <div>organization</div>

        </li>
        <form method="get" action="{{url('/contact/search')}}">
            <li id="item_search" class="">
                <div class="item_name">
                    <input type="text" placeholder="first name" name="first_name" />
                </div>
                <div class="input-field col s12">
                    <input type="text" placeholder="last name" name="last_name"/>
                </div>
                <div class="input-field col s12">

                    <input type="text" placeholder="title" name="title" />

                </div>
                <div>
                    <input type="text" placeholder="email" name="email" />
                </div>
                <div><input type="text" placeholder="office phone" name="office_phone" /></div>

                <div>
                    <input type="text" placeholder="organization" name="organization_name"/>
                </div>

                <div class="all_btn">
                    <button class="waves-effect waves-light btn search_btn">搜索</button><a class="waves-effect waves-light btn clear_btn">清空</a>
                </div>
            </li>
        </form>


        @foreach($contacts as $contact)
            <li class="item">
              <div class="item_name"> <a href="{{url('contact/'.$contact->id.'/edit')}}">{{$contact->first_name}}</a> </div>
                <div>{{$contact->last_name}}</div>
                <div>{{$contact->title}}</div>
                <div>{{$contact->email}}</div>
                <div>{{$contact->office_phone}}</div>
                <div>{{$contact->organization_name}}</div>

            </li>
            @endforeach

    </ul>
    <a href="{{url('contact/create')}}">创建新联系人</a>

</article>
<footer>crm系统</footer>
<script type="text/javascript" src="/newproject/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/newproject/public/materialize/js/materialize.js"></script>
<script type="text/javascript" src="/newproject/public/js/main.js"></script>
</body>

</html>
