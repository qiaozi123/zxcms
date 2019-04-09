$(function () {
   /*幻灯片轮播*/
    jQuery(".fullSlide").slide({ mainCell:".bd ul",effect:"leftLoop", autoPlay:true,vis:"auto", scroll:1, autoPlay:true,delayTime:300});
    /*设计师轮播*/
    jQuery(".fullSlides").slide({mainCell: ".bd ul", effect: "left", autoPlay: true, delayTime: 300});
    /*整装轮播*/
    jQuery(".fullSlides_porduct").slide({mainCell: ".bd ul", effect: "left", autoPlay: true, delayTime: 300});
    /*五大空间*/
    jQuery(".fullSlides_buttom").slide({mainCell: ".bd ul", effect: "left", autoPlay: true, delayTime: 300});
    /*全明星五大空间*/
    jQuery(".fullSlides_star").slide({mainCell: ".bd ul", effect: "left", autoPlay: true, delayTime: 300});

    /*设置colick*/
     var cookie=$.cookie('footer_name');
     if(cookie=='off'){
         $('.footer_offer').hide();
     }else {
          $('.footer_offer').show();
     }
    /*底部报名框*/
    $('.footer_offer_center_button').click(function() {
        var name = $('#footer_offer_name').val().trim();
        var phone = $('#footer_offer_phone').val().trim();
        var mianji = $('#footer_offer_mianji').val().trim();
        if(!name) {
            layer.alert('预约失败，请填写正确的姓名', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('预约失败，请填写正确的手机号码', {icon: 5});
            return;
        }
        if(!mianji || isNaN(parseInt(mianji))) {
            layer.alert('预约失败，请填写正确的面积', {icon: 5});
            return;
        }
        var formData = $('#footer_offer_form').serialize();
        $.ajax({
            type:'POST',
            url:$('#footer_offer_form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                    var expiresDate= new Date();
                    expiresDate.setTime(expiresDate.getTime() + (10 * 60 * 1000));
                    $.cookie('footer_name','off',{path:"/",expires : expiresDate});
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })

   /*首页整装报价*/
    $('.portal_submit').click(function() {
        var name = $('#portal_product_name').val().trim();
        var phone = $('#portal_product_phone').val().trim();
        var mianji = $('#portal_product_mianji').val().trim();
        if(!name) {
            layer.alert('获取失败，请填写正确的地址', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('获取失败，请填写正确的手机号码', {icon: 5});
            return;
        }
        if(!mianji || isNaN(parseInt(mianji))) {
            layer.alert('获取失败，请填写正确的面积', {icon: 5});
            return;
        }
        var formData = $('#portal_product_form').serialize();
        $.ajax({
            type:'POST',
            url:$('#portal_product_form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })

    /*首页参观在建工地*/
    $('.portal_to_button').click(function() {
        var name = $('#portal_to_name').val().trim();
        var phone = $('#portal_to_phone').val().trim();
        if(!name) {
            layer.alert('预约失败，请填写正确的姓名', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('预约失败，请填写正确的手机号码', {icon: 5});
            return;
        }

        var formData = $('#portal_to_forme').serialize();
        $.ajax({
            type:'POST',
            url:$('#portal_to_forme').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })
/*隐藏打开*/
    $('.footer_offer_cha').click(function () {
        $('.footer_offer').hide();
        $('.footer_offer_cha_zhanxian').show();
    })

    $('.footer_offer_cha_zhanxian').click(function () {
        $('.footer_offer').show();
        $('.footer_offer_cha_zhanxian').hide();
    })
    /*导航跟随*/

    $(function(){
        var navH = $(".mo_top_logo").offset().top;
        $(window).scroll(function(){
            var scroH = $(this).scrollTop();
            if(scroH>navH){
                $(".mo_top_logo").css({"position":"fixed","top":0,"z-index":999,"opacity":0.9});
            }else if(scroH<=navH){
                $(".mo_top_logo").css({"position":"relative","margin":"0 auto"});
            }
            console.log(scroH==navH);
        })
    });

/*===========
     案例
=============*/
$('.cases_morefg').click(function () {
    var more=$('.cases_morefg span').html();
    if(more=='更多'){
        $('.cases_center_on_fengge_os_on').css('height','auto');
        $('.cases_morefg span').html('收回');
        $('.cases_offer').hide();
        $('.cases_offer_s').show();
    }else{
        $('.cases_center_on_fengge_os_on').css('height','30px');
        $('.cases_morefg span').html('更多');
        $('.cases_offer').show();
        $('.cases_offer_s').hide();
    }
})

    $('.cases_morefg_s').click(function () {
        var more=$('.cases_morefg_s span').html();
        if(more=='更多'){
            $('.cases_center_on_fengge_os_s').css('height','auto');
            $('.cases_morefg_s span').html('收回');

        }else{
            $('.cases_center_on_fengge_os_s').css('height','30px');
            $('.cases_morefg_s span').html('更多');

        }
    })
    /*案例预约楼盘*/
    $('.cases_submit').click(function() {
        var name = $('#cases_product_name').val().trim();
        var phone = $('#cases_product_phone').val().trim();
        var mianji = $('#cases_product_mianji').val().trim();
        if(!name) {
            layer.alert('获取失败，请填写正确的地址', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('获取失败，请填写正确的手机号码', {icon: 5});
            return;
        }
        if(!mianji || isNaN(parseInt(mianji))) {
            layer.alert('获取失败，请填写正确的面积', {icon: 5});
            return;
        }
        var formData = $('#cases_product_form').serialize();
        $.ajax({
            type:'POST',
            url:$('#cases_product_form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })

    /*案例预约楼盘S*/
    $('.cases_submit_s').click(function() {
        var name = $('#cases_product_name_s').val().trim();
        var phone = $('#cases_product_phone_s').val().trim();
        var mianji = $('#cases_product_mianji_s').val().trim();
        if(!name) {
            layer.alert('获取失败，请填写正确的地址', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('获取失败，请填写正确的手机号码', {icon: 5});
            return;
        }
        if(!mianji || isNaN(parseInt(mianji))) {
            layer.alert('获取失败，请填写正确的面积', {icon: 5});
            return;
        }
        var formData = $('#cases_product_form_s').serialize();
        $.ajax({
            type:'POST',
            url:$('#cases_product_form_s').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })



/*案例三级查询*/
    /*三级查询*/

    $('.style').click(function(events){
        $('.navmove b').show();
        $(".navmove span").show();
        index=$(".style").index(this);
        text=$(".style:eq("+index+")").text();
        if (text == '全部')
        {
            $('.fg').remove();
        }
        else
        {
            url="<a href='javascript:;' class='fg'><span>"+text+"<em>X</em></span></a>";
            if ($('.fg').length>0)
            {
                $('.fg').remove();
                $(".navmove").append(url)
            }
            else
            {
                $(".navmove").append(url)
            }
        }

        $('#style').val($(this).data('sp'));
        $('.style').removeClass("on");
        $(this).addClass('on');
        var post_data=$('.ajax_search').serialize();
        var post_url=$('.ajax_search').attr('action');
        $.ajax({
            type: "POST",
            url: post_url,
            data: post_data,
            success: function(msg){
                $('#cases_show_s').html(msg);
                $('.cases_center_so').css('display','none');
                $('.cases_center_so').css('display','block');
            }
        });
        return false;
    });

    $('.layout').click(function(){

        $('.navmove b').show();
        $(".navmove span").show();
        index=$(".layout").index(this);
        text=$(".layout:eq("+index+")").text();
        if (text == '全部')
        {
            $('.hu').remove();
        }
        else
        {
            url="<a href='javascript:;' class='hu'><span>"+text+"<em>X</em></span></a>";
            if ($('.hu').length>0)
            {
                $('.hu').remove();
                $(".navmove").append(url)
            }
            else
            {
                $(".navmove").append(url)
            }
        }

        $('#layout').val($(this).data('sp'));
        $('.layout').removeClass("on");
        $(this).addClass('on');
        var post_data=$('.ajax_search').serialize();
        var post_url=$('.ajax_search').attr('action');
        $.ajax({
            type: "POST",
            url: post_url,
            data: post_data,
            success: function(msg){
                $('#cases_show_s').html(msg);
                $('.cases_center_so').css('display','none');
                $('.cases_center_so').css('display','block');

            }
        });
        return false;
    });




    $('.size').click(function(){

        $('.navmove b').show();
        $(".navmove span").show();
        index=$(".size").index(this);
        text=$(".size:eq("+index+")").text();

        if (text == '全部')
        {
            $('.hu').remove();
        }
        else
        {
            url="<a href='javascript:;' class='mj'><span>"+text+"<em>X</em></span></a>";
            $(".navmove").append(url)
            if ($('.mj').length>0)
            {
                $('.mj').remove();
                $(".navmove").append(url)
            }
            else
            {
                $(".navmove").append(url)
            }
        }

        $('#size').val($(this).data('sp'));
        $('.size').removeClass("on");
        $(this).addClass('on');
        var post_data=$('.ajax_search').serialize();
        var post_url=$('.ajax_search').attr('action');

        $.ajax({
            type: "POST",
            url: post_url,
            data: post_data,
            success: function(msg){
                $('#cases_show_s').html(msg);
                $('.cases_center_so').css('display','none');
                $('.cases_center_so').css('display','block');

            }
        });
        return false;
    });

    $(".navmove").on('click','.mj',function(){
        if($(".navmove a").length<2)
        {
            $(".navmove span").hide();
        }
        $(".cases_center_on_fengge_os:eq(2) a").removeClass("on");
        $(".cases_center_on_fengge_os:eq(2) a").eq(0).addClass("on");
        $("#size").val("");
        $('.mj').remove();
        style=$("#style").val();
        layout=$("#layout").val();
        var post_url=$('.ajax_search').attr('action');
        $.ajax({
            type: "POST",
            url: post_url,
            data: {style:style,layout:layout,size:""},
            success: function(msg){
                $('#cases_show_s').html(msg);
            }
        });
    });


    $(".navmove").on('click','.hu',function(){
        if($(".navmove a").length<2)
        {
            $(".navmove span").hide();
        }
        $("#layout").val("");
        $(".cases_center_on_fengge_os:eq(1) a").removeClass("on");
        $(".cases_center_on_fengge_os:eq(1) a").eq(0).addClass("on");
        $('.hu').remove();
        style=$("#style").val();
        size=$("#size").val();
        var post_url=$('.ajax_search').attr('action');
        $.ajax({
            type: "POST",
            url: post_url,
            data: {style:style,layout:"",size:size},
            success: function(msg){
                $('#cases_show_s').html(msg);
            }
        });
    });


    $(".navmove").on('click','.fg',function(){
        if($(".navmove a").length<2)
        {
            $(".navmove span").hide();
        }
        $("#style").val("");
        $(".cases_center_on_fengge_os:eq(0)  a").removeClass("on");
        $(".cases_center_on_fengge_os:eq(0)  a").eq(0).addClass("on");
        $('.fg').remove();
        layout=$("#layout").val();
        size=$("#size").val();
        var post_url=$('.ajax_search').attr('action');
        $.ajax({
            type: "POST",
            url: post_url,
            data: {style:"",layout:layout,size:size},
            success: function(msg){
                $('#cases_show_s').html(msg);
            }
        });
    });


    $('.navmove b').click(function(){
        $('.navmove b').hide();
        $('.fg').remove();
        $('.hu').remove();
        $('.mj').remove();
        $(".cases_center_on_fengge_os:eq(0) a").removeClass("on");
        $(".cases_center_on_fengge_os:eq(0) a").eq(0).addClass("on");
        $(".cases_center_on_fengge_os:eq(1) a").removeClass("on");
        $(".cases_center_on_fengge_os:eq(1) a").eq(0).addClass("on");
        $(".cases_center_on_fengge_os:eq(2) a").removeClass("on");
        $(".cases_center_on_fengge_os:eq(2) a").eq(0).addClass("on");
        var post_url=$('.ajax_search').attr('action');
        $.ajax({
            type: "POST",
            url: post_url,
            data: {style:"",layout:"",size:""},
            success: function(msg){
                $('#cases_show_s').html(msg);
            }
        });
    });

    /*=============
      设计师
    =============*/
    $('.des_input_you_button').click(function() {

        var phone = $('#design_design_phone').val().trim();
        var mianji = $('#design_design_mianji').val().trim();

        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('获取失败，请填写正确的手机号码', {icon: 5});
            return;
        }
        if(!mianji || isNaN(parseInt(mianji))) {
            layer.alert('获取失败，请填写正确的面积', {icon: 5});
            return;
        }
        var formData = $('#design_design_form').serialize();
        $.ajax({
            type:'POST',
            url:$('#design_design_form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })
   /*==========
       新闻
   ============*/
    jQuery(".slider .bd li").first().before( jQuery(".slider .bd li").last() );jQuery(".slider .pnBtn").hover(function(){ jQuery(this).find(".arrow").show() },function(){ jQuery(this).find(".arrow").hide() });jQuery(".slider").slide({ mainCell:".bd ul", effect:"leftLoop",  autoPlay:true, vis:3 });
    /*============
       整装手风琴
    * ============*/
    $(".lyLunList").hover(function(){
        $(this).addClass("lyLunAct");
        $(this).siblings(".lyLunList").removeClass("lyLunAct");
        $(this).find(".lyLunHover").stop(true,true).fadeOut(200);
        $(this).stop().animate({width:"992px"},500);
        $(this).siblings(".lyLunList").stop(true,true).animate({width:"52px"},500);
        $(this).siblings(".lyLunList").find(".lyLunHover").stop(true,true).fadeIn(500);
    })

    /*全明星报名*/

    $('.star_button').click(function() {
        var name = $('#star_name').val().trim();
        var phone = $('#star_phone').val().trim();
        if(!name) {
            layer.alert('预约失败，请填写正确的姓名', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('预约失败，请填写正确的手机号码', {icon: 5});
            return;
        }

        var formData = $('#star_form').serialize();
        $.ajax({
            type:'POST',
            url:$('#star_form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })
/*整装内页轮播*/
    jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
/*案例内页*/
//大图切换
    jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200});
//小图做滚动切换
    jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:7,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext" });
/*案例内页报名*/
    /*首页参观在建工地*/
    $('.cases_nei_button').click(function() {
        var name = $('#cases_nei_name').val().trim();
        var phone = $('#cases_nei_phone').val().trim();
        if(!name) {
            layer.alert('预约失败，请填写正确的姓名', {icon: 5});
            return;
        }
        if(!phone || isNaN(parseInt(phone)) || !(/^1[3|4|5|6|7|8|9][0-9]\d{8}$/.test(phone))) {
            layer.alert('预约失败，请填写正确的手机号码', {icon: 5});
            return;
        }

        var formData = $('#cases_nei_form').serialize();
        $.ajax({
            type:'POST',
            url:$('#cases_nei_form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })
    /*K1*/
    $('#tijiao_chun').click(function() {
        var mianji_cun = $('.mianji_cun').val().trim();
        var dianhua_cun = $('.dianhua_cun').val().trim();
        if(!dianhua_cun || isNaN(parseInt(dianhua_cun)) || !(/^1[3|4|6|7|5|8|9][0-9]\d{8}$/.test(dianhua_cun))) {
            layer.alert('预约失败，请填写正确的手机号码', {icon: 5});
            return;
        }

        var formData = $('#chun-record-form').serialize();
        $.ajax({
            type:'POST',
            url:$('#chun-record-form').attr('action'),
            processData:true,
            data:formData,
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success:function(data) {
                if(!data) {
                    layer.alert('网络连接异常，请从新提交信息', {icon: 5});
                    return;
                }else if(data==1){
                    layer.alert('提交成功，稍后将有客服人员与您联系，请您耐心等待', {icon: 6});
                    setTimeout(function() {
                        javascript:self.location.reload();
                    },2000);
                }else {
                    layer.alert('信息提交异常，请从新提交信息', {icon: 5});
                    return;
                }
            }
        });
    })
   /*============
      地图
   * ============*/
    jQuery(".tabBar").slide({ mainCell:".conWrap", effect:"left", trigger:"click", pnLoop:false });

    /*说明*/
    $(function(){
        $a=$(".cases_nei_con1").text().length;

        if($a<=120){
            $(".cases_nei_ycconl").css("display","none");
        }else{
            $(".cases_nei_ycconl").css("display","block");
        }
    });
    /*详细*/
    $(".cases_nei_ycconl").click(function(){
        var html = $(this).html();
        if (html == '更多')
        {
            $('.cases_nei_con1').css({'height':'auto','overflow':'hidden'})
            $(this).html('收起')
        }
        else
        {
            $('.cases_nei_con1').css({'height':'150px','overflow':'hidden'})
            $(this).html('更多')
        }
    });

});