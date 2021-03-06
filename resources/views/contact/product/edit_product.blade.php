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
        {{--<div>--}}
            {{--<div class="card" id="edit_field_O">--}}
                {{--<div class="edit_item_O">first name--}}
                    {{--<input type="text" placeholder="first name" id="first_name" name="first_name" value="{{$contact->first_name}}" />--}}
                {{--</div>--}}
                {{--<div class="edit_item_O">last name--}}
                    {{--<input type="text" placeholder="last name" id="last_name" name="last_name" value="{{$contact->last_name}}" />--}}
                {{--</div>--}}
                {{--<div class="edit_item_O">title--}}
                    {{--<input type="text" placeholder="title" id="title"name="title"  value="{{$contact->title}}" />--}}
                {{--</div>--}}
                {{--<div class="edit_item_O">email--}}
                    {{--<input type="text" placeholder="email" id="email" name="email" value="{{$contact->email}}" />--}}
                {{--</div>--}}
                {{--<div class="edit_item_O">organization--}}
                    {{--<input type="text" placeholder="organization" id="organization"name="organization_name"  value="{{$organization_name}}" />--}}
                {{--</div>--}}
                {{--<div class="edit_item_O">office phone--}}
                    {{--<input type="text" placeholder="office phone" id="office_phone"name="office_phone" value="{{$contact->office_phone}}" />--}}
                {{--</div>--}}
                {{--<div class="edit_item_O">organzation--}}
                    {{--<input type="text" placeholder="organzation" id="organzation"name="organzation" value="{{$contact->office_phone}}" />--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<button style="width:60px;margin-left:560px" id="overClose" type="submit" class="btn btn-danger del_btn1">关闭</button>--}}
        <form id="detail" class="item_list">

                <li id="item_title">
                    <div>name</div>
                    <div>description</div>
                    <div>part number</div>
                    <div>unit price</div>
                    <div>commission rate</div>
                    <div style="position:relative;top:5px">
                        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                        <label for="filled-in-box"></label>
                    </div>

                </li>

            @foreach($all_products as $product)
                <li id="item_title">
                    <div>{{$product->product_name}}</div>
                    <div>{{$product->product_description}}</div>
                    <div>{{$product->part_number}}</div>
                    <div>{{$product->unit_price}}</div>
                    <div>{{$product->commission_rate}}</div>
                    <div style="position:relative;top:5px">
                        <input type="checkbox" class="filled-in" id="filled-in-box"  />
                        <label for="filled-in-box"></label>
                    </div>
                </li>
            @endforeach

            <button style="width:60px;margin-left:560px" id="overClose" type="submit" class="btn btn-danger del_btn1">关闭</button>
            <button type="submit" class="btn btn-danger" onclick="$('#detail').attr('display','none');">确定</button>
        </form>

    </div>
</div>


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
<a href="{{url('contact/'.$contact->id.'/add_product/list')}}"></a>

<div class="sidebar">
    <div class="collection">
        <a href="{{url('contact/'.$contact->id.'/edit')}}" class="collection-item">联系人详情</a>
        <a href="{{url('contact/'.$contact->id.'/edit-lead')}}" class="collection-item">线索</a>
        <a href="{{url('contact/'.$contact->id.'/add_product/list')}}" class="collection-item" id="item_choose">产品</a>
        <a href="{{url('contact/'.$contact->id.'/edit')}}" class="collection-item">组织</a>
    </div>
</div>

<div class="header_name_edit">
    &nbsp;<i class="material-icons">star</i><a name="product" id="product">&nbsp;选择产品</a>
</div>


    <div id="detail_item2" class="a_title card-panel">

        <form class="item_list">
            <li id="item_title">
                <div>name</div>
                <div>description</div>
                <div>part number</div>
                <div>unit price</div>
                <div style="position:relative;top:5px" class="checkbox">
                    <label>
                        <input type="checkbox"  />123213
                    </label>


                </div>

            </li>
            @foreach($products as $product)
                <li id="item_title">
                    <div>{{$product->product_name}}</div>
                    <div>{{$product->product_description}}</div>
                    <div>{{$product->part_number}}</div>
                    <div>{{$product->unit_price}}</div>
                    <div style="position:relative;top:5px">
                        <input type="checkbox" class="filled-in" id="filled-in-box"  />
                        <label for="filled-in-box"></label>
                    </div>
                </li>
            @endforeach

            <li>
                <button class="new_create btn"  style="margin:20px;"  id="addBtn">增加</button>
                <button id="chocie-more" style="margin:20px;" type="submit" class="btn btn-danger">删除</button>
            </li>
        </form>


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
