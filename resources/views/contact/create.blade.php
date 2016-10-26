<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="/crm/public/materialize/css/materialize.css">
    <link rel="stylesheet" href="/crm/public/css/edit.css">
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

<form action="{{ URL('contact') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button id="edit_sub" >提交点我提交</button>
    <div id="edit_field">
        <div class="edit_item">
            <p>first_name:</p> <input type="text" id="first_name" name="first_name" />
        </div>
        <div class="edit_item">
            <p>last_name:</p>  <input type="text" id="last_name" name="last_name"  />
        </div>
        <div class="edit_item">
            <p>title:</p> <input type="text" id="title"name="title"   />
        </div>
        <div class="edit_item">
            <p>email:</p> <input type="text" id="email" name="email"/>
        </div>
        <div class="edit_item">
            <p>organization:</p> <input type="text" id="organization"name="organization"   />
        </div>
        <div class="edit_item">
            <p>office_phone:</p> <input type="text" id="office_phone"name="office_phone"  />
        </div>

    </div>
</form>

<div>编辑</div>


<script type="text/javascript" src="/crm/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/crm/public/materialize/js/materialize.js"></script>
<script type="text/javascript" src="/crm/public/js/edit.js"></script>
</body>

</html>
