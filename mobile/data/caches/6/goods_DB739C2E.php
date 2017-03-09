<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:59:"F:/phpStudy/WWW/bianli100/mobile/themes/bianli100/goods.dwt";i:1;s:70:"F:/phpStudy/WWW/bianli100/mobile/themes/bianli100/library/comments.lbi";i:2;s:73:"F:/phpStudy/WWW/bianli100/mobile/themes/bianli100/library/page_footer.lbi";}s:7:"expires";i:1486636098;s:8:"maketime";i:1486632498;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title>百雀羚 面霜草本润白滋养精华霜50g 滋润美白保湿 _日用百货_最模板zuimoban.com-方便100网上超市，鼠标购物，购物即时送，克拉玛依外卖实体店、网购、微信购，克拉玛依鼠标超市便利店 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/bianli100/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/bianli100/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/bianli100/ectouch.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="data/static/js/common.js"></script><script type="text/javascript" src="themes/bianli100/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
// 筛选商品属性
jQuery(function($) {
	$(".info").click(function(){
		$('.goodsBuy .fields').slideToggle("fast");
	});
})
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
  <h1> 商品详情 </h1>
  <div class="header_r header_search"> <a class="ico_15" href="ectouch.php?act=share&content=百雀羚 面霜草本润白滋养精华霜50g 滋润美白保湿 &pic=images/201410/source_img/9_G_1414744531924.jpg"> 分享 </a> </div>
</header>
 
