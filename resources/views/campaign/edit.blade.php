<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>计划</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/css/common.css')}}" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="{{asset(('/js/create_campaign.js'))}}"></script>
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
                <li class="active"><a href="{{url('/campaign')}}" id="jihua_nav" target="view_center">计划</a></li>
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
    <div class="container" id="jihua">
        <div class="row">
            <div class="clo-xs-12 colsm-2 col-md-2 col-lg-2">
                <div class="list-group" id="leftMenu">
                    <div class="leftMenu">
                        <a href="#" id="leftMenuJihua" class="list-group-item active">计划详情</a>
                        <a href="edit_campaign_contact.html" id="leftMenuLianxiren" class="list-group-item">相关联系人</a>
                        <a href="edit_campaign_organization.html" id="leftMenuZuzhi" class="list-group-item">相关组织</a>
                        <a href="edit_campaign_opportunity.html" id="leftMenuJihui" class="list-group-item">相关机会</a>
                    </div>
                </div>
            </div>

            <div class="clo-xs-12 col-sm-10 col-md-10 col-lg-10" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>编辑计划</h2>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{URL('campaign/'.$campaign->id)}}" role="form">
                            <table class="table table-bordered">
                                <tr>
                                    <td>名称</td>
                                    <td><input type="text" class="form-control" name="campaign_name" id="campaign_name" value="{{$campaign->campaign_name}}"></td>
                                    <td>类型</td>
                                    <td><input type="text" class="form-control" name="type" id="type" value="{{$campaign->type}}"></td>
                                </tr>
                                <tr>
                                    <td>状态</td>
                                    <td><select class="form-control" name="status" id="status" >
                                            <option>启动</option>
                                            <option>进行中</option>
                                            <option>完成</option>
                                            <option>失败</option>
                                        </select>
                                    </td>
                                    <td>预算</td>
                                    <td><input type="text" class="form-control" name="budget" id="budget" value="{{$campaign->budget}}"></td>
                                </tr>
                                <tr>
                                    <td>价值</td>
                                    <td>
                                        <select class="form-control" name="value" id="value" >
                                            <option>很棒</option>
                                            <option>不错</option>
                                            <option>一般</option>
                                            <option>很少</option>
                                        </select>
                                    </td>
                                    <td>期待汇报</td>
                                    <td><input type="text" class="form-control" name="expected_revenue" id="expected_revenue" value="{{$campaign->expected_revenue}}"></td>
                                </tr>
                                <tr>
                                    <td>预计结束日期</td>
                                    <td><input type="text" class="form-control" name="expected_close_data" id="expected_close_data" value="{{$campaign->expected_close_data}}"></td>
                                    <td >负责人</td>
                                    <td>
                                        <select class="form-control" name="assign_to" id="assign_to" >
                                            <option>无</option>
                                            <option>负责人1</option>
                                            <option>负责人2</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-btn-align">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a type="button" class="btn btn-default" href="{{asset('/campaign')}}">取消</a>
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