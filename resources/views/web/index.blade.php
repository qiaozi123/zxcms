@extends('web.layouts.app')
@section('title',$data->title)
@section('keywords',$data->keywords)
@section('description',$data->description)

@section('content')
    <div class="sjzz_1920" onclick="window.open(&#39;/taocan.html&#39;,&#39;_blank&#39;)" style="cursor: pointer; ">
        <div style="width:100%; height:550px; background:url(&#39;/asset/images/9985c3d6cfabc7c6.jpg&#39;) center center no-repeat;"></div>
    </div>
    <div id="index-new1">
        <section class="advantage">
            <div class="container" style="width: 840pt;overflow: hidden;margin: 0 auto;">
                <ul>
                    <li class="save"> <img src="{{url('asset/images/index-new-tage-1.98320cd1.png')}}" alt="">
                        <p class="title">省30%</p>
                        <p class="describe">厂家直供，省掉中间商差价</p>
                    </li>
                    <!--
                            -->
                    <li class="main_material"> <img src="{{url('asset/images/index-new-tage-2.38918bf3.png')}}" alt="">
                        <p class="title">一线主材</p>
                        <p class="describe">均为国际一线品牌，环保均超国标</p>
                    </li>
                    <!--
                            -->
                    <!--<li class="finish">
                                <img src="/images/index-new-tage-3.png" alt="">
                                <p class="title">45天完工</p>
                                <p class="describe">从毛坯到精装仅需45天</p>
                            </li>-->
                    <!--
                            -->
                    <li class="crafts"> <img src="{{url('asset/images/index-new-tage-4.25420663.png')}}" alt="">
                        <p class="title">9大工艺</p>
                        <p class="describe">专筑装饰独有的特色工艺</p>
                    </li>
                    <!--
                            -->
                    <li class="add_items"> <img src="{{url('asset/images/index-new-tage-5.7b0f685c.png')}}" alt="">
                        <p class="title">0增项</p>
                        <p class="describe">价格透明，材料透明，施工标准透明</p>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!--K1-->
    <link rel="stylesheet" href="{{url('asset/css/index-new1.8c90993dd677cf082559.css')}}">
    <div class="no-webp">
        <div id="index-new1">
            <section class="setMeal">
                <div class="container" style="width: 825pt;overflow: hidden;margin: 0 auto;">
                    <div class="title">
                        <h4>为您实力甄选全包套餐</h4>
                        <p>品质保证，一站搞定，省心省力</p>
                    </div>
                    <div class="design"> <a href="{{url('taocan.html')}}">
                            <h1>独具匠心的</h1>
                            <span href="#design">设计方案&gt;</span> <img src="{{url('asset/images/tc01.d9149603.png')}}" alt=""> </a> </div>
                    <div class="setMealCentre">
                        <div class="material"> <a href="{{url('taocan.html')}}">
                                <div>
                                    <h1>精心挑选的</h1>
                                    <span href="#material">大牌好料&gt;</span> </div>
                                <img src="{{url('asset/images/tc02.1bcaff6d.png')}}" alt=""> </a> </div>
                        <div class="configure"> <a href="{{url('taocan.html')}}">
                                <div>
                                    <h1>一目了然的</h1>
                                    <span href="">全屋配置&gt;</span> </div>
                                <img src="{{url('asset/images/tc03.c1416ba3.png')}}" alt=""> </a> </div>
                    </div>
                    <div class="timeLimit"> <a href="{{url('taocan.html')}}">
                            <h1>严苛精湛的</h1>
                            <span>施工工艺&gt;</span> <img src="{{url('asset/images/tc04.99bf033c.png')}}" alt=""> </a> </div>
                </div>
            </section>
        </div>
    </div>
    <!--空格-->
    <div class="portal_on_gao" style="height: 25px;"></div>
    <!--工程体系-->
    <div style="height: 920px;width: 100%;">
        <div class="portal_center">
            <!--左2-->
            <div class="portal_center_so_zuo">
                <div class="portal_center_so_zuos"> <a href="{{url('project.html')}}"><img src="{{url('asset/images/mo_17.jpg')}}" alt=""></a> </div>
                <div class=""> <a href="{{url('project.html')}}"><img src="{{url('asset/images/mo_18.jpg')}}" alt=""></a> </div>
            </div>
            <!--中2-->
            <div class="portal_center_so_zhong">
                <div class="portal_center_so_zuos"> <a href="{{url('project.html')}}"><img src="{{url('asset/images/mo_19.jpg')}}" alt=""></a> </div>
                <div class=""> <a href="{{url('project.html')}}"><img src="{{url('asset/images/mo_20.jpg')}}" alt=""></a> </div>
            </div>
            <!--右-->
            <div class="portal_center_so_you">
                <div class="portal_biaoti portal_center_so_you_title">
                    <p class="portal_biaoti_p1">承诺装修不外包，坚持以自有产业工人做装修</p>
                    <p class="portal_biaoti_p2">&nbsp;</p>
                    <p class="portal_biaoti_p3" style="font-size: 30px;">装修大事，从工艺开始</p>
                </div>
                <div class="portal_biaoti_sst"> 装修尽心尽责，工艺精益求精，服务全心全意；专筑装饰四大装修保障体系，为您量身打造“看得上、消费得起、拿得出手”的高性价比整装产品，品质生活，没那么贵！ </div>
                <div class="portal_center_so_you_img" style="margin-top: 140px;"> <img src="{{url('asset/images/mo_21.jpg')}}" alt="">
                    <div class="portal_center_so_you_form">
                        <form  enctype="multipart/form-data" method="post">
                            <input type="hidden" name="action" value="post">
                            <input type="hidden" name="diyid" value="1">
                            <input type="hidden" name="do" value="2">
                            <input type="text" class="portal_to_input" id="name" placeholder="您的姓名" name="username">
                            <input type="text" class="portal_to_input" id="lianxi" placeholder="联系电话" name="telphone">
                            <input type="hidden" name="mianji" value="首页参观在建工地">
                            <input type="hidden" name="dede_fields" value="name,text;lianxi,text;mianji,text">
                            <input type="hidden" name="dede_fieldshash" value="110e4f2b44c9fba134f57271a22912be">
                            <input type="hidden" name="type" value="工地预约">
                            <input type="button" name="submit" value="立即预约" onclick="gongdi()" class="coolbg2">
                        </form>
                        <script>
                            function gongdi() {
                                $.ajax({
                                    //几个参数需要注意一下
                                    type: "POST",//方法类型
                                    dataType: "json",//预期服务器返回的数据类型
                                    url: "/gongdipost" ,//url
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
        </div>
    </div>
    <!--设计师轮播-->
    <div style="background: url(asset/images/mo_22.jpg) no-repeat center;height: 744px;width: 100%;">
        <div class="portal_center">
            <div class="fullSlides">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:1200px"><ul style="width: 2400px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1145.39px;">
                            <li style="float: left; width: 1200px;">
                                <!--左设计师-->
                                <div class="portal_design">
                                    <div class="portal_design_tou"> <a href="{{url('')}}"> <img src="{{url('asset/images/1-1Q0111613450-L.jpg')}}" alt=""> </a> </div>
                                    <div class="portal_design_zhic"> <b>眉山维多利亚装修案例</b> </div>
                                    <div class="portal_design_xiao_yelle"></div>
                                    <div class="she_jianj"> <b>现代简约100-120㎡普通住宅</b> </div>
                                    <div class="she_miaos"> 设计说明：主人要求在配色方面用浅色系，装饰要简洁大方，不要繁复花哨 </div>
                                </div>
                                <!--右案例推荐-->
                                <div class="portal_case"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/1-1Q0111613450-L.jpg')}}" width="100%" alt=""> </a> </div>
                            </li>
                            <li style="float: left; width: 1200px;">
                                <!--左设计师-->
                                <div class="portal_design">
                                    <div class="portal_design_tou"> <a href="{{url('')}}"> <img src="{{url('asset/images/1-1Q0111611550-L.jpg')}}" alt=""> </a> </div>
                                    <div class="portal_design_zhic"> <b>眉山龙玺台装修案例</b> </div>
                                    <div class="portal_design_xiao_yelle"></div>
                                    <div class="she_jianj"> <b>欧式100-120㎡普通住宅</b> </div>
                                    <div class="she_miaos"> 设计说明：设计中大量使用直线、对称和几何图形的构成，并大量使用新材料，质感华丽而又冷酷。通过更好地规划空间布局，让在视觉上更空阔亮堂，功能空间的实用也更方便。 </div>
                                </div>
                                <!--右案例推荐-->
                                <div class="portal_case"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/1-1Q0111611550-L.jpg')}}" width="100%" alt=""> </a> </div>
                            </li>


                        </ul></div>
                </div>
                <div class="btn"> <a class="prev" href="javascript:void(0)" id="prev"> <img src="{{url('asset/images/mo_28.png')}}" alt=""> </a>
                    <div class="portal_btn"></div>
                    <a class="next" href="javascript:void(0)" id="next"> <img src="{{url('asset/images/mo_27.png')}}" alt=""> </a> </div>
            </div>
        </div>
    </div>
    <!--案例-->
    <div class="portal_case_gao" style="height: 50px;"></div>
    <div class="portal_case_center">
        <div class="portal_biaoti_p3_span_to"></div>
        <!--案例左2-->
        <div class="portal_case_six">
            <div class="portal_biaoti">
                <p class="portal_biaoti_p2">&nbsp;</p>
                <p class="portal_biaoti_p1">精美案例真实呈现，挖掘更多的灵感</p>
                <p class="portal_biaoti_p3" style="margin-top: 17px;">“邻居”的家</p>
            </div>
            <div class="portal_case_gaos"></div>
            <div class="portal_case_six_to"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/zyt6.jpg')}}" width="380px" height="514px">
                    <div class="portal_case_six_to_on">
                        <div class="portal_case_six_to_onsyx">
                            <p class="portal_case_six_to_onsyx_p1"> 现代简约</p>
                            <p class="portal_case_six_to_onsyx_p2"> 100-120㎡ | 普通住宅 </p>
                            <p class="portal_case_six_to_onsyx_p3"> 金色春天 </p>
                        </div>
                    </div>
                </a> </div>
            <div class="portal_case_six_to"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/zyt7.jpg')}}" width="380px" height="514px">
                    <div class="portal_case_six_to_on">
                        <div class="portal_case_six_to_onsyx">
                            <p class="portal_case_six_to_onsyx_p1"> 现代简约</p>
                            <p class="portal_case_six_to_onsyx_p2"> 100-120㎡ | 普通住宅 </p>
                            <p class="portal_case_six_to_onsyx_p3"> 凯旋国际 </p>
                        </div>
                    </div>
                </a> </div>





        </div>
        <div class="portal_case_sixs">
            <div class="portal_case_six_to"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/zyt1.jpg')}}" width="380px" height="514px">
                    <div class="portal_case_six_to_on">
                        <div class="portal_case_six_to_onsyx">
                            <p class="portal_case_six_to_onsyx_p1"> 现代简约</p>
                            <p class="portal_case_six_to_onsyx_p2"> 100-120㎡ | 普通住宅 </p>
                            <p class="portal_case_six_to_onsyx_p3"> 威尼斯 </p>
                        </div>
                    </div>
                </a> </div>
            <div class="portal_case_six_to"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/zyt2.jpg')}}" width="380px" height="514px">
                    <div class="portal_case_six_to_on">
                        <div class="portal_case_six_to_onsyx">
                            <p class="portal_case_six_to_onsyx_p1"> 美式乡村</p>
                            <p class="portal_case_six_to_onsyx_p2"> 120-150㎡ | 普通住宅 </p>
                            <p class="portal_case_six_to_onsyx_p3"> 金色春天 </p>
                        </div>
                    </div>
                </a> </div>


        </div>
        <!--案例右2-->
        <div class="portal_case_sixss">
            <div class="portal_case_six_to"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/zyt3.jpg')}}" width="380px" height="514px">
                    <div class="portal_case_six_to_on">
                        <div class="portal_case_six_to_onsyx">
                            <p class="portal_case_six_to_onsyx_p1"> 现代简约</p>
                            <p class="portal_case_six_to_onsyx_p2"> 80㎡以下 | 普通住宅 </p>
                            <p class="portal_case_six_to_onsyx_p3"> 城北一号 </p>
                        </div>
                    </div>
                </a> </div>
            <div class="portal_case_six_to"> <a href="{{url('')}}" target="_blank"> <img src="{{url('asset/images/zyt4.jpg')}}" width="380px" height="514px">
                    <div class="portal_case_six_to_on">
                        <div class="portal_case_six_to_onsyx">
                            <p class="portal_case_six_to_onsyx_p1"> 中式</p>
                            <p class="portal_case_six_to_onsyx_p2"> 120-150㎡ | 普通住宅 </p>
                            <p class="portal_case_six_to_onsyx_p3"> 眉州公馆 </p>
                        </div>
                    </div>
                </a> </div>

            <div class="portal_case_six_to_on_imgs"> <a href="{{url('')}}"><img src="{{url('asset/images/mo_29.jpg')}}" alt=""></a> </div>
        </div>
    </div>
    <div class="por_gao_yibaier"></div>
    <!--新闻-->
    <div class="portal_list">
        <div class="portal_center">
            <div class="portal_biaoti_p3_span_toss"></div>
            <div class="portal_biaoti portal_biaoti_sitx">
                <p class="portal_biaoti_p2">&nbsp;</p>
                <p class="portal_biaoti_p1">从专业的视角看装修</p>
                <p class="portal_biaoti_p3" style="margin-top: 10px;">装修自习室</p>
            </div>
            <div class="por_gao_wushi"></div>
            <div style="background: url(/asset/images/mo_30.jpg) no-repeat center;width: 1200px;margin: auto;height: 352px;position: relative;box-shadow: #ccc 0px 0px 10px 5px;">
                <div class="portal_list_xinwen_s">
                    <div> <img src="{{url('asset/images/mo_31.jpg')}}" alt=""> </div>
                    <div class="protal_list_nex">
                        <ul>
                            @foreach(\App\Model\Article::where([])->orderby('id','desc')->limit(6)->get() as $item)
                            <a href="{{url('page/'.$item->id)}}">
                                <li>{{$item->title}}</li>
                            </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="por_gao_yibaisi">
            <div style="height: 30px;"></div>
            <div style="width: 1200px;margin: auto;display: table;">
                <div style="font-size: 15px;float: left;">友情链接：</div>
                <div style="font-size: 15px;float: left;width: 1060px;">
                    @foreach(\App\Model\FriendLink::all() as $item)
                    <a href="{{$item->url}}">{{$item->name}}</a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--整装报价-->
    <div style="background-color: #f0f0f0;height: 235px;width: 100%;">
        <div style="background: url(/asset/images/mo_15.jpg) no-repeat center;width: 1200px;margin: auto;height: 179px;position: relative;">
            <form enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <input type="hidden" name="diyid" value="1">
                <input type="hidden" name="do" value="2">
                <input type="text" class="portal_input" id="name" placeholder="怎么称呼" name="username">
                <input type="text" class="portal_input" id="mianji" placeholder="房屋面积" name="area">
                <input type="text" class="portal_input" id="lianxi" placeholder="您的电话" name="telphone">
                <input type="hidden" name="dede_fields" value="name,text;lianxi,text;mianji,text">
                <input type="hidden" name="dede_fieldshash" value="110e4f2b44c9fba134f57271a22912be">
                <input type="button" name="submit" value="" onclick="gongdi()" class="coolbg1">
            </form>
            <script>
                function gongdi() {
                    $.ajax({
                        //几个参数需要注意一下
                        type: "POST",//方法类型
                        dataType: "json",//预期服务器返回的数据类型
                        url: "/gongdipost" ,//url
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
    @endsection
