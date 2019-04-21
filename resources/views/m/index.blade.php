<!DOCTYPE html>
<!-- saved from url=(0038)http://www.daohedesign.com/m/index.php -->
<html data-dpr="1" style="font-size: 64px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{$data->title}}</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="keyword" value="{{$data->keywords}}" content="webkit">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" href="{{url('asset/css/weui.min.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{url('asset/css/topic-fenggehui.css')}}">
    <!--basis script-->
    <script async="" charset="UTF-8" src="{{url('asset/js/meiqia.js')}}"></script>
    <script src="{{url('asset/js//adaptive.js')}}"></script>
    <script src="{{url('asset/js//jquery.min.js')}}"></script>
    <script src="{{url('asset/js/fastclick.js')}}"></script>
    <script src="{{url('asset/js/jquery.vticker.js')}}"></script>
    <script>
        window['adaptive'].desinWidth = 750;
        window['adaptive'].init();
    </script>
    <!-- map -->
    <style type="text/css" id="MEIQIA-ICON-STYLE">.MEIQIA-ICON {
            background-size: 40px auto !important;
            background-repeat: no-repeat !important;
            background-image: url('https://resource.meiqia.com/dist/images/icon-mq.png?v=crv1jluhe0d') !important;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2) {
            .MEIQIA-ICON {
                background-image: url('https://resource.meiqia.com/dist/images/icon-mq@2x.png?v=crv1jluhe0d') !important;
            }
        }

        .MEIQIA-ICON-CHAT1 {
            background-position: 0 0 !important;
        }

        .MEIQIA-ICON-CHAT2 {
            background-position: 0 -20px !important;
        }

        .MEIQIA-ICON-CHAT3 {
            background-position: 0 -40px !important;
        }

        .MEIQIA-ICON-CHAT4 {
            background-position: 0 -60px !important;
        }

        .MEIQIA-ICON-CHAT5 {
            background-position: 0 -80px !important;
        }

        .MEIQIA-ICON-CHAT6 {
            background-position: 0 -100px !important;
        }

        .MEIQIA-ICON-CHAT7 {
            background-position: 0 -120px !important;
        }

        .MEIQIA-ICON-CHAT8 {
            background-position: 0 -140px !important;
        }

        .MEIQIA-ICON-CHAT9 {
            background-position: 0 -160px !important;
        }

        .MEIQIA-ICON-CHAT10 {
            background-position: 0 -180px !important;
        }

        .MEIQIA-ICON-CHAT11 {
            background-position: 0 -200px !important;
        }

        .MEIQIA-ICON-CHAT12 {
            background-position: 0 -220px !important;
        }

        .MEIQIA-ICON-TICKET1 {
            background-position: -20px 0 !important;
        }

        .MEIQIA-ICON-TICKET2 {
            background-position: -20px -20px !important;
        }

        .MEIQIA-ICON-TICKET3 {
            background-position: -20px -40px !important;
        }

        .MEIQIA-ICON-TICKET4 {
            background-position: -20px -60px !important;
        }

        .MEIQIA-ICON-TICKET5 {
            background-position: -20px -80px !important;
        }

        .MEIQIA-ICON-TICKET6 {
            background-position: -20px -100px !important;
        }

        .MEIQIA-ICON-TICKET7 {
            background-position: -20px -120px !important;
        }

        .MEIQIA-ICON-TICKET8 {
            background-position: -20px -140px !important;
        }

        .MEIQIA-ICON-TICKET9 {
            background-position: -20px -160px !important;
        }

        .MEIQIA-ICON-TICKET10 {
            background-position: -20px -180px !important;
        }

        .MEIQIA-ICON-TICKET11 {
            background-position: -20px -200px !important;
        }

        .MEIQIA-ICON-TICKET12 {
            background-position: -20px -220px !important;
        } </style>
    <style type="text/css" id="MEIQIA-PANEL-STYLE"> .MEIQIA-FULL-HTML {
            position: static !important;
            width: 100% !important;
            height: 100% !important;
            overflow: visible !important;
        }

        .MEIQIA-FULL-BODY {
            position: fixed !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
            overflow: hidden !important;
        }

        #MEIQIA-PANEL-HOLDER {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            border: 0;
            overflow: hidden;
            visibility: hidden;
            opacity: 1;
            background: transparent;
        }

        #MEIQIA-IFRAME {
            display: none;
            position: relative;
            float: none;
            width: 100% !important;
            height: 100% !important;
            padding: 0;
            margin: 0;
            border: 0;
            background: none;
        }  </style>
    <style type="text/css" id="MEIQIA-BTN-STYLE">.BODY-FOR-MEIQIA {
            margin-bottom: 50px !important;
        }

        #MEIQIA-BTN-HOLDER {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 2147483647;
            width: 100%;
            height: auto;
            padding: 0;
            margin: 0;
            border: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, 'Hiragino Sans GB', 'Microsoft YaHei', sans-serif;
            background-color: transparent;
        }

        #MEIQIA-BTN, #MEIQIA-BTN span, #MEIQIA-BTN div, #MEIQIA-BTN img {
            float: none;
            width: auto;
            height: auto;
            padding: 0;
            margin: 0;
            border: 0;
            background: none;
        }

        #MEIQIA-BTN {
            display: block;
            width: 100%;
            height: 50px;
            text-align: center;
            line-height: 50px;
            text-decoration: none;
            border-top: 1px solid rgba(0, 0, 0, .1);
            box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16);
            background-color: #ff9500;
            color: #fff;
            font-size: 16px;
        }

        #MEIQIA-BTN #MEIQIA-BTN-ICON {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 15px 5px 0;
            vertical-align: top;
        }

        #MEIQIA-BTN #MEIQIA-BTN-LINE {
            display: none;
        }

        #MEIQIA-BTN #MEIQIA-BTN-TEXT {
            font-size: 16px;
            color: #fff;
        }

        #MEIQIA-BTN #MEIQIA-CIRCLE {
            position: absolute;
            top: -13px;
            right: 13px;
            display: none;
            width: 26px;
            height: 26px;
            text-align: center;
            line-height: 26px;
            font-size: 14px;
            color: #fff;
            border-radius: 15px;
            background-color: #ff3b30;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE {
            position: absolute;
            right: 2%;
            bottom: 75px;
            left: 2%;
            display: none;
            width: 96%;
            border: 1px solid #f7f7f7;
            color: #000;
            text-align: left;
            box-shadow: 0 5px 16px 0 rgba(0, 0, 0, .16);
            line-height: 1.428571429;
            background-color: #fff;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW1 {
            position: absolute;
            z-index: 2;
            font-size: 0;
            line-height: 0;
            border-width: 8px 7px 0px;
            border-color: #fff transparent;
            border-style: solid dashed dashed;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW2 {
            position: absolute;
            z-index: 1;
            font-size: 0;
            line-height: 0;
            border-width: 10px 8px 0px;
            border-color: #f7f7f7 transparent;
            border-style: solid dashed dashed;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW1 {
            right: 12px;
            bottom: -8px;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW2 {
            right: 11px;
            bottom: -10px;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-CLOSE {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 26px;
            height: 26px;
            background-position: 3px -238px;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-INSIDE {
            margin: 10px;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-AVATAR {
            width: 26px;
            height: 26px;
            border-radius: 13px;
            margin-right: 6px;
            vertical-align: top;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .15);
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-NAME {
            display: inline-block;
            margin-top: 3px;
            font-size: 16px;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-MSG {
            *height: 40px;
            max-height: 40px;
            margin-top: 5px;
            font-size: 14px;
            overflow: hidden;
        }

        #MEIQIA-BTN #MEIQIA-BUBBLE-MSG img {
            width: 16px;
            height: 16px;
        } </style>
    <style type="text/css" id="MEIQIA-INVITE-STYLE">#MEIQIA-INVITE, #MEIQIA-INVITE div, #MEIQIA-INVITE span {
            float: none;
            width: auto;
            height: auto;
            padding: 0;
            margin: 0;
            border: 0;
            background: none;
        }

        #MEIQIA-INVITE {
            position: fixed;
            z-index: 2147483647;
            display: none;
            width: 260px;
            height: 130px;
            border: 1px solid #f7f7f7;
            border-radius: 4px;
            box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16);
            text-align: left;
            cursor: pointer;
            color: #000;
            line-height: 1.428571429;
            background-color: #fff;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1, #MEIQIA-INVITE-ARROW2 {
            position: absolute;
            font-size: 0;
            line-height: 0;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1 {
            z-index: 2;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 {
            z-index: 1;
        }

        #MEIQIA-INVITE {
            right: 6%;
            bottom: 0;
            left: 6%;
            width: 88%;
            margin-bottom: 74px;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1 {
            right: 12px;
            bottom: -8px;
            border-top: 8px solid #fff;
            border-right: 7px solid transparent;
            border-left: 7px solid transparent;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 {
            right: 11px;
            bottom: -10px;
            border-top: 9px solid #f7f7f7;
            border-right: 8px solid transparent;
            border-left: 8px solid transparent;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-CLOSE {
            position: absolute;
            right: -20px;
            top: -20px;
            width: 40px;
            height: 40px;
            background-position: 0 -260px;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-CLOSE:active {
            background-position: 0 -300px;
        }

        #MEIQIA-INVITE #MEIQIA-INVITE-INSIDE {
            width: 88%;
            height: 44px;
            margin: 46px 6% 0;
            text-align: left;
            font-size: 14px;
            line-height: 22px;
            overflow: hidden;
            color: #000; /*word-break: break-all;*/
        } </style>
</head>
<body style="font-size: 0.24rem;" class=" BODY-FOR-MEIQIA">

<div class="four-step"></div>
<div class="vs-one">
    <form   enctype="multipart/form-data" method="post" id="taocan"
          name="subform" onsubmit="return InputCheck(this)">
        {{csrf_field()}}
        <input type="hidden" name="action" value="post">
        <input type="hidden" name="diyid" value="1">
        <input type="hidden" name="do" value="2">
        <div>
            <input name="username" placeholder="您的称呼" type="text">
        </div>
        <div>
            <input name="telphone" placeholder="您的联系方式" type="text">
        </div>a
        <div class="area">
            <input name="area" placeholder="您的房屋面积" type="text">
        </div>
        <input type="hidden" name="dede_fields" value="name,text;lianxi,text;mianji,text">
        <input type="hidden" name="dede_fieldshash" value="110e4f2b44c9fba134f57271a22912be">


        <a name="submit"  onclick="taocan()" class="submit"><b>免费获取装修报价</b><span>（已有<strong>1258</strong>人申请）</span></a>
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

    <div id="people1" class="people" style="overflow: hidden; position: relative; height: 69px;">
        <ul style="position: absolute; margin: 0px; padding: 0px; top: 0px;">


            <li style="margin: 0px; padding: 0px; height: 23px;">王女士 173XXXX2895 已报名 23秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">张女士 134XXXX3477 已报名 42秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">赵先生 186XXXX3422 已报名 55秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">王先生 142XXXX6643 已报名 10秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">辛先生 184XXXX3186 已报名 17秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">宋先生 135XXXX3755 已报名 20秒前</li>
        </ul>
    </div>
</div>
<div class="six-room">
    <div class="f-swiper swiper-container swiper-container-horizontal swiper-container-android">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-active" style="width: 480px;"><img
                    src="{{url('asset/images')}}/kt.jpg" alt=""></div>
            <div class="swiper-slide swiper-slide-next" style="width: 480px;"><img
                    src="{{url('asset/images')}}/ct.jpg" alt=""></div>
            <div class="swiper-slide" style="width: 480px;"><img src="{{url('asset/images')}}/cf.jpg"
                                                                 alt=""></div>
            <div class="swiper-slide" style="width: 480px;"><img src="{{url('asset/images')}}/sf.jpg"
                                                                 alt=""></div>
            <div class="swiper-slide" style="width: 480px;"><img src="{{url('asset/images')}}/ws.jpg"
                                                                 alt=""></div>
            <div class="swiper-slide" style="width: 480px;"><img src="{{url('asset/images')}}/xsj.jpg"
                                                                 alt=""></div>
        </div>
        <div class="swiper-pagination swiper-pagination-bullets"><span
                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                class="swiper-pagination-bullet"></span></div>
    </div>
</div>
<div class="new1"></div>
<div class="new2"></div>
<div class="new3"></div>
<div class="new4"></div>
<div class="new5"></div>
<div class="new6"></div>
<div class="new7"></div>
<div class="new8"></div>
<div class="new9"></div>
<div class="new10"></div>
<div class="new11"></div>
<div class="new12"></div>
<div class="reliable"></div>
<div class="vs-two">
    <form enctype="multipart/form-data" method="post" id="taocan1"
          name="subform2" onsubmit="return InputCheck(this)">
        {{csrf_field()}}
        <input type="hidden" name="action" value="post">
        <input type="hidden" name="diyid" value="1">
        <input type="hidden" name="do" value="2">
        <div>
            <input name="name" placeholder="您的称呼" type="text">
        </div>
        <div>
            <input name="lianxi" placeholder="您的联系方式" type="text">
        </div>
        <div class="area">
            <input name="mianji" placeholder="您的房屋面积" type="text">
        </div>
        <input type="hidden" name="dede_fields" value="name,text;lianxi,text;mianji,text">
        <input type="hidden" name="dede_fieldshash" value="110e4f2b44c9fba134f57271a22912be">

        <a name="submit"  onclick="taocan()" class="submit"><b>免费获取装修报价</b><span>（已有<strong>1258</strong>人申请）</span></a>
    </form>
    <script>
        function taocan() {
            $.ajax({
                //几个参数需要注意一下
                type: "POST",//方法类型
                dataType: "json",//预期服务器返回的数据类型
                url: "/gongdipost" ,//url
                data: $('#taocan1').serialize(),
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
    <div id="people2" class="people" style="overflow: hidden; position: relative; height: 69px;">
        <ul style="position: absolute; margin: 0px; padding: 0px; top: 0px;">


            <li style="margin: 0px; padding: 0px; height: 23px;">王女士 173XXXX2895 已报名 23秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">张女士 134XXXX3477 已报名 42秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">赵先生 186XXXX3422 已报名 55秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">王先生 142XXXX6643 已报名 10秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">辛先生 184XXXX3186 已报名 17秒前</li>
            <li style="margin: 0px; padding: 0px; height: 23px;">宋先生 135XXXX3755 已报名 20秒前</li>
        </ul>
    </div>
</div>
<a href="tel:18180089474"><img src="{{url('asset/images')}}/580c32d9ca78e.png"
                               style="position:fixed;right:10px;bottom:120px;width:19.5%;max-width:170px;"></a>
<!--plugins-->
<script src="{{url('asset/js/swiper.min.js')}}"></script>
<script>
    $(function () {
        $('.d-tab li').hover(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $('.img-group img').eq($(this).index()).show().siblings().hide();
        });
        var swiper = new Swiper('.f-swiper', {
            pagination: '.swiper-pagination'
        });
        var swiper1 = new Swiper('.g-swiper', {
            slidesPerView: 'auto',
            freeMode: true
        });
        var swiper2 = new Swiper('.i-swiper', {
            slidesPerView: 1.2,
            centeredSlides: true,
            paginationClickable: true,
            spaceBetween: 7,
            onSlideChangeEnd: function (swiper) {
                var index = swiper.activeIndex;
                $('.tab-tit li').eq(index).addClass('active').siblings().removeClass('active')
            }
        });
        $('.tab-tit li').click(function () {
            var index = $(this).index();
            $(this).addClass('active').siblings().removeClass('active');
            swiper2.slideTo(index, 1000, false);
        });
        $('.jz-g-tab li').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $('.g-tab-body .g-swiper').eq($(this).index()).show().siblings().hide();
        });
    })
</script>
<script>
    $(function () {
        $('#people1').vTicker({
            showItems: 3
        });
        $('#people2').vTicker({
            showItems: 3
        });
    })
</script>
<script type="text/javascript">
    (function (m, ei, q, i, a, j, s) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = 'https://static.meiqia.com/dist/meiqia.js?_=t';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', 64220);
</script>



<div id="MEIQIA-BTN-HOLDER" style="display: block;">
    <div id="MEIQIA-BTN"><span id="MEIQIA-BTN-ICON" class="MEIQIA-ICON MEIQIA-ICON-TICKET1"></span> <span
            id="MEIQIA-BTN-LINE"></span> <span id="MEIQIA-BTN-TEXT">免费咨询装修报价</span> <span id="MEIQIA-CIRCLE"></span>
        <div id="MEIQIA-BUBBLE"><span id="MEIQIA-BUBBLE-ARROW1"></span> <span id="MEIQIA-BUBBLE-ARROW2"></span> <span
                id="MEIQIA-BUBBLE-CLOSE" class="MEIQIA-ICON"></span>
            <div id="MEIQIA-BUBBLE-INSIDE"><img id="MEIQIA-BUBBLE-AVATAR"> <span id="MEIQIA-BUBBLE-NAME"></span>
                <div id="MEIQIA-BUBBLE-MSG"></div>
            </div>
        </div>
    </div>
</div>
<div id="MEIQIA-INVITE"><span id="MEIQIA-INVITE-CLOSE" class="MEIQIA-ICON"></span>
    <div id="MEIQIA-INVITE-INSIDE">您好，当前有专业客服人员在线，让我们来帮助您吧。</div>
    <span id="MEIQIA-INVITE-ARROW1"></span> <span id="MEIQIA-INVITE-ARROW2"></span></div>
</body>
</html>
