@extends('errors::minimal')

@section('title', __(\App\Model\WebConf::find(1)->title))
@section('code', '404')
@section('message', __('Not Found'))
