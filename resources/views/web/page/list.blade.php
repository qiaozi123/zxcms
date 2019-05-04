@extends('web.layouts.app')
@section('title',\App\Model\Nav::TDK('page')->title)
@section('keywords',\App\Model\Nav::TDK('page')->keywords)
@section('description','眉山装修,眉山装修公司,眉山装修公司排名,眉山家装,眉山家装公司,眉山装修公司哪家好,眉山装饰平台')
@section('content')
    <div class="sjzz_1920">
        <div style="width:100%; height:350px; background:url(&#39;/asset/images/5b6be721b1d30.jpg&#39;) center center no-repeat;"></div>
    </div>
    <!--正文-->
    <div class="list_center">
        <div class="list_gao_45"></div>
        <div class="list_center_on">
            <div class="list_center_on_you">
                <!--循环-->
                @foreach($data as $item)
                <div class="list_center_on_for">
                    <div class="list_gao_30"></div>
                    <div class="list_center_on_for_img">
                        <div class="list_center_on_for_img_s"> <a href="{{url('/page/'.$item->id)}}.html"> <img src="{{$item->avatar}}" alt=""> </a> </div>
                        <a href="{{url('/page/'.$item->id)}}.html">
                            <div class="list_center_on_h1">{{$item->title}}</div>
                        </a>
                        <div class="list_gao_20"></div>
                        <div class="list_center_on_hr">
                            <div class="list_center_on_hr_s"></div>
                        </div>
                        <div class="list_gao_20"></div>

                        <div class="list_gao_20"></div>
                        <div class="list_center_on_p2"> <span><img src="{{url('asset/images/')}}mo_60.jpg" alt=""></span> 602 &nbsp; <span><img src="{{url('asset/images/')}}mo_61.jpg" alt=""></span> 阅览{{$item->see_count}} </div>
                        <div class="list_gao_30"></div>
                    </div>
                </div>
                @endforeach

                <div class="list_gao_45"></div>
                <div class="meneame" style="width: 665px">
                    {{$data->links()}}
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
                            <div class="list_center_on_zuo_center_img"> <img src="{{url($item->avatar)}}" alt="{{$item->title}}">
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
