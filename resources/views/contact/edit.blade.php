<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/newproject/public/materialize/css/materialize.css">
    <link rel="stylesheet" href="/newproject/public/css/edit.css">
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

<form action="{{ URL('contact/'.$contact->id) }}" method="POST">
    <input name="_method" type="hidden" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button id="edit_sub" >提交点我提交</button>
    <div id="edit_field">
        <div class="edit_item">
            <p>first_name:</p> <input type="text" id="first_name" name="first_name" value="{{$contact->first_name}}" />
        </div>
        <div class="edit_item">
            <p>last_name:</p>  <input type="text" id="last_name" name="last_name" value="{{$contact->last_name}}" />
        </div>
        <div class="edit_item">
            <p>title:</p> <input type="text" id="title"name="title"  value="{{$contact->title}}" />
        </div>
        <div class="edit_item">
            <p>email:</p> <input type="text" id="email" name="email" value="{{$contact->email}}" />
        </div>
        <div class="edit_item">
            <p>organization:</p> <input type="text" id="organization"name="organization"  value="{{$contact->organizationId}}" />
=======
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
    <a id="contact" class="head_tag" href="{{url('/contact')}}">联系人</a>
    <a class="head_tag" href="{{url('/organization')}}">组织</a>
    <a class="head_tag" href="{{url('/lead')}}">领导</a>
    <a class="head_tag" href="{{url('/product')}}">产品</a>
    <a class="head_tag" href="{{url('/campaign')}}">计划</a>
    <a class="head_tag" href="{{url('/opportunity')}}">机会</a>
    <a class="head_tag" href="{{url('/activity')}}">备忘录</a>
    <a class="head_tag" href="{{url('/document')}}">文件</a>
    <a class="head_tag" href="{{url('/ticket')}}">票务</a>
</header><a href="{{url('contact/'.$contact->id.'/add_product/list')}}"></a>
<form action="{{ URL('contact/'.$contact->id) }}" method="POST">
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
    <button style="margin-left:20px;display: inline-block" class="waves-effect waves-light btn sub_btn">提交</button>
    <form action="{{ URL('contact/'.$contact->id) }}" method="POST" style="display: inline;">
        <input name="_method" type="hidden" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button style="margin:20px;" type="submit" class="btn btn-danger del_btn1">删除</button>
    </form>
</form>

<div class="card" style="margin:20px;height:400px">
    <button id="chocie-more" style="margin:20px;" type="submit" class="btn btn-danger">选择</button>
    <div>
        <ul style="float:left;">
            <li id="item1" class="item">线索</li>
            <li id="item2" class="item">产品</li>
            <li id="item3" class="item">组织</li>
        </ul>
        <div style="margin-left:100px">
           <div>
               <div id="detail_item1" class="a_title">
                   <div>last name</div>
                   <div>company</div>
                   <div>primary phone</div>
                   <div>website</div>
                   <div>primary email</div>
               </div>
           </div>
            <div id="detail_item2" style="display: none">
                <div class="a_title">
                    <div>code</div>
                    <div>description</div>
                    <div>part number</div>
                    <div>unit price</div>
                    <div>commission rate</div>
                    <div>quantity per unit</div>
                    <div>weight</div>
                    <div>sales start date</div>
                    <div>sales end date</div>
                </div>
            </div>
            <div id="detail_item3" style="display: none">
                <div class="a_title">
                    <div class="item_name">organization name</div>
                    <div>city</div>
                    <div>website</div>
                    <div>phone</div>
                </div>
            </div>
>>>>>>> panshan
        </div>
        <div class="edit_item">
            <p>office_phone:</p> <input type="text" id="office_phone"name="office_phone" value="{{$contact->office_phone}}" />
        </div>

    </div>
<<<<<<< HEAD
</form>

<form action="{{ URL('contact/'.$contact->id) }}" method="POST" style="display: inline;">
    <input name="_method" type="hidden" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-danger">删除</button>
</form>


<script type="text/javascript" src="/newproject/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/newproject/public/materialize/js/materialize.js"></script>
<script type="text/javascript" src="/newproject/public/js/edit.js"></script>
=======
</div>
<footer>crm系统</footer>
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
>>>>>>> panshan
</body>

</html>
