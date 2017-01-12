<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>联系人</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/css/common.css')}}" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="{{asset(('/js/contact_list.js'))}}"></script>
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-brand-div">
            <a class="navbar-brand navbar-brand-a" href="#">主页</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-a"  id="nav_bar">
                <li class="active"><a href="{{url('/contact')}}" id="contact_list_nav" target="view_center">联系人</a></li>
                <li><a href="{{url('/campaign')}}" id="jihua_nav" target="view_center">计划</a></li>
                <li><a href="{{url('/organization')}}" id="zuzhi_nav" target="view_center">组织</a></li>
                <li><a href="{{url('/product')}}" id="chanpin_nav" target="view_center">产品</a></li>
                <li><a href="{{url('/opportunity')}}" id="opportunity" target="view_center">机会</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">退出</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div id="center">
    <div class="container" id="contact">
        <div class="row">
            <div class="clo-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="list-group" id="leftMenu">
                    <div class="leftMenu">
                        <a href="#" class="list-group-item active">联系人列表</a>
                    </div>
                </div>
            </div>

            <div class="clo-xs-12 col-sm-10 col-md-10 col-lg-10" id="panel0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>联系人列表</h2>
                        <a type="button" class="btn btn-default" href="{{url('contact/create')}}">创建联系人</a>
                        <form method="post" action="#" role="form" class="pull-right search-form" >
                            <input type="text" placeholder="搜索">
                        </form>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="#" role="form">
                            <table class="table table-bordered">
                                <tr>
                                    <th>姓名</th>
                                    <th>负责人</th>
                                    <th>头衔</th>
                                    <th>邮箱</th>
                                    <th>办公室电话</th>
                                    <th>所属企业</th>
                                    <th>操作</th>
                                </tr>
                                <tr>
                                    <td>潘杉</td>
                                    <td>业务人员A</td>
                                    <td>无</td>
                                    <td>728141991@qq.com</td>
                                    <td>13570478286</td>
                                    <td>华南理工大学</td>
                                    <td><button type="button" class="btn btn-default btn-xs edit_button">编辑</button>&nbsp;<button type="button" class="btn btn-default btn-xs">删除</button></td>
                                </tr>
                                <tr>
                                    <td>钟迪</td>
                                    <td>业务人员B</td>
                                    <td>无</td>
                                    <td>123456@qq.com</td>
                                    <td>132139213921</td>
                                    <td>华南理工大学</td>
                                    <td><button type="button" class="btn btn-default btn-xs edit_button">编辑</button>&nbsp;<button type="button" class="btn btn-default btn-xs">删除</button></td>
                                </tr>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->full_name}}</td>
                                        <td>{{$contact->assign_to}}</td>
                                        <td>{{$contact->title}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->office_phone}}</td>
                                        <td>{{$contact->address}}</td>
                                        <td><a type="button" href="{{url('contact/'.$contact->id.'/edit')}}" class="btn btn-default btn-xs" >编辑</a>&nbsp;
                                            <form action="{{ URL('contact/'.$contact->id) }}" method="POST" style="display: inline;">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-default btn-xs">删除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- center -->
</body>
</html>