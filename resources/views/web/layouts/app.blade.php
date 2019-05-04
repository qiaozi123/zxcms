<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="{{url('asset/css/nav.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/portal.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/cases.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/design.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/product.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/safe_pingan.833315fb8d485fed3881.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/page.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/com.css')}}">
    <link href="{{url('asset/css/normalize.min.css')}}" rel="stylesheet">
    <script async="" charset="UTF-8" src="{{url('asset/js/meiqia.js')}}"></script>
    <script src="{{url('asset/js/jquery.js')}}"></script>
    <link rel="shortcut icon" href="{{url('asset/favicon.ico')}}" type="image/x-icon">
</head>
<body style="">

<div style="width: 0px; height: 0px; background-color: black; opacity: 0.03; overflow: hidden; border: 0px; position: absolute; left: 0px; top: 0px; z-index: 999999;"></div>
<div style="position: absolute; width: 400px; display: none; opacity: 0; z-index: 1000000; overflow: hidden; border: 0px; margin-left: 0px; margin-right: 0px; left: 261px; top: 353.575px;">
    <div style="width: auto; height: auto; background-color: transparent; overflow: hidden; border: 0px; margin-right: 0px; margin-left: 0px;">
        <div class="call365_inviteStyle4">

        </div></div></div><div style="width: 0px; height: 0px; background-color: black; opacity: 0.03; overflow: hidden; border: 0px; position: absolute; left: 0px; top: 0px; z-index: 999999;"></div>


<!--[if lte IE 8]> <p class="browserupgrade">您的浏览器版本无法流畅的阅览网页, 请切换浏览器模式到极速模式或更换浏览器, 以获取最佳的体验</p> <![endif]-->

<!--head begin-->
<div class="mo_top">
    <!--头部联系-->
    <div class="mo_top_phone"> <div class="mo_top_phone_center"> <div class="mo_top_fs"> <span class="mo_top_fs_img"><img src="{{url('asset/images/mo_45.png')}}" alt=""></span>&nbsp;&nbsp;眉山装修公司前三甲 眉山装修平台 | 乐趣·创意·幸福感   </div> <div class="mo_top_fu"> <span>服务时间：周一至周日9:00-23:00</span> <span class="mo_fu_to">服务电话：<span class="mo_fu_phone">18384105359</span></span> </div> </div> </div>
    <!--导航-->
    <!--导航-->
    <div class="mo_top_logo" style="top: 0px; z-index: 999; opacity: 0.9; position: relative; margin: 0px auto;">
        <div class="mo_top_logo_center">
            <!--左-->
            <div class="mo_top_logo_img">
                <div class="mo_top_logo_imgs"> <img style="width: 130px" src="{{url('asset/images/logo.jpg')}}" alt=""> </div>
                <div class="mo_top_logo_img_sss"></div>
                <div class="mo_top_logo_imgs"> <img src="{{url('asset/images/logos.jpg')}}" alt=""> </div>
            </div>
            <!--右-->
            <div class="mo_top_logo_you">
                <nav class="link">
                    <ul>
                        @foreach(\App\Model\Nav::nav() as $item)
                        <li class="n1 "> <a href=" @if($item->en_name == '/')  / @else /{{$item->en_name}}.html @endif" target="" class="hhd">{{$item->name}}</a> </li>
                        @endforeach

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!--head over-->
<!--轮播-->
@yield('content')

