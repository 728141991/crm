<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>组织</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/css/common.css')}}" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="{{asset('js/create_organization.js')}}"></script>
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
                <li><a href="{{url('/contact')}}" id="contact_list_nav" target="view_center">联系人</a></li>
                <li><a href="{{url('/campaign')}}" id="jihua_nav" target="view_center">计划</a></li>
                <li class="active"><a href="{{url('/organization')}}" id="zuzhi_nav" target="view_center">组织</a></li>
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
    <div class="container" id="zuzhi">
        <div class="row">
            <div class="clo-xs-12 colsm-2 col-md-2 col-lg-2">
                <div class="list-group" id="leftMenu">
                    <div class="leftMenu">
                        <a href="#" id="leftMenuZuzhi" class="list-group-item active">组织详情</a>
                        <a href="{{url('/organization_contact')}}" id="leftMenuLianxiren" class="list-group-item">相关联系人</a>
                        <a href="{{url('/organization_campaign')}}" id="leftMenuJihua" class="list-group-item">相关计划</a>
                        <a href="{{url('/organization_opportunity')}}" id="leftMenuJihui" class="list-group-item">相关机会</a>
                    </div>
                </div>
            </div>
            <div class="clo-xs-12 col-sm-10 col-md-10 col-lg-10" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>创建组织</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{ URL('organization') }}" method="POST" role="form">
                            <table class="table table-bordered">
                                <tr>
                                    <td>组织名称</td>
                                    <td><input type="text" name="organization_name" id = "organization_name" class="form-control"></td>
                                    <td>网址</td>
                                    <td><input type="text" name="website" id = "website" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>联系电话</td>
                                    <td><input type="text" name="phone" id ="phone" class="form-control"></td>
                                    <td>联系邮箱</td>
                                    <td><input type="text"  name="email" id ="email"  class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>相关程度</td>
                                    <td>
                                        <select class="form-control" name="relationship" id="relationship">
                                            <option>需求</option>
                                            <option>活跃</option>
                                            <option>不感兴趣</option>
                                            <option>营销失败</option>
                                        </select>
                                    </td>
                                    <td>所在城市</td>
                                    <td><input type="text" name="city" id ="city" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>具体地址</td>
                                    <td><input type="text" name="address" id ="address" class="form-control"></td>
                                    <td >负责人</td>
                                    <td>
                                        <select class="form-control">
                                            <option>无</option>
                                            <option>负责人1</option>
                                            <option>负责人2</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-btn-align">
                                <button type="submit" class="btn btn-default">创建</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a type="button" class="btn btn-default" href="{{asset('/organization')}}">取消</a>
                            </div>
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