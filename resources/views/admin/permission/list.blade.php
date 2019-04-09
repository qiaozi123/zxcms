<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>权限列表</title>
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
    <![endif]-->
</head>

<body>
<script>

</script>
<div class="x-nav">
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <xblock>
        <button class="layui-btn" onclick="x_admin_show('创建权限','{{url('admin/permission/create')}}@if(!empty($belongtoid))?belongto={{$belongtoid}}@else  @endif')"><i class="layui-icon"></i>创建权限</button>
    </xblock>
    <table class="layui-table">
        <thead>
        <tr>
            <th>
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>id</th>
            <th>权限名</th>
            <th>图标</th>
            <th>slug</th>
            <th>描述</th>
            <th>模型</th>
            <th>类型</th>
            <th>创建时间</th>
            <th>更新时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permission as $key=>$item)
            <tr>
                <td>
                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='{{$item->id}}'><i class="layui-icon">&#xe605;</i></div>
                </td>
                <td>{{$item->id}}</td>
                <td class="td-manage">
                    <a title="修改权限"  onclick="x_admin_show('{{$item->name}}的下级权限列表','/admin/permission/list?belongto={{$item->id}}')" href="javascript:;">
                        <i class="iconfont"> &#xe6b9; </i>{{$item->name}}
                    </a>
                </td>
                <td><a> <i class="iconfont">  {!! $item->icon !!} </i></a></td>
                <td>{{$item->slug}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->model}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td class="td-manage">
                    <a title="修改权限"  onclick="x_admin_show('修改权限','/permission/update?id={{$item->id}}')" href="javascript:;">
                        <i class="layui-icon">&#xe642;</i>
                    </a>
                    <a title="删除权限"  onclick="x_admin_show('删除权限','/permission/delete/?id={{$item->id}}')" href="javascript:;">
                        <i class="layui-icon">&#xe631;</i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });
    });

    /*用户-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){

            if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

            }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
            }

        });
    }

    /*用户-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }



    function delAll (argument) {

        var data = tableCheck.getData();

        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
    }
</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>

</html>