<script src="themes/bianli100/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="images/201410/thumb_img/9_thumb_G_1414744531653.jpg"  alt="百雀羚 面霜草本润白滋养精华霜50g 滋润美白保湿 " /></a></div>-->
      <ul>
        <li><a href="http://192.168.43.114/bianli100/images/201410/source_img/9_G_1414744531924.jpg"><img alt="" src="http://192.168.43.114/bianli100/images/201410/source_img/9_G_1414744531924.jpg"/></a></li>
              </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> 
              </ul>
    </div>
  </div>
  <div class="blank2"></div>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:false //自动播放
});
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 
<section class="goodsInfo">
  <a class="collect" id="collect_box" href="javascript:collect(9)" style="display: inline;"></a>
  <div class="title">
    <h1> 百雀羚 面霜草本润白滋养精华霜50g 滋润美白保湿 </br></h1>	  
    </li>
  </div>
  <ul>
        <li>本店售价：<b class="price">￥36.00元</b>　    <del>￥39.60元</del> 
    </li>
     
  </ul>
      <ul>
    <li> 
                    
                     
                    商品库存：                    110 件
                     
                    
                    </p>
                </div>
                <script>
                       
                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 100,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },
                                                                                                                                    
                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){
                                            return $('#product_num').val(num);
                                        }else{
                                            return parseInt($('#product_num').val());
                                        }
                                                                                                                                        
                                    },
                                    plus : function(){
                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                        if(num <= buyNumber.maxNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    },
                                    minus : function(){
                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                        if(num >= buyNumber.minNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    }
                                                                                                                                    
                                }
                            </script>
  </ul>
</section>
<div class="wrap">
  <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div>请选择<span></span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="javascript:addToCart(9)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
     <div class="fields">	 
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price"></font></li>
          <li></li>
        </ul>
        <ul class="ul2">
           
           
          
        </ul>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> <span class="ui-number radius5"> 
                        <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="110" type="number" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
             
            </span> </div>
        </ul>
      </div>
      <div class="option" > 
        <script type="text/javascript">
            function showDiv(){
                document.getElementById('popDiv').style.display = 'block';
				document.getElementById('hidDiv').style.display = 'block';
				document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
				document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
                document.getElementById('popDiv').style.display = 'none';
				document.getElementById('hidDiv').style.display = 'none';
            }
     </script>
        <button type="button" class="btn buy radius5" onClick="addToCart_quick(9)">立即购买</button>
        <button type="button" class="btn cart radius5" onclick="addToCart(9);">
        <div class="ico_01"></div>
        加入购物车</button>
        
        <div class="tipMask" id="hidDiv" style="display:none" ></div>
        <div class="popGeneral" id="popDiv" >
          <div class="tit">
            <h4>商品加入购物车</h4>
            <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
            <div id="left"> <img width="115" height="115" src="http://192.168.43.114/bianli100/images/201410/source_img/9_G_1414744531924.jpg"> </div>
            <div id="right">
              <p>百雀羚 面霜草本润白滋养精华霜50g 滋润美白保湿 </p>
              <span> 加入数量： <b id="cartNum"></b></span> <span> 总计金额： <b id="cartPrice"></b></span> 
            </div>
          </div>
          <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeDiv()" href="javascript:void(0);">继续购物</a> <a class="bnt2 flex_in radius5" href="flow.php">去结算</a> </div>
        </div>
         
      </div>
    </form>
  </section>
  <div class="guarantee">微信支付商家,正品保证,假一罚三,七天无条件退换货。</div>
</div>
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script> 
<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <li id="tabs2" onClick="tab(2)"> 参数</li>
      <li id="tabs3" onClick="tab(3)" class=""> 评价 <span class="review-count">(0)</span> </li>
      <li id="tabs4" onClick="tab(4)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
      <p><a title="点击查看大图片" href="http://img03.taobaocdn.com/imgextra/i3/52660971/T2SvnzXKxaXXXXXXXX_%21%2152660971.jpg" target="_blank"><img src="http://www.i0990.com/includes/ueditor/php/../../../images/image/78131414773308.jpg" width="690" height="2074"/></a><br/></p><table style="width: 648px;" class="ke-zeroborder" cellspacing="0" cellpadding="0" width="790">
	<tbody>
		<tr class="firstRow">
			<td></td>
		</tr>
		<tr>
			<td>
				<a title="点击查看大图片" href="http://img04.taobaocdn.com/imgextra/i4/52660971/T2KtbCXPpaXXXXXXXX_%21%2152660971.jpg" target="_blank"><img src="http://www.i0990.com/includes/ueditor/php/../../../images/image/14571414773310.jpg" width="690" height="2409"/></a> 
			</td>
		</tr>
		<tr>
			<td>
				<a title="点击查看大图片" href="http://img02.taobaocdn.com/imgextra/i2/52660971/T2A1vEXJRaXXXXXXXX_%21%2152660971.jpg" target="_blank"><img src="http://www.i0990.com/includes/ueditor/php/../../../images/image/41331414773312.jpg" width="690" height="1327"/></a></td></tr></tbody></table><p></p>    </div>
  </div>
  <div id="tab2" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
      <style type="text/css">
		.detail-list{clear:both; line-height:25px; padding:0px 5px; border-bottom:1px solid #ccc;background:#ebebeb;}
		.detail-list dt{float:left; width:40%; font-weight:bold; padding:10px 0px;line-height:25px;text-align:right;}
		.detail-list dt span{padding-right:15px;}
		.detail-list dd{float:left; width:60%; background:#fff; padding:10px 0px;line-height:25px;}
		.detail-list dd span{padding-left:10px;}
		</style>
           </div>
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <script type="text/javascript" src="data/static/js/utils.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:9;}554fcae493e564ee0dc75bdf2ebf94ca</div>
 </div>
  </div>
  <div id="tab4" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
              </ul>
    </div>
  </div>
</section>
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="http://192.168.43.114/bianli100/?computer=1"> 电脑版 </a> <a href="./"> 触屏版 </a> <a class="#">     </a> <a href="javascript:window.scrollTo(0,0);"> 返回顶部 </a> </p>
  <p class="region"> 
     
    ICP备案证书号: <a href="http://www.miibeian.gov.cn/" target="_blank"> 新ICP备6500990 </a> 
     
    &copy; 2005-2017 最模板zuimoban.com-方便100网上超市 版权所有，并保留所有权利。 </p>
  <!--<div class="favLink region"> <a href="http://www.ecmoban.com"> powered by ecmoban </a> </div>-->
</div>
<link href="themes/bianli100/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<script type="text/javascript" src="themes/bianli100/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script> 
 
<script type="text/javascript">
var goods_id = 9;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 9;
var now_time = 1486603698;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
<script type="text/javascript" src="data/static/js/transport.js"></script></body>
</html>