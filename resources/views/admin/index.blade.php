<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{url('css/font.css')}}">
    <link rel="stylesheet" href="{{url('css/xadmin.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{url('js/xadmin.js')}}"></script>
</head>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="/admin">一站佩奇</a></div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>

    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="/admin/logout">退出</a></dd>
            </dl>

        </li>
    </ul>
</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">

            @foreach($nav as $item)
                <li>
                    <a href="javascript:;">
                        <i class="iconfont">{!! $item->icon!!}</i>
                        <cite>{{$item->name}}</cite>
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        @foreach(\App\Model\Permission::nav($item->id) as $item1)
                        <li>
                            <a _href="{{$item1->slug}}">
                                <i class="iconfont">{!!$item1->icon!!}</i>
                                <cite>{{$item1->name}}</cite>
                            </a>
                        </li >
                        @endforeach
                    </ul>
                </li>
            @endforeach

            {{--<li>--}}
                {{--<a href="javascript:;">--}}
                    {{--<i class="iconfont">&#xe726;</i>--}}
                    {{--<cite>{{$item->name}}</cite>--}}
                    {{--<i class="iconfont nav_right">&#xe697;</i>--}}
                {{--</a>--}}
                {{--<ul class="sub-menu">--}}
                    {{--<li>--}}
                        {{--<a _href="/user/info">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>基本信息</cite>--}}
                        {{--</a>--}}
                    {{--</li >--}}
                    {{--<li>--}}
                        {{--<a _href="/user/update">--}}
                            {{--<i class="iconfont">&#xe6a7;</i>--}}
                            {{--<cite>修改密码</cite>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--@if(\App\Model\Roles::IsRole('admin'))--}}
                {{--<li>--}}
                    {{--<a href="javascript:;">--}}
                        {{--<i class="iconfont">&#xe696;</i>--}}
                        {{--<cite>权限管理</cite>--}}
                        {{--<i class="iconfont nav_right">&#xe697;</i>--}}
                    {{--</a>--}}
                    {{--<ul class="sub-menu">--}}
                        {{--<li>--}}
                            {{--<a _href="/admin/user/list">--}}
                                {{--<i class="iconfont">&#xe6a7;</i>--}}
                                {{--<cite>用户列表</cite>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a _href="/admin/role/list">--}}
                                {{--<i class="iconfont">&#xe6a7;</i>--}}
                                {{--<cite>角色列表</cite>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a _href="/admin/permission/list">--}}
                                {{--<i class="iconfont">&#xe6a7;</i>--}}
                                {{--<cite>权限列表</cite>--}}
                            {{--</a>--}}
                        {{--</li >--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endif--}}

        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li>我的主页</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='/admin/list' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">上词计费管理系统</div>
</div>
<!-- 底部结束 -->
</body>
</html>
