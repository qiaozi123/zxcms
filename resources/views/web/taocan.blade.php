@extends('web.layouts.app')
@section('title',\App\Model\Nav::TDK('taocan')->title)
@section('keywords',\App\Model\Nav::TDK('taocan')->keywords)
@section('description',\App\Model\Nav::TDK('taocan')->description)
@section('content')
    <!--head over-->
    <div class="sjzz_1920" onclick="window.open(&#39;/taocan&#39;,&#39;_blank&#39;)" style="cursor: pointer; ">
        <div style="width:100%; height:550px; background:url(&#39;/asset/images/9lb.jpg&#39;) center center no-repeat;"></div>
    </div>
    <div style="width:100%; height:726px; background:url(/asset/images/mo_91.jpg) center center no-repeat;">
        <div class="product_nei">
            <div class="product_nei_zo"> <img src="{{url('asset/images/20181219_5c1a2210927b6.jpg')}}" alt=""> </div>
            <div class="product_nei_on"> <img src="{{url('asset/images/20181219_5c1a2210c412b.jpg')}}" alt=""> </div>
        </div>
    </div>
    <!--客餐厅-->
    <div style="width:100%; height:568px; background:url(/asset/images/mo_92.jpg) center center no-repeat;">
        <div class="product_nei">
            <div class="product_nei_to"> <img src="{{url('asset/images/20181219_5c1a221118696.jpg')}}" alt=""> </div>
            <div class="product_nei_so"> <img src="{{url('asset/images/20181219_5c1a221151a1d.jpg')}}" alt=""> </div>
            <!--餐厅-->
            <div class="product_nei_ct">
                <div> <img src="{{url('asset/images/20181219_5c1a21f25d138.jpg')}}" alt=""> </div>
                <div class="product_nei_ct_ss">
                    <!--基装-->

                    <div class="product_nei_ct_ss_ji">
                        <div class="product_nei_ct_ss_ji_ss"> 基装: </div>
                        <div class="product_nei_ct_ss_ji_sss">
                            <p>① 墙、顶面乳胶漆 </p>
                            <p>② 地面砂浆找平（≤3cm）</p>
                            <p>或大地砖正铺贴、专用勾缝人工及材料</p>
                            <p>③ 墙顶面乳胶漆基层处理</p>
                            <p>④ 个性化造型（含15个平方吊顶造型）</p>
                        </div>
                    </div>
                    <!--主材-->
                    <div class="product_nei_ct_ss_zhu">
                        <div class="product_nei_ct_ss_ji_ss"> 主材: </div>
                        <div class="product_nei_ct_ss_zhu_sss">
                            <p>① 强化木地板或大地砖</p>
                            <p>② 含入户门套</p>
                            <p>③ 含门槛砖</p>
                            <p>④ 含实木踢脚线</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--卧室-->
    <div style="width:100%; height:690px; background:url(/asset/images/mo_93.jpg) center center no-repeat;">
        <div class="product_nei">
            <div class="product_nei_fo"> <img src="{{url('asset/images/20181219_5c1a221151a1d.jpg')}}" alt=""> </div>
            <!--基装-->
            <div class="product_nei_wo">
                <div> <img src="{{url('asset/images/20181219_5c1a21f6a95ec.jpg')}}" alt=""> </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 基装: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 墙、顶面乳胶漆</p>
                        <p>② 地面砂浆找平（≤3cm）</p>
                        <p>③ 墙顶面乳胶漆基层处理</p>
                    </div>
                </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 主材: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 强化木地板</p>
                        <p>② 飘窗木地板或石材</p>
                        <p>③ 实木复合平开门及锁具</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--餐厨-->
    <div style="width:100%; height:926px; background:url(/asset/images/mo_94.jpg) center center no-repeat;">
        <div class="product_nei">
            <!--餐厨-->
            <div class="product_nei_can">
                <div> <img src="{{url('asset/images/20181219_5c1a21fab4d07.jpg')}}" alt=""> </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 基装: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 墙、地砖正铺贴及辅料人工</p>
                        <p>② 包水管1处</p>
                        <p>③ 墙砖碰角处理</p>
                        <p>④ 门槛石及铺贴</p>
                        <p>⑤ 防水及人工</p>
                    </div>
                </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 主材: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 厨房墙地砖</p>
                        <p>② 橱柜</p>
                        <p>③ 铝扣板吊顶及辅料</p>
                        <p>④ 钛合金门及锁具</p>
                        <p>⑤ 地漏</p>
                    </div>
                </div>
            </div>
            <div class="product_nei_fv"> <img src="{{url('asset/images/20181219_5c1a2211b0ffe.jpg')}}" alt=""> </div>
            <div class="product_nei_sx"> <img src="{{url('asset/images/20181219_5c1a22122f4cc.jpg')}}" alt=""> </div>
        </div>
    </div>
    <!--卫生间-->
    <div style="width:100%; height:640px; background:url(/asset/images/mo_95.jpg) center center no-repeat;">
        <div class="product_nei">
            <div> <img src="{{url('asset/images/20181219_5c1a221270265.jpg')}}" alt=""> </div>
            <!--基装-->
            <div class="product_nei_wei">
                <div> <img src="{{url('asset/images/20181219_5c1a21fedaf61.jpg')}}" alt=""> </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 基装: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 墙、地砖正铺贴及辅料人工、专用勾缝剂</p>
                        <p>② 包水管1处</p>
                        <p>③ 墙砖碰角处理</p>
                        <p>④ 门槛石及铺贴</p>
                        <p>⑤ 防水及人工</p>
                    </div>
                </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 主材: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 卫生间墙地砖</p>
                        <p>② 洁具（坐便或蹲便、浴室柜、花洒）</p>
                        <p>③ 铝扣板吊顶及辅料</p>
                        <p>④ 钛合金门及锁具</p>
                        <p>⑤ 地漏</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--阳台-->
    <div style="width:100%; height:717px; background:url(/asset/images/mo_96.jpg) center center no-repeat;">
        <div class="product_nei">
            <!--基装-->
            <div class="product_nei_yang">
                <div> <img src="{{url('asset/images/20181219_5c1a2206c0422.jpg')}}" alt=""> </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 基装: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 顶面乳胶漆</p>
                        <p>② 地砖正铺贴及辅料人工</p>
                        <p>③ 返沿铺贴</p>
                        <p>④ 顶面乳胶漆基层处理</p>
                        <p>⑤ 防水及人工</p>
                    </div>
                </div>
                <div class="product_nei_ct_ss_zhu">
                    <div class="product_nei_ct_ss_ji_ss"> 主材: </div>
                    <div class="product_nei_ct_ss_zhu_sss">
                        <p>① 阳台地砖</p>
                        <p>② 地漏</p>
                    </div>
                </div>
            </div>
            <div class="product_nei_sit"> <img src="{{url('asset/images/20181219_5c1a2212c412b.jpg')}}" alt=""> </div>
        </div>
    </div>
    <!--商家轮播手风琴-->
    <div style="width:100%; height:823px; background:url(/asset/images/mo_84.jpg) center center no-repeat;">
        <div style="height: 150px;"></div>
        <div class="star_center lyLun">
            <ul class="lyLunBox">
                <li class="lyLunList lyLunAct" style="width: 992px;">
                    <div class="lyLunHover" style="display: none;"><img src="{{url('asset/images/q_04.jpg')}}" alt=""></div>
                    <div class="lyLunHide"><img src="{{url('asset/images/q_4.jpg')}}" alt=""></div>
                </li>
                <li class="lyLunList" style="width: 52px;">
                    <div class="lyLunHover"><img src="{{url('asset/images/q_05.jpg')}}" alt=""></div>
                    <div class="lyLunHide"><img src="{{url('asset/images/q_5.jpg')}}" alt=""></div>
                </li>
                <li class="lyLunList" style="width: 52px;">
                    <div class="lyLunHover"><img src="{{url('asset/images/q_03.jpg')}}" alt=""></div>
                    <div class="lyLunHide"><img src="{{url('asset/images/q_3.jpg')}}" alt=""></div>
                </li>
                <li class="lyLunList" style="width: 52px;">
                    <div class="lyLunHover"><img src="{{url('asset/images/q_01.jpg')}}" alt=""></div>
                    <div class="lyLunHide"><img src="{{url('asset/images/q_1.jpg')}}" alt=""></div>
                </li>
                <li class="lyLunList" style="width: 52px;">
                    <div class="lyLunHover"><img src="{{url('asset/images/q_02.jpg')}}" alt=""></div>
                    <div class="lyLunHide"><img src="{{url('asset/images/q_2.jpg')}}" alt=""></div>
                </li>
            </ul>
        </div>
    </div>
    <!--辅材-->
    <div class="dpm">
        <div class="container">
            <h4>知名辅料 环保安全</h4>
            <p>用心营造更环保安全的室内环境</p>
            <ul>
                <li> <img src="{{url('asset/images/Fl5uuKTGJbXKE_wacOOarhNms1ji.png')}}" alt="公牛装饰开关"> </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/FvabaD8aQMoGKY78I4pewEsRhZnm.png')}}" alt="欧普照明"> </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/FjRiLv96BztZK21FCD14BaeNnDTe.png')}}" alt="东方雨虹"> </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/FoLZeDbOqP17RWcaNBAhgZT4qNe_.jpg')}}" alt="日丰管"> </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/FuO42Lgp92RGRtjJ4ztCA16DUVgn.png')}}" alt="多乐士乳胶漆"> </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/FmZcuA62neO4nCBGjyG3V1zpL_lS.jpg')}}" alt="塔牌电线"> </li>
            </ul>
        </div>
    </div>
    <style type="text/css">

    </style>
    <!--辅材-->
    <!--施工标准-->
    <div class="craft">
        <div class="container">
            <div class="title">
                <h4>9大特色工艺</h4>
            </div>
            <p class="text">严苛的施工工艺，杜绝了一切的水电安全隐患</p>
            <div class="fleft top"> <img src="{{url('asset/images/content-craft-left.jpg')}}" alt="">
                <p>红砖包管降噪音工艺</p>
            </div>
            <ul class="slides top fright">
                <li> <img src="{{url('asset/images/content-craft1.jpg')}}" alt="">
                    <p>瓷砖干铺工艺</p>
                </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/content-craft2.jpg')}}" alt="">
                    <p>门套压石工艺</p>
                </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/content-craft3.jpg')}}" alt="">
                    <p>水管热熔连接工艺</p>
                </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/content-craft4.jpg')}}" alt="">
                    <p>墙砖压地砖工艺</p>
                </li>
            </ul>
            <ul class="slides fright">
                <li> <img src="{{url('asset/images/content-craft5.jpg')}}" alt="">
                    <p>地面固化防尘工艺</p>
                </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/content-craft6.jpg')}}" alt="">
                    <p>地漏防渗漏工艺</p>
                </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/content-craft7.jpg')}}" alt="">
                    <p>吊顶转角防开裂工艺</p>
                </li>
                <!--
                          -->
                <li> <img src="{{url('asset/images/content-craft8.jpg')}}" alt="">
                    <p>阴阳角护角工艺</p>
                </li>
                <!--
                      -->
            </ul>
        </div>
    </div>
    <!--施工标准-->
    <div class="afterSale" id="afterSale">
        <div class="container">
            <h4>售后保障</h4>
            <p>完善的售后服务体系，及时响应并处理一切售后问题</p>
            <ul>
                <li class="green"> <span class="down"></span> <img src="{{url('asset/images/content-afterSale1.png')}}" alt="">
                    <p class="title">年</p>
                    <p>隐蔽工程质保</p>
                </li>
                <!--
                          -->
                <li class="blue active"> <span class="down"></span> <img src="{{url('asset/images/content-afterSale2.png')}}" alt="">
                    <p class="title">年</p>
                    <p>整装质保</p>
                </li>
                <!--
                          -->
                <li class="yellow"> <span class="down"></span> <img src="{{url('asset/images/content-afterSale3.png')}}" alt="">
                    <p class="title">万元</p>
                    <p>平安家装无忧险</p>
                </li>
                <li class="yellow yellow2"> <span class="down"></span> <img src="{{url('asset/images/content-afterSale4.png')}}" alt="">
                    <p class="title">小时</p>
                    <p>售后极速响应</p>
                </li>
            </ul>
        </div>
    </div>

    @endsection
