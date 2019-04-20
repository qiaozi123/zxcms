@extends('web.layouts.app')
@section('title',\App\Model\Nav::TDK('case')->title)
@section('keywords',\App\Model\Nav::TDK('case')->keywords)
@section('description',\App\Model\Nav::TDK('case')->description)
@section('content')
    <!--banner-->
    <div style="width:100%; height:600px; background:url(&#39;/asset/images/20181202_5c0382754f79a.jpg&#39;) center center no-repeat;"></div>
    <div class="cases_gao" style="height: 20px;"></div>
    <div class="cases_center">
        <!--选择报名导航-->
        <div class="cases_center_on">
            <!--左-->
            <!--右-->
            <div class="cases_center_on_you">
                <!--风格-->
                <div class="al_1200_150">
                    <div class="shj_index_xgt_fglist">
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/xdjy/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_xd.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>现代简约</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/ty/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_ty.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>田园风格</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/os/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_os.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>欧式风格</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/zs/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_zs.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>中式风格</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/msxc/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_ms.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>美式风格</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/hd/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_hd.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>混搭风格</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/dzh/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_dzh.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>地中海风格</h5>
                        </div>
                        <div class="shj_index_xgt_fglist_item"> <a href="http://www.daohedesign.com/zxal/qt/" target="_blank"><img src="{{url('asset/images/')}}/ixgt_bo.jpg" alt="" class="shj_index_xgt_fglist_item_img"></a>
                            <h5>其他风格</h5>
                        </div>
                    </div>
                </div>
                <!--户型-->
            </div>
            <!--报价-->
        </div>

        <div class="cases_ggao" style="height: 20px;"></div>
        <!-- <div class="productsxia navmove"><strong style="margin-left: 20px">已选择:</strong> <b style="margin-left:10px; display:none;">撤销全部</b></div> <div class="cases_ggao"></div>-->
        <!--案例-->
        <div id="cases_show_s">
            <div class="cases_center_so">
                <!--循环-->

                @foreach($data as $item)

                    <div class="cases_center_so_for">
                        <div class="cases_center_so_for_on"> <a href="{{url('case/'.$item->id)}}.html"><img src="  {{$item->avatar}}" alt=""></a> </div>
                        <div class="cases_center_so_for_to">
                            <div class="cas_ershi"></div>
                            <div class="cas_title">
                                <p class="cas_title_p1"><b>{{$item->xiaoqu}}</b></p>
                                <p class="cas_title_p2">{{$item->house_type}} | {{$item->type}}| {{$item->area}}㎡</p>
                            </div>
                            <div class="cas_tiao_a"> <a href="{{url('case/'.$item->id)}}.html"><img src="{{url('asset/images/')}}/mo_51.jpg" alt=""></a> </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="case_gaoooo" style="height: 20px;"></div>
            <div class="meneame">
                <ul>
                {{$data->links()}}
                </ul>
            </div>
        </div>
    </div>
    <div class="case_gaoooo"></div>
    @endsection
