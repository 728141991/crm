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
    <div class="container" d="jihua">
        <div class="row">
            <div class="clo-xs-12 colsm-2 col-md-2 col-lg-2">
                <div class="list-group" id="leftMenu">
                    <div class="leftMenu">
                        <a href="{{url('/campaign/'.$campaign->id.'/edit')}}" id="leftMenuJihua"
                           class="list-group-item ">计划详情</a>
                        <a href="{{url('/campaign/'.$campaign->id.'/contact')}}" id="leftMenuLianxiren"
                           class="list-group-item">相关联系人</a>
                        <a href="#" id="leftMenuZuzhi" class="list-group-item  active">相关组织</a>
                        <a href="create_campaign_opportunity.html" id="leftMenuJihui" class="list-group-item">相关机会</a>
                    </div>
                </div>
            </div>
            <div class="clo-xs-12 col-sm-10 col-md-10 col-lg-10" id="panel3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>相关组织</h2>
                        <button type="button" data-toggle="modal" data-target="#xuanzezuzhiModal"
                                class="btn btn-default">选择组织
                        </button>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>组织名称</th>
                                <th>所在城市</th>
                                <th>网站</th>
                                <th>主要电话</th>
                                <th>负责人</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>华工</td>
                                <td>广州</td>
                                <td>http://www.scut.edu.cn/</td>
                                <td>13570478286</td>
                                <td>业务人员A</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs">删除</button>
                                </td>
                            </tr>
                            <tr>
                                <td>中大</td>
                                <td>广州</td>
                                <td>http://www.sysu.edu.cn/</td>
                                <td>132139213921</td>
                                <td>业务人员B</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs">删除</button>
                                </td>
                            </tr>
                            @foreach($related_organizations as $organization)
                                <tr>
                                    <td>{{$organization->organization_name}}</td>
                                    <td>{{$organization->city}}</td>
                                    <td>{{$organization->website}}</td>
                                    <td>{{$organization->phone}}</td>
                                    <td>{{$organization->assign_to}}</td>
                                    <td>
                                        <form action="{{ URL('campaign/'.$campaign->id.'/delete_organization/'.$organization->id) }}"
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
                <div class="modal fade" id="xuanzezuzhiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form method="POST" action="{{URL('campaign/'.$campaign->id.'/add_organization')}}" role="form">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">相关组织</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="#" role="form">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>
                                                    <input type="checkbox">
                                                </th>
                                                <th>组织名称</th>
                                                <th>所在城市</th>
                                                <th>网站</th>
                                                <th>电话</th>
                                                <th>负责人</th>
                                            </tr>

                                            @foreach($un_organizations as $organization)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="checkbox[]" id="checkbox"
                                                               value={{$organization->id}}>
                                                    </td>
                                                    <td>{{$organization->organization_name}}</td>
                                                    <td>{{$organization->city}}</td>
                                                    <td>{{$organization->website}}</td>
                                                    <td>{{$organization->phone}}</td>
                                                    <td>{{$organization->assign_to}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-btn-align">
                                        <button type="submit" class="btn btn-default">提交</button>
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
</html>