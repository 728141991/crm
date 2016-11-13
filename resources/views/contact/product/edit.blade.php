<html>
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="/crm/public/materialize/css/materialize.css">
    <link rel="stylesheet" href="/crm/public/css/main.css">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>
<ul class="item_list card">
    <li>姓名：{{$contact->full_name}}</li>
</ul>
<ul >
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
    <form action="{{url('contact/add_product/save')}}" method="post">
        @foreach($products as $product)
            <li class="item">
                <div> <input type="checkbox" value="{{$product->id}}" name="product">{{$product->product_name}}</div>
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
        <button>save</button>

    </form>

</ul>
<script type="text/javascript" src="/crm/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/crm/public/materialize/js/materialize.js"></script>
<script type="text/javascript" src="/crm/public/js/main.js"></script>
</html>