<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Contact</title>
    <style>
        .edit_header_name{
          position: relative;
            top:40px;
        }
        #edit_form{
            position: relative;
            top:50px;
        }
        .new_create{
            position: relative;
            top:70px;display: block;
            background-color:#6DACEB;
            color:white;
            padding: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">

    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<article>
    <div class="header_name edit_header_name" style="position: relative;top:50px">
        <i class="material-icons">star</i><span>&nbsp;&nbsp;联系人详情</span>
    </div>
    <a class="new_create" href="{{url('contact/create')}}">创建新联系人</a>
    <ul class="item_list card" id="edit_form">
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

                <div style="display:block" class="all_btn">
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


</article>
<footer>crm系统</footer>

<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
