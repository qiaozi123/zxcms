@extends('web.layouts.app')
@section('title',\App\Model\Nav::TDK('project')->title)
@section('keywords',\App\Model\Nav::TDK('project')->keywords)
@section('description',\App\Model\Nav::TDK('project')->description)
@section('content')
    <div class="sjzz_1920">
        <div style="width:100%; height:550px; background:url(&#39;/asset/images/20181221_5c1c994605cad.jpg&#39;) center center no-repeat;"></div>
    </div>
    <div class="home_zb">
        <div class="home_zb_jm">
            <div class="sjzs_x1">
                <hr style="width: 100%;border: none;background-color: #AAAAAA;height: 1px;position: relative;top:55px">
            </div>
            <div class="home_1200">
                <div class="sjzs_x2"> <img src="{{url('asset/images/home_jm_jm.png')}}" alt=""> </div>
            </div>
        </div>
        <!--内容-->
        <div class="home_nr">
            <div class="home_nr_fd">
                <div class="home_nr_fd_on"><img src="{{url('asset/images/home_sq.png')}}" alt="" style="height: 100%;width: 100%;">
                    <div class="home_nr_fd_to">
                        <p style="color: #FFFFFF;font-size: 18px;margin-top: 85px;">舒心墙面系统</p>
                        <p style="color: #FFFFFF;font-size: 15px;margin-top: 20px;">高环保、高品质墙面涂料</p>
                    </div>
                </div>
                <div class="home_nr_fd_on"><img src="{{url('asset/images/home_sd.png')}}" alt="" style="height: 100%;width: 100%;">
                    <div class="home_nr_fd_to">
                        <p style="color: #FFFFFF;font-size: 18px;margin-top: 85px;">放心水电系统</p>
                        <p style="color: #FFFFFF;font-size: 15px;margin-top: 20px;">选用大型工程指定品牌,稳定如一</p>
                    </div>
                </div>
                <div class="home_nr_fd_on"><img src="{{url('asset/images/home_ax.png')}}" alt="" style="height: 100%;width: 100%;">
                    <div class="home_nr_fd_to">
                        <p style="color: #FFFFFF;font-size: 18px;margin-top: 85px;">安心工艺系统</p>
                        <p style="color: #FFFFFF;font-size: 15px;margin-top: 20px;">严谨工艺，打造安心家</p>
                    </div>
                </div>
                <div class="home_nr_fd_on"><img src="{{url('asset/images/home_sx.png')}}" alt="" style="height: 100%;width: 100%;">
                    <div class="home_nr_fd_to">
                        <p style="color: #FFFFFF;font-size: 18px;margin-top: 85px;">省心管理系统</p>
                        <p style="color: #FFFFFF;font-size: 15px;margin-top: 20px;">先进节点式管理，装修更放心</p>
                    </div>
                </div>
            </div>
            <!--图片-->
        </div>
        <div style="height: 50px;"></div>
        <div style="width:100%; height:220px; background:url(/asset/images/mo_104.jpg) center center no-repeat;"></div>
        <div class="bj_1">
            <div class="bj_1200">
                <div style="height: 50px;"></div>
                <div class="home_nr_fd_fxqm">
                    <p style="font-size: 32px;margin-left: 20px">舒心墙面系统</p>
                    <div style="border: 1px solid #849686;height: 10px;width: 80px;position: relative;background-color:#849686;top: 10px;left: 20px; "></div>
                    <hr style="margin-top: 5px;">
                </div>
                <div class="home_nr_fd_wr">
                    <div class="home_nr_fd_wr_on">
                        <div class="home_nr_fd_wr_on_on">
                            <div class="home_nr_fd_wr_on_to"><img src="{{url('asset/images/aq_home.png')}}" alt="" style="width: 100%;height: 100%"></div>
                        </div>
                        <div class="home_nr_fd_wr_on_so" style="margin-top: 7px;">
                            <div class="home_nr_fd_wr_on_so_on">
                                <p style="font-size: 20px;text-align: right;margin-top: 38px"><b>多乐士乳胶漆</b></p>
                                <hr style="width:57px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 240px; margin-top: 10px;">
                                <hr style="width:37px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 260px; margin-top: 6px;">
                                <p style="font-size: 15px;color:#B3B3B3;margin-left: 37px;margin-top: 10px;  ">多乐士是阿克苏诺贝尔旗下的著名建筑装饰油漆品牌，产品畅销于全球100个国家，每年全球有5000万户家庭使用多乐士油漆。</p>
                            </div>
                            <div class="home_nr_fd_wr_on_so_to"><img src="{{url('asset/images/sq_home.png')}}" alt="" style="width: 100%;height: 100%"></div>
                        </div>
                    </div>
                    <div class="home_nr_fd_wr_to">
                        <div class="home_nr_fd_wr_on_so" style="margin-top: -4px;">
                            <div class="home_nr_fd_wr_on_so_on">
                                <p style="font-size: 20px;text-align: right;margin-top: 38px"><b>专筑定制无醛界面剂</b></p>
                                <hr style="width:57px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 240px; margin-top: 10px;">
                                <hr style="width:37px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 260px; margin-top: 6px;">
                                <p style="font-size: 15px;color:#B3B3B3;margin-left: 37px;margin-top: 10px;  ">植物萃取无甲醛、粘结度强、透气性好、韧性高、避免粉化、开裂、起皮、脱落。</p>
                            </div>
                            <div class="home_nr_fd_wr_on_so_to"><img src="{{url('asset/images/v-home_1.png')}}" alt="" style="width: 100%;height: 100%"></div>
                        </div>
                        <div class="home_nr_fd_wr_on_so">
                            <div class="home_nr_fd_wr_on_so_on">
                                <p style="font-size: 20px;text-align: right;margin-top: 38px"><b>专筑定制生态找平腻子</b></p>
                                <hr style="width:57px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 240px; margin-top: 10px;">
                                <hr style="width:37px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 260px; margin-top: 6px;">
                                <p style="font-size: 15px;color:#B3B3B3;margin-left: 37px;margin-top: 10px;  ">结构细腻、硬度高、打磨性好、有效碱性基层队乳胶漆的破坏。</p>
                            </div>
                            <div class="home_nr_fd_wr_on_so_to"><img src="{{url('asset/images/v-home_2.png')}}" alt="" style="width: 100%;height: 100%"></div>
                        </div>
                        <div class="home_nr_fd_wr_on_so">
                            <div class="home_nr_fd_wr_on_so_on">
                                <p style="font-size: 20px;text-align: right;margin-top: 38px"><b>专筑定制生态结构腻子</b></p>
                                <hr style="width:57px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 240px; margin-top: 10px;">
                                <hr style="width:37px;background-color: #B3B3B3;height: 1px;border: none;margin-left: 260px; margin-top: 6px;">
                                <p style="font-size: 15px;color:#B3B3B3;margin-left: 37px;margin-top: 10px;  ">抗菌防霉、抗裂性强、防裂、PH值中性环保性卓越</p>
                            </div>
                            <div class="home_nr_fd_wr_on_so_to"><img src="{{url('asset/images/v-home_3.png')}}" alt="" style="width: 100%;height: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--放心水电系统-->
        <div class="vhome_nei">
            <div class="home_nr_fd_fxqm">
                <p style="font-size: 32px;margin-left: 20px">放心水电系统</p>
                <div style="border: 1px solid #849686;height: 10px;width: 80px;position: relative;background-color:#849686;top: 10px;left: 20px; "></div>
                <hr style="margin-top: 5px;">
            </div>
        </div>
        <div class="bj_2">
            <!--水电系统-->
            <div class="home_nr_fd_sdxt">
                <div class="home_nr_fd_sdxt_dc">
                    <div class="home_nr_fd_sdxt_tp"><img src="{{url('asset/images/dlx_home.png')}}" alt="" style="width: 100%;height: 100%"></div>
                    <div class="home_nr_fd_sdxt_wz">
                        <p style="font-size: 28px;margin-top: 20px;text-align: center;"><b>金杯塔牌电缆</b></p>
                        <p style="font-size: 15px;margin-top: 24px;text-indent: 20px;color: #3A3A3A; letter-spacing:1px;">专筑采用金杯塔牌集合优势资源，倡导环保节能、绿色健康的产品理念，塔牌电缆已成为西南地区声名遐迩的品牌。产品长期被评为“四川省名优产品”和“四川省名牌产品”，塔牌品牌被评为“四川省装饰行业推荐品牌”、“四川省著名商标”和“四川省畅销商品品牌”</p>
                    </div>
                </div>
                <div class="home_nr_fd_sdxt_dc" style="margin-left:37px;">
                    <div class="home_nr_fd_sdxt_tp"><img src="{{url('asset/images/home_gd.png')}}" alt="" style="width: 100%;height: 100%"></div>
                    <div class="home_nr_fd_sdxt_wz">
                        <p style="font-size: 28px;margin-top: 20px;text-align: center;"><b>日丰PVC护套管道系统</b></p>
                        <p style="font-size: 15px;margin-top: 24px;text-indent: 20px;color: #3A3A3A; letter-spacing:1px;">专筑采用日丰PVC护套管道系统采用“强电用红管，弱电用蓝管”的设计理念，将强弱电分离隔离，方便强、弱电识别、布管、检修及后期家庭布线升级；服务工程师上门对管路系统进行产品真伪查询、管路水压检测、管路安装验收、管路图拍摄保存等服务</p>
                    </div>
                </div>
                <div class="home_nr_fd_sdxt_dc" style="margin-left:37px;">
                    <div class="home_nr_fd_sdxt_tp"><img src="{{url('asset/images/home_fs.png')}}" alt="" style="width: 100%;height: 100%"></div>
                    <div class="home_nr_fd_sdxt_wz">
                        <p style="font-size: 28px;margin-top: 20px;text-align: center;"><b>日丰PP-R管道系统</b></p>
                        <p style="font-size: 15px;margin-top: 24px;text-indent: 20px;color: #3A3A3A; letter-spacing:1px;">专筑采用日丰PP-R管道系统由PPR管材、管件、阀门及相关配件构成。服务工程师上门对管路系统进行产品真伪查询、管路水压检测、管路安装验收、管路图拍摄保存等服务</p>
                    </div>
                </div>
            </div>
        </div>
        <!--安心工艺系统-->
        <div style="height:30px;"></div>
        <div class="home_nr_fd_fxqm" style="background-color: #fff;">
            <p style="font-size: 32px;margin-left: 20px">安心工艺系统</p>
            <div style="border: 1px solid #849686;height: 10px;width: 80px;position: relative;background-color:#849686;top: 10px;left: 20px; "></div>
            <hr style="margin-top: 5px;">
        </div>
        <div class="craft" style="padding-top: 10px;height: 420px;">
            <div class="container">

                <div class="fleft top" style="margin-top:0px;"> <img src="{{url('asset/images/content-craft-left.jpg')}}" alt="">
                    <p>红砖包管降噪音工艺</p>
                </div>
                <ul class="slides top fright" style="margin-top:0px;">
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
        <div style="height: 30px;"></div>
        <!--省心管理系统-->
        <div class="home_nr_fd_fxqm" style="background-color: #fff;">
            <p style="font-size: 32px;margin-left: 20px">省心管理系统</p>
            <div style="border: 1px solid #849686;height: 10px;width: 80px;position: relative;background-color:#849686;top: 10px;left: 20px; "></div>
            <hr style="margin-top: 5px;">
        </div>
        <div class="bj_3">
            <div class="home_nr_fd_sxgl">
                <div class="home_nr_fd_sxgl_on">
                    <div class="home_nr_fd_165"> <img src="{{url('asset/images/home_165.png')}}" alt=""> </div>
                    <div class="home_nr_fd_z">
                        <p style="color:#859588;font-size: 21px; position: relative;top: 15px;margin: auto;width: 161px;height: 29px;background-color: #FFFFFF;z-index: 8;text-align: center"> 自营工程体系</p>
                        <hr style="width: 263px;border: none;background-color: #859588;height: 1px;position: relative;top: 0px;margin: auto">
                        <p style="font-size: 14px;margin-top: 20px">专筑工长，采用一对一模式，对每户工地确保做到客户满意，自己满意。</p>
                    </div>
                </div>
                <div class="home_nr_fd_sxgl_to">
                    <div class="home_nr_fd_165"> <img src="{{url('asset/images/dlzjtx.png')}}" alt=""> </div>
                    <div class="home_nr_fd_z">
                        <p style="color:#859588;font-size: 21px; position: relative;top: 15px;margin: auto;width: 161px;height: 29px;background-color: #FFFFFF;z-index: 8;text-align: center"> 独立质检体系</p>
                        <hr style="width: 263px;border: none;background-color: #859588;height: 1px;position: relative;top: 0px;margin: auto">
                        <p style="font-size: 14px;margin-top: 20px">专筑拥有独立质检部门的公司，由数5名经验丰富的质检人员组成，对施工工艺和质量严格把控。</p>
                    </div>
                </div>
                <div class="home_nr_fd_sxgl_so"><img src="{{url('asset/images/mo_105.jpg')}}" alt=""> </div>
                <div class="home_nr_fd_sxgl_fo">
                    <div class="home_nr_fd_165"> <img src="{{url('asset/images/zycytx.png')}}" alt=""> </div>
                    <div class="home_nr_fd_z">
                        <p style="color:#859588;font-size: 21px; position: relative;top: 15px;margin: auto;width: 161px;height: 29px;background-color: #FFFFFF;z-index: 8;text-align: center"> 自营仓运体系</p>
                        <hr style="width: 263px;border: none;background-color: #859588;height: 1px;position: relative;top: 0px;margin: auto">
                        <p style="font-size: 14px;margin-top: 20px">综合性物流支持平台，运用科技化手段及时掌握货物动态、在途、运输、配送回单管理。</p>
                    </div>
                </div>
                <div class="home_nr_fd_sxgl_wo">
                    <div class="home_nr_fd_165"> <img src="{{url('asset/images/shfwtx.png')}}" alt=""> </div>
                    <div class="home_nr_fd_z">
                        <p style="color:#859588;font-size: 21px; position: relative;top: 15px;margin: auto;width: 161px;height: 29px;background-color: #FFFFFF;z-index: 8;text-align: center"> 售后服务体系</p>
                        <hr style="width: 263px;border: none;background-color: #859588;height: 1px;position: relative;top: 0px;margin: auto">
                        <p style="font-size: 14px;margin-top: 20px">配备专业维修团队，承诺20分钟内回复，72小时内上门维修处理，保障客户权益。</p>
                    </div>
                </div>
            </div>
        </div>
        <!--外国大品牌-->
        <hr style="width: 100%;border: none;background-color: #AAAAAA;height: 1px;position: relative;top: 50px">
        <div class="home_1200">
            <div class="sjzs_x2"> <img src="{{url('asset/images/home_jm_gj.png')}}" alt=""> </div>
        </div>
        <div class="home_nr_fd_gjdp">
            <div class="home_nr_fd_gjdp_tb"> <img src="{{url('asset/images/home_hz_tx.png')}}" alt=""> </div>
        </div>
        <div style="height: 50px;"></div>

    </div>


    @endsection
