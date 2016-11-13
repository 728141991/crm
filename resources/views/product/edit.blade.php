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

<form action="{{ URL('product/'.$product->id) }}" method="POST">
    <input name="_method" type="hidden" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button id="edit_sub" >提交点我提交</button>
    <div id="edit_field">
        <div class="edit_item">
            <p>name:</p> <input type="text" id="product_name" name="product_name" value="{{$product->product_name}}" />
        </div>
        <div class="edit_item">
            <p>code:</p>  <input type="text" id="code" name="product_code" value="{{$product->product_code}}"/>
        </div>
        <div class="edit_item">
            <p>description:</p> <input type="text" id="description" name="product_description" value="{{$product->product_description}}"  />
        </div>
        <div class="edit_item">
            <p>part number:</p> <input type="text" id="part_number" name="part_number" value="{{$product->part_number}}"/>
        </div>
        <div class="edit_item">
            <p>unit price:</p> <input type="text" id="unit_price" name="unit_price" value="{{$product->unit_price}}"/>
        </div>
        <div class="edit_item">
            <p>commission rate:</p> <input type="text" id="commission_rate" name="commission_rate" value="{{$product->commission_rate}}"/>
        </div>
        <div class="edit_item">
            <p>quantity per unit:</p> <input type="text" id="qty_per_unit" name="qty_per_unit" value="{{$product->qty_per_unit}}"/>
        </div>
        <div class="edit_item">
            <p>weight:</p> <input type="text" id="weight" name="weight" value="{{$product->weight}}"/>
        </div>
        <div class="edit_item">
            <p>sales start date:</p> <input type="text" id="sales start date" name="sales_start_date" value="{{$product->sales_start_date}}"/>
        </div>
        <div class="edit_item">
            <p>sales end date:</p> <input type="text" id="sales end date" name="sales_end_date" value="{{$product->sales_end_date}}"/>
        </div>

    </div>
</form>

<form action="{{ URL('product/'.$product->id) }}" method="POST" style="display: inline;">
    <input name="_method" type="hidden" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-danger">删除</button>
</form>


<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
</body>

</html>
