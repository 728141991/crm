<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lead</title>
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/edit.css')}}">
    <link href="https://fonts.css.network/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div class="header_name_edit">
    &nbsp;<i class="material-icons">star</i><span>&nbsp;创建新线索</span>
</div>
<form action="{{ URL('lead') }}" method="POST" class="card">

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
            <p>company:</p> <input type="text" id="company" name="company"   />
        </div>
        <div class="edit_item">
            <p>primary phone:</p> <input type="text" id="primary_phone" name="primary_phone"/>
        </div>
        <div class="edit_item">
            <p>website:</p> <input type="text" id="website"name="website"   />
        </div>
        <div class="edit_item">
            <p>primary_email:</p> <input type="text" id="primary_email" name="primary_email"/>
        </div>

    </div>
</form>

<div>编辑</div>


<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/edit.js')}}"></script>
</body>

</html>
