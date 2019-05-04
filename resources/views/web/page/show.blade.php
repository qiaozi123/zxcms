@extends('web.layouts.app')
@section('title',$data->title.'_'.\App\Model\Nav::TDK('page')->title)
@section('keywords',\App\Model\Nav::TDK('page')->keywords)
@section('description','眉山装修,眉山装修公司,眉山装修公司排名,眉山家装,眉山家装公司,眉山装修公司哪家好,眉山装饰平台' )
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
                        <div class="list_center_on_p2"> <span>
                                <img src="{{url('asset/images')}}/mo_60.jpg" alt=""></span> {{$data->see_count}} &nbsp; <span>
                                <img src="{{url('asset/images')}}/mo_61.jpg" alt=""></span> 阅览 <script src="{{url('asset/images')}}/count.php" type="text/javascript" language="javascript"></script>{{$data->see_count}} &nbsp;&nbsp;&nbsp;
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

            </div>
        </div>
    </div>
@endsection
