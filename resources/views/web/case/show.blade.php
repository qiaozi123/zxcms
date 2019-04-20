@extends('web.layouts.app')
@section('title',$data->name.'_'.\App\Model\Nav::TDK('case')->title)
@section('keywords',\App\Model\Nav::TDK('case')->keywords)
@section('description',str_limit( $data->content,100) )
@section('content')
    <div class="cases_nei">
        <div style="height: 70px;"></div>
        <!--详细信息-->
        <div class="cases_nei_center">
            <div class="cases_nei_center_on">
                <div style="height: 37px;"></div>
                <!--左图-->
                <div class="cases_nei_center_on_img"> <img src="{{$data->avatar}}" alt="{{$data->name}}" title="{$data->name}}"> </div>
                <!--右介绍-->
                <div class="cases_nei_center_on_p">
                    <p class="cases_nei_center_on_p_on"><b>{{$data->name}}</b></p>
                    <p class="cases_nei_center_on_p_to">小区 : {{$data->xiaoqu}}</p>
                    <p class="cases_nei_center_on_p_to">户型 :{{$data->house_type}}</p>
                    <p class="cases_nei_center_on_p_to">风格 :{{$data->style}}</p>
                    <p class="cases_nei_center_on_p_to">面积 : {{$data->area}}㎡</p>
                    <div class="cases_nei_center_on_p_hr"></div>
                    <p class="cases_nei_center_on_p_so">设计师说:</p>
                    <p class="cases_nei_center_on_p_so cases_nei_con1"> {{$data->say}}</p>
                    <div class="cases_nei_ycconl" style="display: none;"> 更多 </div>
                </div>
            </div>
        </div>



@endsection
