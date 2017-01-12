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
            <ul class="nav navbar-nav navbar-a" id="nav_bar">
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
                        <a href="{{url('contact/'.$contact->id.'/edit')}}" id="leftMenuContact" class="list-group-item">联系人详情</a>
                        <a href="create_contact_opportunity.html" id="leftMenuOpportunity"
                           class="list-group-item">相关机会</a>
                        <a href="#" id="lleftMenuCampaign" class="list-group-item active">相关计划</a>
                        <a href="create_contact_product.html" id="leftMenuProduct" class="list-group-item">相关产品</a>
                    </div>
                </div>
            </div>

            <div class="clo-xs-12 col-sm-10 col-md-10 col-lg-10" id="panel3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>相关计划</h2>
                        <button type="button" data-toggle="modal" data-target="#xuanzecampaignModal"
                                class="btn btn-default">选择计划
                        </button>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>名称</th>
                                <th>负责人</th>
                                <th>状态</th>
                                <th>计划类型</th>
                                <th>关闭日期</th>
                                <th>期望回报</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>计划1</td>
                                <td>业务操作人员</td>
                                <td>未完成</td>
                                <td>邮件</td>
                                <td>2016-12-12</td>
                                <td>10</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs">删除</button>
                                </td>
                            </tr>
                            <tr>
                                <td>计划2</td>
                                <td>业务操作人员xyz</td>
                                <td>完成</td>
                                <td>短信</td>
                                <td>2017-1-2</td>
                                <td>29</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs">删除</button>
                                </td>
                            </tr>
                            @foreach($related_campaigns as $campaign)
                                <tr>
                                    <td>{{$campaign->campaign_name}}</td>
                                    <td>{{$campaign->assign_to}}</td>
                                    <td>{{$campaign->status}}</td>
                                    <td>{{$campaign->type}}</td>
                                    <td>{{$campaign->expected_close_data}}</td>
                                    <td>{{$campaign->expected_revenue}}</td>
                                    <td>
                                        <form action="{{ URL('contact/'.$contact->id.'/delete_campaign/'.$campaign->id) }}"
                                              method="POST"
                                              style="display: inline;">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-default btn-xs">删除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <!-- 其他div 比如弹出窗等 -->
                <div class="modal fade" id="xuanzecampaignModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <form method="POST" action="{{URL('contact/'.$contact->id.'/add_campaign')}}" role="form">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">相关计划</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>计划名称</th>
                                            <th>负责人</th>
                                            <th>状态</th>
                                            <th>类型</th>
                                        </tr>
                                        @foreach($un_campaigns as $campaign)
                                            <tr>
                                                <td><input type="checkbox" name="isChecked" value={{$campaign->id}} ></td>
                                                <td>{{$campaign->campaign_name}}</td>
                                                <td>{{$campaign->assign_to}}</td>
                                                <td>{{$campaign->status}}</td>
                                                <td>{{$campaign->type}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-btn-align">
                                        <input name="_method" type="hidden" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-default">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- center -->
</body>
</body>
<script type="text/javascript">
    $("#contact_list_nav").click();
</script>
</html>