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
    <script src="{{asset('js/create_contact.js')}}"></script>
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
    <div class="container"  id="contact">
        <div class="row">
            <div class="clo-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="list-group" id="leftMenu">
                    <div class="leftMenu">
                        <a href="#" id="leftMenuContact" class="list-group-item active">联系人详情</a>
                        {{--<a href="create_contact_opportunity.html" id="leftMenuOpportunity" class="list-group-item">相关机会</a>--}}
                        {{--<a href="create_contact_campaign.html" id="lleftMenuCampaign" class="list-group-item">相关计划</a>--}}
                        {{--<a href="create_contact_product.html" id="leftMenuProduct" class="list-group-item">相关产品</a>--}}
                    </div>
                </div>
            </div>

            <div class="clo-xs-12 col-sm-10 col-md-10 col-lg-10" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>创建联系人</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{ URL('contact') }}" method="POST"  role="form">
                            <table class="table table-bordered">
                                <tr>
                                    <td>姓</td>
                                    <td><input type="text" id="first_name" name="first_name" class="form-control"></td>
                                    <td>名</td>
                                    <td><input type="text" id="last_name" name="last_name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>标题</td>
                                    <td><input type="text" id="title" name="title" class="form-control"></td>

                                    <td>邮件</td>
                                    <td><input type="text" id="email" name="email" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>所属组织</td>
                                    <td>
                                        <select  id="organization_name" name="organization_name" class="form-control">
                                            <option value="无">无</option>
                                            <option value="公司1">公司1</option>
                                            <option value="公司2">公司2</option>
                                        </select>
                                    </td>
                                    <td>电话</td>
                                    <td><input type="text" id="office_phone"name="office_phone" class="form-control"></td>

                                </tr>
                                <tr>
                                    <td>住址</td>
                                    <td><input type="text" id="address" name="address" class="form-control"></td>
                                    <td >负责人</td>
                                    <td>
                                        <select class="form-control" id="assign_to" name="assign_to">
                                            <option>无</option>
                                            <option>负责人1</option>
                                            <option>负责人2</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-btn-align">
                                <button type="submit" class="btn btn-default">创建</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a type="button" class="btn btn-default" href="{{asset('/contact')}}">取消</a>
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
</body>
</html>