<!--报名-->
<div style="width:100%; height:332px; background:url(/asset/images/mo_90.jpg) center center no-repeat;">
    <div class="star_form">
        <div class="star_form_on">
            <form  id="taocan" enctype="multipart/form-data" method="post">
               {{csrf_field()}}
                <input type="hidden" name="diyid" value="1">
                <input type="hidden" name="do" value="2">
                <input type="text" class="star_input" id="name" placeholder="您的姓名" name="name">
                <input type="text" class="star_input" id="lianxi" placeholder="您的电话" name="lianxi">
                <input type="hidden" name="mianji" value="套餐页_报名">
                <input type="hidden" name="dede_fields" value="name,text;lianxi,text;mianji,text">
                <input type="hidden" name="dede_fieldshash" value="110e4f2b44c9fba134f57271a22912be">
                <input type="button" name="submit"  onclick="taocan()" class="coolbg3">
            </form>
            <script>
                function taocan() {
                    $.ajax({
                        //几个参数需要注意一下
                        type: "POST",//方法类型
                        dataType: "json",//预期服务器返回的数据类型
                        url: "/gongdipost" ,//url
                        data: $('#taocan').serialize(),
                        success: function (result) {
                            console.log(result);//打印服务端返回的数据(调试用)
                            if (result.status == 200) {
                                alert(result.msg);
                            }
                            ;
                        },
                        error : function() {
                            alert("异常！");
                        }
                    });
                }
            </script>
        </div>
    </div>
</div>

<!--底部开始-->


<div class="footer">
    <div class="footer_center">
        <div class="footer_center_on footer_center_sos">
            <div class="footer_center_sos_on">
                <div class="footer_center_sos_on_s1"> <img src="{{url('asset/images/mo_32.jpg')}}" alt=""> </div>
                <div class="footer_center_sos_on_s2"></div>
                <div class="footer_center_sos_on_s3"> <img src="{{url('asset/images/mo_33.jpg')}}" alt=""> </div>
            </div>
            <div class="footer_gao_sanshi"></div>
            <div class="footer_center_sos_to">
                <div class="footer_center_sos_to_s1"> <a href="https://e-64220.chatnow.meiqia.com/dist/standalone.html"><img src="{{url('asset/images/mo_34.jpg')}}" alt=""></a> </div>
                <div class="footer_center_sos_to_s1"> <a href="https://e-64220.chatnow.meiqia.com/dist/standalone.html"><img src="{{url('asset/images/mo_35.jpg')}}" alt=""></a> </div>
            </div>
        </div>
        <div class="footer_center_on footer_center_tot">
            <ul>
                <li class="footer_center_tot_title">关于我们</li>
                <a href="{{url('taocan/')}}">
                    <li>惠选套餐</li>
                </a> <a href="{{url('project/')}}">
                    <li>工程体系</li>
                </a> <a href="{{url('baoxian/')}}">
                    <li>装修保险</li>
                </a>
            </ul>
        </div>
        <div class="footer_center_on footer_center_tot">
            <ul>
                <li class="footer_center_tot_title">装修服务</li>
                <a href="https://e-146078.chatnow.meiqia.com/dist/standalone.html">
                    <li>在线咨询</li>
                </a> <a href="https://e-146078.chatnow.meiqia.com/dist/standalone.html">
                    <li>预约设计</li>
                </a> <a href="https://e-146078.chatnow.meiqia.com/dist/standalone.html">
                    <li>家装优惠</li>
                </a>
            </ul>
        </div>
        <div class="footer_center_on footer_center_coc">
            <ul>
                <li class="footer_center_tot_title">联系方式</li>
                <li>家装咨询：{{\App\Model\WebConf::get()->telphone}}</li>
                <li style="line-height: 25px;">公司地址：眉山市东坡区紫玉苑<br>
                    <br>
                </li></ul>
        </div>
        <div class="footer_center_on">
            <div class="footer_center_sos_to">
                <div class="footer_center_on_fof">
                    <div> <img src="{{url('asset/images/mo_36.png')}}" alt=""> </div>
                    <div class="footer_center_on_fof_title"> 装修报价 </div>
                </div>
                <div class="footer_center_on_fof footer_center_on_fofsto">
                    <div> <img src="{{url('asset/images/mo_36.png')}}" alt=""> </div>
                    <div class="footer_center_on_fof_title"> 微信客服 </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom"> Copyright  ©2010-2018 眉山装修平台 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank"></a> </div>
</div>
<!--底部报名-->
<div class="footer_offer" style="display: none;">
    <div class="footer_offer_center">
        <div class="footer_offer_cha"><img src="{{url('asset/images/mo_41.png')}}" alt=""></div>
        <div class="footer_offer_center_img"> <img src="{{url('asset/images/mo_37.png')}}" alt=""> </div>
        <!--报名-->
        <div>
            <h5 style="margin: 0 0 10px;
