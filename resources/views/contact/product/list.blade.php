<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="/crm/public/materialize/css/materialize.css">
    <link rel="stylesheet" href="/crm/public/css/main.css">
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
            <div class="item_name">name</div>
            <div>code</div>
            <div>description</div>
            <div>part number</div>
            <div>unit price</div>
            <div>commission rate</div>
            <div>quantity per unit</div>
            <div>weight</div>
            <div>sales start date</div>
            <div>sales end date</div>

        </li>
     <!--   <form method="get" action="{{url('/product/search')}}">
            <li id="item_search" class="">
                <div class="item_name">
                    <input type="text" placeholder="name" name="product_name" />
                </div>
                <div class="input-field col s12">
                    <input type="text" placeholder="code" name="product_code"/>
                </div>
                <div class="input-field col s12">

                    <input type="text" placeholder="description" name="product_description" />

                </div>
                <div>
                    <input type="text" placeholder="part number" name="part_number" />
                </div>
                <div>
                    <input type="text" placeholder="unit price" name="unit_price" />
                </div>
                <div>
                    <input type="text" placeholder="commission rate" name="commission_rate" />
                </div>
                <div>
                    <input type="text" placeholder="quantity per unit" name="qty_per_unit" />
                </div>
                <div>
                    <input type="text" placeholder="weight" name="weight" />
                </div>
                <div>
                    <input type="text" placeholder="sales start date" name="sales_start_date" />
                </div>
                <div>
                    <input type="text" placeholder="sales end date" name="sales_end_date" />
                </div>

                <div class="all_btn">
                    <button class="waves-effect waves-light btn search_btn">搜索</button><a class="waves-effect waves-light btn clear_btn">清空</a>
                </div>
            </li>
        </form>-->



        @foreach($products as $product)
            <li class="item">
                <div class="item_name"> <a href="{{url('product/'.$product->id.'/edit')}}">{{$product->product_name}}</a> </div>
                <div>{{$product->product_code}}</div>
                <div>{{$product->product_description}}</div>
                <div>{{$product->part_number}}</div>
                <div>{{$product->unit_price}}</div>
                <div>{{$product->commission_rate}}</div>
                <div>{{$product->qty_per_unit}}</div>
                <div>{{$product->weight}}</div>
                <div>{{$product->sales_start_date}}</div>
                <div>{{$product->sales_end_date}}</div>



            </li>
        @endforeach

    </ul>

<a href="{{url('contact/'.$contact->id.'/add_product/edit')}}">add product</a>
</article>
<footer>crm系统</footer>
<script type="text/javascript" src="/crm/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/crm/public/materialize/js/materialize.js"></script>
<script type="text/javascript" src="/crm/public/js/main.js"></script>
</body>

</html>
