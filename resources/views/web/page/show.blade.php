@extends('web.layouts.app')
@section('title',$data->title.'_'.\App\Model\Nav::TDK('page')->title)
@section('keywords',\App\Model\Nav::TDK('page')->keywords)
@section('description',str_limit( $data->content,100) )
@section('content')
    <!--轮播-->
    <div class="sjzz_1920">
        <div style="width:100%; height:350px; background:url(&#39;/asset/images/5b6be721b1d30.jpg&#39;) center center no-repeat;"></div>
    </div>
    <!--正文-->
    <div class="list_gao_20" style="background-color: #f5f6f9;height: 30px;"></div>
    <div class="article_nei_pubu">
        <div class="article_nei_pubu_center"> <a href="{{url('')}}/">首页</a> &gt; <a href="{{url('page')}}/">装修贴士</a>&gt;
            <a href="{{url('page/'.$data->id)}}.html" title="{{$data->title}}">{{$data->title}}</a>
        </div>
    </div>
    <div class="list_center">
        <div class="list_gao_45" style="height: 30px;"></div>
        <div class="list_center_on">
            <div class="list_center_on_you">
                <div class="list_center_on_for">
                    <div class="article_nei">
                        <div class="list_gao_20"></div>
                        <div class="list_center_on_h1"> {{$data->title}}</div>
                        <div class="list_gao_20"></div>
                        <div class="list_center_on_hr">
                            <div class="list_center_on_hr_s"></div>
                        </div>
                        <div class="list_gao_20"></div>
                        <div class="list_center_on_p2"> <span><img src="{{url('asset/images')}}/mo_60.jpg" alt=""></span> 604 &nbsp; <span><img src="{{url('asset/images')}}/mo_61.jpg" alt=""></span> 阅览 <script src="{{url('asset/images')}}/count.php" type="text/javascript" language="javascript"></script>152&nbsp;&nbsp;&nbsp;
                            发布时间：{{$data->created_at}} </div>
                        <div class="list_gao_20"></div>
                        <!--正文-->
                        <div class="article_nei_title">
                          {!! $data->content !!}
                        </div>
                        <div class="list_gao_50"></div>
                        <div class="list_center_on_hr"></div>
                        <div class="list_gao_40"></div>

                    </div>
                </div>
                <div class="list_gao_80"></div>
            </div>
            <!--左-->
            <div class="list_center_on_zuo">
                <div class="list_center_on_zuo_on">
                    <div class="list_gao_20"></div>
                    <div class="list_center_on_zuo_center">
                        <p class="list_center_on_zuo_center_p1">热门文章</p>
                        <div class="list_center_on_zuo_center_huang"></div>
                        <div class="list_gao_20"></div>
                        @foreach($hot as $item)
                            <a href="{{url('/page/'.$item->id)}}.html">
                                <div class="list_center_on_zuo_center_img"> <img src="{{$item->avatar}}" alt="">
                                    <div class="list_center_on_zuo_center_title">
                                        <p class="list_tui_p1">{{$item->title}}</p>
                                        <p class="list_tui_p2">{{$item->created}} </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <div class="list_gao_1"></div>
                    </div>
                </div>
                <div class="list_gao_20"></div>
                <div class="list_center_on_zuo_on article_nei_cales" style="z-index: 999; position: relative; top: 0px; margin: 0px auto;">
                    <div class="list_cases_on_zuo_center">
                        <div class="list_gao_20"></div>
                        <div class="list_cases_to">
                            <p class="list_center_on_zuo_center_p1">热门装修案例</p>
                            <div class="list_center_on_zuo_center_huang"></div>
                            <a href="http://www.daohedesign.com/cases.html">
                                <div class="list_cases_to_sss"> MORE &gt; </div>
                            </a> </div>
                        <div class="list_gao_20"></div>
                        <a href="http://www.daohedesign.com/case/os/406.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q011161K50-L.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 金色春天装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/ty/395.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q0111559531I.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 世纪风景装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/xdjy/387.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q0111020380-L.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 威尼斯装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/xdjy/388.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q01110593M11.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 香颂城装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/msxc/409.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q011162T60-L.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 金色春天装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/os/403.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q0111611550-L.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 龙玺台装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/xdjy/390.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q011153F4X8.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 兰溪八期装修案例 </div>
                            </div>
                        </a>
                        <a href="http://www.daohedesign.com/case/zs/391.html">
                            <div class="list_cases_on">
                                <div class="list_cases_on_img"> <img src="{{url('asset/images')}}/1-1Q0111539220-L.jpg" alt=""> </div>
                                <div class="list_cases_title_s"> 传世风景装修案例 </div>
                            </div>
                        </a>

                        <div class="list_gao_1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
