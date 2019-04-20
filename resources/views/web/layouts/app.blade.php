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
    <link href="{{url('asset/css/normalize.min.css')}}" rel="stylesheet">
    <script async="" charset="UTF-8" src="{{url('asset/js/meiqia.js')}}"></script>
    <script src="{{url('asset/js/jquery.js')}}"></script>
    <script src="{{url('asset/js/jquery.SuperSlide.js')}}"></script>
    <script src="{{url('asset/js/layer.js')}}"></script>
    <script src="{{url('asset/js/main.js')}}"></script>
    <script src="{{url('asset/js/jquery.cookie.min.js')}}"></script>
    <!--[if lt IE 9]> <script type="text/javascript" src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script> <![endif]-->
    <link rel="shortcut icon" href="{{url('asset/favicon.ico')}}" type="image/x-icon">
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/index.php">
    <script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="/m/index.php";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
    <script type="text/javascript" src="{{url('asset/js/e.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/f.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/l.js')}}"></script>

    <style type="text/css">.webcall_message_show_155454440919621{ position: fixed;top:80px; left:0px; width:21px;display:none;z-index: 999999; OVERFLOW: hidden;border: 0; MARGIN-LEFT: 0; MARGIN-RIGHT: 0;}</style><style type="text/css">.call365_inviteStyle4{width: 399px;height:181px;background:url(http://www.365webcall.com/image/style/invite/bg_02.png) no-repeat left top;margin: auto;}.call365_inviteStyle4 .call365_inviteContent{ position:relative; width: 240px;height:120px;padding-top: 45px;padding-left:143px;}.call365_inviteStyle4 .call365_invite_logo{width:52px;height:18px; position:absolute; top:45px; right:0; Z-INDEX: 3;}.call365_inviteStyle4 .call365_invite_content_panel{position:relative; width: 240px;height:120px;WORD-WRAP: break-word;}.call365_inviteStyle4 .call365_invite_text_01{font-family: Arial, Helvetica, sans-serif;font-size: 12px;text-align:left;color: #085771;line-height: 18px;text-decoration: none;}.call365_inviteStyle4 .call365_invite_text_02{font-family: Arial, Helvetica, sans-serif;font-size: 10px;text-align:right;color: #fff;text-decoration: none;}.call365_inviteStyle4 .call365_invite_openChat{position:absolute; bottom:20px; right:150px; width:78px; height:25px; background:url(http://www.365webcall.com/image/style/invite/button_03.png) no-repeat left top;}.call365_inviteStyle4 .call365_invite_hide{position:absolute; bottom:20px; right:50px; width:78px; height:25px; background:url(http://www.365webcall.com/image/style/invite/button_02.png) no-repeat left top;}.webcall_form_floatlist3 {	font-family: 微软雅黑, Arial, Verdana, Geneva, sans-serif;	font-size:12px; }.webcall_form_floatlist3 .webcall_title{	height:32px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/001.gif) repeat-x left top;	font-size:13px;	font-weight:bold;	line-height:26px;	color:#fff;}.webcall_form_floatlist3 .webcall_title1{	font-size:13px;	font-weight:bold;	line-height:26px;	color:#fff;}.webcall_form_floatlist3 .webcall_td_01{    border-left:1px solid #B3C9B3;	border-right:1px solid #B3C9B3;	border-bottom:1px solid #B3C9B3;}.webcall_form_floatlist3 .webcall_table{    border:1px solid #fff;	background:#EDF3EA url(http://www.365webcall.com/image/style/floatlist/339900/002.gif) repeat-x left top;	height:62px;}.webcall_form_floatlist3 .webcall_text01{    color:#346834;	font-weight:bold;	font-size:12px;	line-height:22px;	text-indent: 3pt;    text-decoration:none;    cursor:pointer;    margin-left: 3px;}.webcall_form_floatlist3 .webcall_td_02{    background:#339900 url(http://www.365webcall.com/image/style/floatlist/339900/009.gif) repeat-x left top;	height:77px;	padding: 8px 8px 5px 10px;}.webcall_form_floatlist3 .webcall_text02{    color:#CCFFCC;	font-weight:bold;	font-size:12px;	line-height:18px;}.webcall_form_floatlist3 .webcall_text03{    color:#CCFFCC;	font-size:12px;	line-height:18px;}.webcall_form_floatlist3 .webcall_text{	font-size:12px;	line-height:22px;}.webcall_form_floatlist3 .webcall_text04{    color:#346834;	font-size:12px;	line-height:22px;	text-indent: 3pt;    text-decoration:none;    cursor:pointer;}.webcall_form_floatlist3 .webcall_text05{    color:#717171;	font-size:12px;	line-height:22px;	text-indent: 3pt;    text-decoration:none;    cursor:pointer;}.webcall_form_floatlist3 .webcall_td_03{    background:url(http://www.365webcall.com/image/style/floatlist/339900/010.gif) repeat-x left top;	height:26px;}.webcall_form_floatlist3 .webcall_table_01{    border:1px solid #fff;	background:#EDF3EA url(http://www.365webcall.com/image/style/floatlist/339900/011.gif) repeat-x left top;	height:31px;}.webcall_form_floatlist3 .webcall_close{    height:11px;    width:10px;    font-size:1px;    background-image:url(http://www.365webcall.com/image/style/floatlist/339900/close0.gif);}.webcall_form_floatlist3 .webcall_logo{    height:26px;     width:67px;    background:url(http://www.365webcall.com/image/style/floatlist/339900/logo.gif) no-repeat left top;}.webcall_form_floatlist3 .webcall_titlea{	height:32px;	width:3px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/001a.gif) no-repeat left top;}.webcall_form_floatlist3 .webcall_titleb{	height:32px;	width:4px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/001b.gif) no-repeat left top;}.webcall_form_floatlist3 .webcall_td_03a{	height:26px;	width:3px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/010a.gif) no-repeat left top;}.webcall_form_floatlist3 .webcall_td_03b{	height:26px;	width:4px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/010b.gif) no-repeat left top;}.webcall_form_floatlist3 .webcall_divArrow_d{	height:19px;	width:14px;    margin-top:4px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/003.gif) no-repeat;}.webcall_form_floatlist3 .webcall_divArrow_r1{	height:19px;	width:14px;    margin-top:4px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/003r1.gif) no-repeat;}.webcall_form_floatlist3 .webcall_divArrow_r2{	height:19px;	width:14px;    margin-top:4px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/003r2.gif) no-repeat;}.webcall_form_floatlist3 .webcall_divChatLogo{	height:16px;	width:18px;	background:url(http://www.365webcall.com/image/style/floatlist/339900/004.gif) no-repeat;}.webcall_form_floatlist3 .webcall_ico{    height:11px;     width:11px;    font-size:1px;    background-image:url(http://www.365webcall.com/image/style/floatlist/339900/ico_01.gif);}.webcall_form_floatlist3 .webcall_shopex_logo{    height:26px;     width:67px;    background:url(http://www.365webcall.com/image/style/floatlist/339900/shopex_logo.gif) no-repeat left top;}</style><style type="text/css">.webcall_message_show_1554544409199262{ position: fixed;top:50px; left:20px; width:262px;display:none;z-index: 1000000; OVERFLOW: hidden;border: 0; MARGIN-LEFT: 0; MARGIN-RIGHT: 0;}</style><style type="text/css" id="MEIQIA-ICON-STYLE">.MEIQIA-ICON { background-size: 40px auto !important; background-repeat: no-repeat !important; background-image: url('https://resource.meiqia.com/dist/images/icon-mq.png?v=crv1jluhe0d') !important; } @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2) { .MEIQIA-ICON { background-image: url('https://resource.meiqia.com/dist/images/icon-mq@2x.png?v=crv1jluhe0d') !important; } } .MEIQIA-ICON-CHAT1 { background-position: 0 0 !important; } .MEIQIA-ICON-CHAT2 { background-position: 0 -20px !important; } .MEIQIA-ICON-CHAT3 { background-position: 0 -40px !important; } .MEIQIA-ICON-CHAT4 { background-position: 0 -60px !important; } .MEIQIA-ICON-CHAT5 { background-position: 0 -80px !important; } .MEIQIA-ICON-CHAT6 { background-position: 0 -100px !important; } .MEIQIA-ICON-CHAT7 { background-position: 0 -120px !important; } .MEIQIA-ICON-CHAT8 { background-position: 0 -140px !important; } .MEIQIA-ICON-CHAT9 { background-position: 0 -160px !important; } .MEIQIA-ICON-CHAT10 { background-position: 0 -180px !important; } .MEIQIA-ICON-CHAT11 { background-position: 0 -200px !important; } .MEIQIA-ICON-CHAT12 { background-position: 0 -220px !important; } .MEIQIA-ICON-TICKET1 { background-position: -20px 0 !important; } .MEIQIA-ICON-TICKET2 { background-position: -20px -20px !important; } .MEIQIA-ICON-TICKET3 { background-position: -20px -40px !important; } .MEIQIA-ICON-TICKET4 { background-position: -20px -60px !important; } .MEIQIA-ICON-TICKET5 { background-position: -20px -80px !important; } .MEIQIA-ICON-TICKET6 { background-position: -20px -100px !important; } .MEIQIA-ICON-TICKET7 { background-position: -20px -120px !important; } .MEIQIA-ICON-TICKET8 { background-position: -20px -140px !important; } .MEIQIA-ICON-TICKET9 { background-position: -20px -160px !important; } .MEIQIA-ICON-TICKET10 { background-position: -20px -180px !important; } .MEIQIA-ICON-TICKET11 { background-position: -20px -200px !important; } .MEIQIA-ICON-TICKET12 { background-position: -20px -220px !important; } </style><style type="text/css" id="MEIQIA-PANEL-STYLE">#MEIQIA-PANEL-HOLDER { position: fixed; bottom: 0;  right: 30px;  z-index: -1; width: 320px; height: 480px; padding: 0; margin: 0; overflow: hidden; visibility: hidden; background-color: transparent; box-shadow: 0 0 20px 0 rgba(0, 0, 0, .15); border: 1px solid #eee\0; *border: 1px solid #eee; } #MEIQIA-IFRAME { position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: none; width: 100% !important; height: 100% !important; border: 0; padding: 0; margin: 0; float: none; background: none; } </style><style type="text/css" id="MEIQIA-BTN-STYLE">#MEIQIA-BTN-HOLDER { display: none; position: fixed; bottom: 0;  right: 70px;  z-index: 2147483647; width: auto; height: auto; padding: 0; margin: 0; border: 0; font-family: 'Helvetica Neue', Helvetica, Arial, 'Hiragino Sans GB', 'Microsoft YaHei', sans-serif; background-color: transparent; } #MEIQIA-BTN, #MEIQIA-BTN span, #MEIQIA-BTN div, #MEIQIA-BTN img { float: none; width: auto; height: auto; padding: 0; margin: 0; border: 0; background: none; } #MEIQIA-BTN { display: block; height: 40px; font-size: 16px; color: #fff; text-align: center; border-left: 1px solid rgba(0, 0, 0, .1); border-top: 1px solid rgba(0, 0, 0, .1); border-right: 1px solid rgba(0, 0, 0, .1); box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16); cursor: pointer; text-decoration: none; background-color: #339999; } #MEIQIA-BTN #MEIQIA-BTN-ICON { display: block; float: left; width: 20px; height: 20px; margin: 10px 10px 0; } #MEIQIA-BTN #MEIQIA-BTN-LINE { display: block; float: left; width: 1px; height: 100%; background-color: rgba(0, 0, 0, .08); background-color: #000\9; opacity: .1\9; filter: alpha(opacity=10)\9; vertical-align: middle; } #MEIQIA-BTN #MEIQIA-BTN-TEXT { display: block; float: left; height: 40px; margin: 0 10px; line-height: 40px; overflow-y: hidden; font-size: 16px; color: #fff; } #MEIQIA-BTN #MEIQIA-CIRCLE { position: absolute; top: -13px; left: -13px; display: none; width: 26px; height: 26px; text-align: center; line-height: 26px; font-size: 14px; color: #fff; border-radius: 15px; background-color: #ff3b30; } #MEIQIA-BTN #MEIQIA-BUBBLE { position: absolute; bottom: 64px; display: none; width: 260px; border: 1px solid #f7f7f7; border-radius: 4px; color: #000; text-align: left; box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16); line-height: 1.428571429; background-color: #fff; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW1 { position: absolute; z-index: 2; font-size: 0; line-height: 0; border-width: 8px 7px 0px; border-color: #fff transparent; border-style: solid dashed dashed; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW2 { position: absolute; z-index: 1; font-size: 0; line-height: 0; border-width: 10px 8px 0px; border-color: #f7f7f7 transparent; border-style: solid dashed dashed; }  #MEIQIA-BTN #MEIQIA-BUBBLE { right: 0; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW1 { right: 12px; bottom: -8px; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW2 { right: 11px; bottom: -10px; }  #MEIQIA-BTN #MEIQIA-BUBBLE-CLOSE { position: absolute; display: none; top: 12px; right: 12px; width: 10px; height: 10px; background-position: -5px -245px; cursor: pointer; } #MEIQIA-BTN #MEIQIA-BUBBLE:hover #MEIQIA-BUBBLE-CLOSE { display: block; } #MEIQIA-BTN #MEIQIA-BUBBLE-INSIDE { margin: 12px 18px; } #MEIQIA-BTN #MEIQIA-BUBBLE-AVATAR { width: 26px; height: 26px; border-radius: 13px; margin-right: 6px; vertical-align: top; box-shadow: 0 0 8px 0 rgba(0, 0, 0, .15); } #MEIQIA-BTN #MEIQIA-BUBBLE-NAME { display: inline-block; margin-top: 3px; font-size: 16px; color: #000; } #MEIQIA-BTN #MEIQIA-BUBBLE-MSG { *height: 40px; max-height: 40px; margin-top: 5px; font-size: 14px; overflow: hidden; color: #000; } #MEIQIA-BTN #MEIQIA-BUBBLE-MSG img { width: 16px; height: 16px; } </style><style type="text/css" id="MEIQIA-INVITE-STYLE">#MEIQIA-INVITE, #MEIQIA-INVITE div, #MEIQIA-INVITE img, #MEIQIA-INVITE a { float: none; width: auto; height: auto; padding: 0; margin: 0; border: 0; background: none; } #MEIQIA-INVITE { display: none; position: fixed;  margin: -144px 0 0 -320px;;   top: 50%; left: 50%;  z-index: 2147483647; width: 640px; height: 288px; } #MEIQIA-INVITE #MEIQIA-INVITE-BG { position: absolute; top: 0; left: 0; z-index: 1; width: 100%; height: 100%; } #MEIQIA-INVITE #MEIQIA-INVITE-ACTIONS { position: relative; top: 0; left: 0; z-index: 2; width: 100%; height: 100%; }  #MEIQIA-INVITE #MEIQIA-INVITE-ACTION-0 { display: block; position: absolute; top: 187px; left: 114px; width: 108px; height: 43px; cursor: pointer; background-image: url(about:blank); // 解决 IE10 以下空的 absolute a 标签无法响应 click 的问题 }  #MEIQIA-INVITE #MEIQIA-INVITE-ACTION-1 { display: block; position: absolute; top: 185px; left: 236px; width: 121px; height: 48px; cursor: pointer; background-image: url(about:blank); // 解决 IE10 以下空的 absolute a 标签无法响应 click 的问题 }  </style></head>
<body style="">

<div style="width: 0px; height: 0px; background-color: black; opacity: 0.03; overflow: hidden; border: 0px; position: absolute; left: 0px; top: 0px; z-index: 999999;"></div><div style="position: absolute; width: 400px; display: none; opacity: 0; z-index: 1000000; overflow: hidden; border: 0px; margin-left: 0px; margin-right: 0px; left: 261px; top: 353.575px;"><div style="width: auto; height: auto; background-color: transparent; overflow: hidden; border: 0px; margin-right: 0px; margin-left: 0px;"><div class="call365_inviteStyle4">
            <div class="call365_inviteContent">
                <div class="call365_invite_content_panel">
                    <span id="_365call_spanCont_OnlineSupport_365webcall_80157" class="call365_invite_text_01" style="position:absolute; top:20px; left:0;">您好！如有问题请点击在线咨询</span>
                    <a class="call365_invite_openChat" style="cursor: pointer" onclick="javascript:OnlineSupport_365webcall_80157._openChatWin(OnlineSupport_365webcall_80157._365call_Invite_UserID, 1);OnlineSupport_365webcall_80157._hideInvite(true);" onmouseover="javascript:OnlineSupport_365webcall_80157._openChatWin(OnlineSupport_365webcall_80157._365call_Invite_UserID,1,this);" target="_blank"></a>
                    <div class="call365_invite_hide" style="cursor: pointer" onclick="javascript:OnlineSupport_365webcall_80157._hideInvite();"></div>
                    <a href="http://www.365webcall.com/" target="_blank" style="position:absolute; bottom:0; right:0; line-height:15px;" class="call365_invite_text_02">Powered by 365webcall</a>
                </div>
                <div class="call365_invite_logo">
                    <a href="http://www.365webcall.com/" target="_blank"><img src="{{url('asset/images/logo.gif')}}" width="52" height="18" border="0"></a>
                </div>
            </div>
        </div></div></div><div style="width: 0px; height: 0px; background-color: black; opacity: 0.03; overflow: hidden; border: 0px; position: absolute; left: 0px; top: 0px; z-index: 999999;"></div><div class="webcall_message_show_1554544409199262"><div style="width: auto; height: auto; background-color: transparent; overflow: hidden; border: 0px; margin-right: 0px; margin-left: 0px;"><table width="262" border="0" cellspacing="0" cellpadding="0" class="webcall_form_floatlist3"><tbody><tr>
                <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
                            <td width="3" class="webcall_titlea"></td>
                            <td width="255" align="center" valign="top" class="webcall_title"><table width="244" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
                                        <td align="left" class="webcall_title1">在线客服</td>
                                        <td width="11" align="right" valign="middle">
                                            <div style="cursor:pointer;" onclick="javascript:OnlineSupport_365webcall_80157._hidePanel();" class="webcall_close"></div></td>
                                    </tr></tbody></table></td>
                            <td width="4" class="webcall_titleb"></td></tr></tbody></table></td></tr>
            <tr><td class="webcall_td_01"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="webcall_table_01" id="_365call_listTop_OnlineSupport_365webcall_80157_2">
                        <tbody><tr><td align="center" valign="middle"><table width="241" border="0" cellspacing="0" cellpadding="0">
                                    <tbody><tr><td width="14"><div class="webcall_divArrow_d" style="display:none;" id="_365call_listGroup_img_down_OnlineSupport_365webcall_80157_2"></div>
                                            <div class="webcall_divArrow_r2" id="_365call_listGroup_img_up_OnlineSupport_365webcall_80157_2"></div></td>
                                        <td align="left"><a onclick="javascript:OnlineSupport_365webcall_80157._openGroupChatWin(2, 3);" onmouseover="javascript:OnlineSupport_365webcall_80157._openGroupChatWin(2, 3,this);" class="webcall_text01" target="_blank">报价咨询</a></td>
                                        <td width="18"><div class="webcall_divChatLogo"></div></td>
                                    </tr></tbody></table></td></tr></tbody></table></td></tr><tr><td class="webcall_td_01"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="webcall_table" id="_365call_listTop_OnlineSupport_365webcall_80157_7">
                        <tbody><tr><td align="center" valign="middle"><table width="241" border="0" cellspacing="0" cellpadding="0" style="cursor: pointer" onclick="javascript:_365call2_collapse(&#39;_365call_listGroup_OnlineSupport_365webcall_80157_7&#39;, &#39;_365call_listGroup_img_up_OnlineSupport_365webcall_80157_7&#39;, &#39;_365call_listGroup_img_down_OnlineSupport_365webcall_80157_7&#39;, &#39;_365call_listTop_OnlineSupport_365webcall_80157_7&#39;);">
                                    <tbody><tr><td width="14"><div class="webcall_divArrow_d" id="_365call_listGroup_img_down_OnlineSupport_365webcall_80157_7"></div>
                                            <div class="webcall_divArrow_r1" style="display:none;" id="_365call_listGroup_img_up_OnlineSupport_365webcall_80157_7"></div></td>
                                        <td align="left"><a class="webcall_text01" target="_blank">咨询热线</a></td>
                                        <td width="18"><div class="webcall_divChatLogo"></div></td>
                                    </tr></tbody></table><table width="241" border="0" cellspacing="0" cellpadding="0" id="_365call_listGroup_OnlineSupport_365webcall_80157_7">
                                    <tbody><tr><td align="right"><table width="234" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td colspan="3" align="left" class="webcall_text"><b>400-888-8888</b></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr style="display:none;"><td align="left" valign="middle" class="webcall_td_02 webcall_text03">
                </td></tr><tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
                            <td width="3" class="webcall_td_03a"></td><td class="webcall_td_03" align="right">
                                <div class="webcall_logo" style="margin-right:5px; "><a href="http://www.365webcall.com/" target="_blank"><img src="{{url('asset/images/noimage.gif')}}" border="0" height="26px" width="67px"></a></div>
                            </td><td width="4" class="webcall_td_03b"></td>
                        </tr></tbody></table></td></tr></tbody></table></div></div><div style="width: 0px; height: 0px; background-color: black; opacity: 0.03; overflow: hidden; border: 0px; position: absolute; left: 0px; top: 0px; z-index: 999998;"></div><div class="webcall_message_show_155454440919621" style="display: none;"><div style="width: auto; height: auto; background-color: transparent; overflow: hidden; border: 0px; margin-right: 0px; margin-left: 0px;"><div style="cursor: pointer; " onmouseover="javascript:OnlineSupport_365webcall_80157._365call_minIcon_Float.hide();javascript:OnlineSupport_365webcall_80157.Show();"><img src="{{url('asset/images/m13_L.png')}}" border="0"></div></div></div>
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
<div class="footer_offer_cha_zhanxian" style="display: block;"> <img src="{{url('asset/images/mo_42.png')}}" alt=""> </div>

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



<div id="MEIQIA-BTN-HOLDER" style="display: block;">
    <div id="MEIQIA-BTN">
        <span id="MEIQIA-BTN-ICON" class="MEIQIA-ICON MEIQIA-ICON-TICKET1"></span>
        <span id="MEIQIA-BTN-LINE"></span>
        <span id="MEIQIA-BTN-TEXT">咨询装修方案</span>
        <span id="MEIQIA-CIRCLE"></span>
        <div id="MEIQIA-BUBBLE">
            <span id="MEIQIA-BUBBLE-ARROW1"></span>
            <span id="MEIQIA-BUBBLE-ARROW2"></span>
            <span id="MEIQIA-BUBBLE-CLOSE" class="MEIQIA-ICON"></span>
            <div id="MEIQIA-BUBBLE-INSIDE">
                <img id="MEIQIA-BUBBLE-AVATAR">
                <span id="MEIQIA-BUBBLE-NAME"></span>
                <div id="MEIQIA-BUBBLE-MSG"></div> </div>
        </div>
    </div>
</div>
<div id="MEIQIA-INVITE">
    <img src="{{url('asset/images/75bf59a74d8991a143a0787ff1f17892.png')}}" id="MEIQIA-INVITE-BG">
    <div id="MEIQIA-INVITE-ACTIONS">
        <a id="MEIQIA-INVITE-ACTION-0" href="javascript:void(0);" name="meiqiaInviteAccept"></a>
        <a id="MEIQIA-INVITE-ACTION-1" href="javascript:void(0);" name="meiqiaInviteReject"></a>
    </div>
</div>


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