padding: 18px 0 0;
font-size: 18px;
color: #fff;
font-weight: 400;">目前已有<span style="color: #f7cc48;">1267</span>人获取了装修报价</h5>
            <form  id="userpost" enctype="multipart/form-data" method="post">
                {{csrf_field()}}

                <input type="hidden" name="action" value="post">
                <input type="hidden" name="diyid" value="1">
                <input type="hidden" name="do" value="2">
                <input type="text" class="footer_offer_center_input" id="mianji" name="area" placeholder="房屋面积                 ㎡">
                <input type="text" class="footer_offer_center_input" id="lianxi" name="telphone" placeholder="联系电话">
                <input type="hidden" name="name" value="底部弹框报名">
                <input type="hidden" name="dede_fields" value="name,text;lianxi,text;mianji,text">
                <input type="hidden" name="dede_fieldshash" value="110e4f2b44c9fba134f57271a22912be">
                <input type="button" name="button" onclick="userpost()" value="立即报价" class="coolbg">
            </form>

            <script>
                function userpost() {
                    $.ajax({
                        //几个参数需要注意一下
                        type: "POST",//方法类型
                        dataType: "json",//预期服务器返回的数据类型
                        url: "/userpost" ,//url
                        data: $('#userpost').serialize(),
                        success: function (result) {
                            console.log(result);//打印服务端返回的数据(调试用)
                            if (result.status == 200) {
                                alert(result.msg);
                            }
                            ;
                        },
                        error : function() {
                            alert("异常！");
                        }
                    });
                }
            </script>

        </div>
    </div>
</div>
<div class="footer_offer_cha_zhanxian" style="display: none;"> <img src="{{url('asset/images/mo_42.png')}}" alt=""> </div>

<div id="iconDiv1" style="height: auto; width: auto;">

    <div id="iconDivMain1" style="z-index: 10085; right: 10px; top: 100px; width: 106px; height: 429px; overflow: hidden; position: fixed; bottom: auto;">
        <div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 106px; height: 429px; position: relative; z-index: 10000; cursor: pointer;">
            <div class="Lelem" type="img" eld_img="/asset/images/icon_on_101531141545991981.png" style="display: block; cursor: pointer; position: absolute; left: 2px; top: 0px; width: 100px; height: 422px; z-index: 10001;"><img src="{{url('asset/images/icon_on_101531141545991981.png')}}" style="width: 100px; height: 422px;"></div>
            <div class="Lelem" type="img" eld_img="/asset/images/icon_on_101531141545992007.png" onclick="window.open(&#39;https://e-64220.chatnow.meiqia.com/dist/standalone.html&#39;,&#39;_blank&#39;)" style="display: block; cursor: pointer; position: absolute; left: 2px; top: 235px; width: 100px; height: 90px; z-index: 10002;"><img src="{{url('asset/images/icon_on_101531141545992007.png')}}" style="width: 100px; height: 90px;"></div>
            <div class="Lelem" type="img" eld_img="/asset/images/icon_on_101531141545991990.png" onclick="window.open(&#39;https://e-64220.chatnow.meiqia.com/dist/standalone.html&#39;,&#39;_blank&#39;)" style="display: block; cursor: pointer; position: absolute; left: 2px; top: 147px; width: 100px; height: 91px; z-index: 10004;"><img src="{{url('asset/images/icon_on_101531141545991990.png')}}" style="width: 100px; height: 91px;"></div>
            <div class="Lelem" type="img" eld_img="/asset/images/icon_on_101531141545992034.png" style="display: block; cursor: default; position: absolute; left: 2px; top: 327px; width: 100px; height: 90px; z-index: 10005;"><img src="{{url('asset/images/icon_on_101531141545992034.png')}}" style="width: 100px; height: 90px;"></div>
        </div>
    </div>
</div>

<!--底部结束-->

{{--百度自动推送--}}

<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

{{--百度统计--}}
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?8962fa53c50506581cff96d3bec79f50";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>


</body>
</html>
