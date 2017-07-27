<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="/jfsc/Public/Index/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="/jfsc/Public/Index/css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="/jfsc/Public/Index/css/mystyle.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="/jfsc/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/jfsc/Public/Index/js/bootstrap-3.1.1.min.js"></script>
<!-- //js -->	
<!-- cart -->
<script src="/jfsc/Public/Index/js/simpleCart.min.js"> </script>
<!-- cart -->
     <style>
         .sousuo:hover
         {
             background-color: #A9A9A9;
         }
     </style>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 class="navbar-brand"><a  href="index.html">積分商城</a></h1>
				</div>
				<!--navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="/jfsc/index.php" class="active">主頁</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">全部商品分類<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-4" >
								<div class="row">
									<?php if(is_array($type)): foreach($type as $key=>$vo): ?><div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px"><?php echo ($vo["type_name"]); ?></h4>
										<ul class="multi-column-dropdown">
											<?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="typeli"><a class="list" href="/jfsc/index.php?c=product&a=index&typename=<?php echo ($list["type_name"]); ?>"><?php echo ($list["type_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
									</div><?php endforeach; endif; ?>
								</div>
							</ul>
						</li>
					   <li class="dropdown grid">
							<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">積分範圍<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-4" style="min-width: 200px;">
								<div class="row">
									<div class="col-sm-3" style="min-width: 200px;">
										<h4>積分:</h4>
										<ul class="multi-column-dropdown">
											<li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=1">1-2000</a></li>
											<li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=2">2001-5000</a></li>
											<li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=3">5001-10000</a></li>
											<li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=4">10001-50000</a></li>
											<li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=5">50001-200000</a></li>
											<li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=6">200000以上</a></li>
										</ul>
									</div>
								</div>
							</ul>
						</li>
						<li class="dropdown grid">
							<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">人氣值排行 <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-4" style="min-width: 200px;">
								<div class="row">
									<div class="col-sm-3" style="min-width: 200px;">
										<h4>人氣</h4>
										<ul class="multi-column-dropdown">
											<?php $a=1;?>
											<?php if(is_array($producti)): foreach($producti as $key=>$vo): ?><li><a class="list clicknum" href="/jfsc/index.php?c=product&a=prodetail&prd_id=<?php echo ($vo["prd_id"]); ?>" attr-id="<?php echo ($vo["prd_id"]); ?>"><?php echo ($a++); ?>.<?php echo ($vo["p_Name"]); ?></a></li><?php endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</ul>
						</li>
					</ul> 
					<!--/.navbar-collapse-->
				</div>
				<!--//navbar-header-->
			</nav>
			<div class="header-info">
				<div class="header-right search-box">
					<a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>				
					<div class="search">
						<form class="navbar-form" action="/jfsc/index.php/Home/product/index" method="get">
							<input type="text" class="form-control sear" name="p_Name">
							<button type="submit" class="btn btn-default" aria-label="Left Align">
								搜索
							</button>
                            <div >
                                <a class="sousuo" style="float:left;display: block;font-size: 20px;color:#000000;width:159px;text-align: left"></a>
                                <div style="clear: both;"></div>
                                <a class="sousuo" style="float:left;display: block;font-size: 20px;color:#000000;width:159px;text-align: left"></a>
                                <div style="clear: both;"></div>
                                <a class="sousuo" style="float:left;display: block;font-size: 20px;color:#000000;width:159px;text-align: left"></a>
                                <div style="clear: both;"></div>
                                <a class="sousuo" style="float:left;display: block;font-size: 20px;color:#000000;width:159px;text-align: left"></a>
                                <div style="clear: both;"></div>
                                <a class="sousuo" style="float:left;display: block;font-size: 20px;color:#000000;width:159px;text-align: left"></a>
                                <div style="clear: both;"></div>
                                <a class="sousuo" style="float:left;display: block;font-size: 20px;color:#000000;width:159px;text-align: left"></a>
                                <div style="clear: both;"></div>
                            </div>
						</form>
					</div>	
				</div>
				<div class="header-right login">
					<a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
					<div id="loginBox">
						<?php if(empty($Hukcuser)): ?><div id="loginForm">
							<fieldset id="body">
								<fieldset>
									<label for="username">用戶名</label>
									<input type="text" name="username" id="username">
								</fieldset>
								<fieldset>
									<label for="password">密碼</label>
									<input type="password" name="password" id="password">
								</fieldset>
								<input type="submit" class="login" value="登錄" onclick="login.check()">
								<label for="check"><input type="checkbox" id="check" style="width: auto;margin: 3px 6px 0 0;float: left;padding: 0;border: 0;"> <i>Remember me</i></label>
							</fieldset>
							<p>New User ? <a class="sign" href="account.html">Sign Up</a> <span><a href="#">Forgot your password?</a></span></p>
						</div>
							<?php else: ?>
							<div id="loginForm">
								<fieldset id="body" >
									<fieldset>
										<label for="username">用戶名</label>
										<input type="text" name="user_name" id="usernamee" value="<?php echo ($Hukcuser["user_name"]); ?>">
									</fieldset>
									<fieldset>
										<label for="password">修改密碼</label>
										<input type="text" name="user_password" id="password" >
									</fieldset>
									<fieldset>
										<label for="password">確認密碼</label>
										<input type="text" name="user_repassword" id="repassword" >
									</fieldset>
									<fieldset>
										<label for="username">郵箱</label>
										<input type="text" name="user_email" value="<?php echo ($Hukcuser["user_email"]); ?>">
									</fieldset>
									<fieldset>
										<label for="username">電話</label>
										<input type="text" name="user_phone" value="<?php echo ($Hukcuser["user_phone"]); ?>">
									</fieldset>
									<fieldset>
										<label for="username">地址</label>
										<input type="text" name="user_place" id="user_place" value="<?php echo ($Hukcuser["user_place"]); ?>">
									</fieldset>
									<fieldset>
										<label>性别</label>
										<label  for="boy" style="display: inline-block;vertical-align: middle;">男</label> <input style="width:50px;" id="boy" name="user_sex" type="radio" value="男" <?php if($Hukcuser[user_sex] == '男'): ?>checked="checked"<?php endif; ?> />
										<label for="girl" style="display: inline-block;vertical-align: middle;">女</label> <input style="width:50px;" id="girl" name="user_sex" type="radio" value="女"  <?php if($Hukcuser[user_sex] == '女'): ?>checked="checked"<?php endif; ?> />
									</fieldset>
									<input  type="submit" class="login" id="jfsc-button-change" value="保存" >
									<input  type="submit" class="login"  value="退出登錄" style="margin-top: 5px;" onclick="javascript:window.location.href='/jfsc/index.php?c=index&a=loginout';">
								</fieldset>
								</div><?php endif; ?>
					</div>
				</div>
				<div class="header-right cart">
					<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    <div class="cart-box">
                        <h4><a href="javascript:void(0);">
                            <span > 積分:  </span> (<span><?php echo ($Hukcuser["user_jifen"]); ?></span>)
                        </a></h4>
                        <p><a href="javascript:void(0);" class="simpleCart_empty islogin" attr-where="1" attr-user="<?php echo ($Hukcuser["user_id"]); ?>">積分明細</a></p>
                        <p><a href="javascript:void(0);" class="simpleCart_empty  islogin" attr-where="2" attr-user="<?php echo ($Hukcuser["user_id"]); ?>">積分記錄</a></p>
                        <div class="clearfix"> </div>
                    </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//header-->
	<!--banner-->
	<div class="banner">
		<div class="container">
			<h2 class="hdng">More <span>Goods</span> for u</h2>
			<p>Our best service make your day special</p>
			<a href="/jfsc/index.php?c=product&a=index">SHOP NOW</a>
			</div>
			<div class="banner-text">
			<div class="pitcureplay" >
				<div id="slidershow" class="carousel" data-ride="carousel" data-interval="3000" >
					<!-- 设置图片轮播的顺序 -->
					<ol class="carousel-indicators">
						    <?php $i=0; ?>
						    <?php if(is_array($lunbo)): foreach($lunbo as $key=>$vo): ?><li   <?php if($i == 0): ?>class="active"<?php endif; ?> data-target="#slidershow" data-slide-to="<?php echo ($i++); ?>" ></li><?php endforeach; endif; ?>
					</ol>
					<!-- 设置轮播图片 -->
					<div class="carousel-inner">
						<?php $i=0; ?>
						<?php if(is_array($lunbo)): foreach($lunbo as $key=>$vo): ?><div  <?php if($i++ == 0): ?>class="item active"<?php else: ?>class="item"<?php endif; ?>>
						<img src="<?php echo ($vo["SlideImg"]); ?>" alt="" >
					    </div><?php endforeach; endif; ?>
				</div>
				<a class="left carousel-control" href="#slidershow" role="button" data-slide="prev" style="opacity: 0.1;border:none;">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#slidershow" role="button" data-slide="next" style="opacity: 0.1;border:none;">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<script src="/jfsc/Public/jquery/jquery.js"></script>
			<script src="/jfsc/Public/bootstrap/js/bootstrap.min.js"></script>
		</div>
		</div>
	</div>
		<!--</div>-->
	<!--</div>-->
	<!--//banner-->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<div class="col-md-8 gallery-grid glry-one">
					<a href="javascript:void(0);"><img src="/jfsc/Public/Index/images/g1.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
							<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
							<a class="shop" href="single.html">SHOP NOW</a>
							<div class="clearfix"> </div>
						</div>
					</a>
					<div class="galy-info">
						<p>Lorem Ipsum is simply</p>
						<div class="galry">
							<div class="prices">
								<h5 class="item_price">$95.00</h5>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid glry-two">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g2.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info galrr-info-two">
							<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
							<a class="shop" href="single.html">SHOP NOW</a>
							<div class="clearfix"> </div>
						</div>
					</a>
					<div class="galy-info">
						<p>Lorem Ipsum is simply</p>
						<div class="galry">
							<div class="prices">
								<h5 class="item_price">$95.00</h5>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<?php if(is_array($product)): foreach($product as $key=>$vo): ?><div class="col-md-3 gallery-grid clicknum" attr-id="<?php echo ($vo["prd_id"]); ?>">
					<a href="javascript:void(0);"><img src="<?php echo ($vo["pImg"]); ?>" class="img-responsive" alt=""/>
						<div class="gallery-info">
							<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
							<a class="shop" href="single.html">SHOP NOW</a>
							<div class="clearfix"> </div>
						</div>
					</a>
					<div class="galy-info">
						<p><?php echo ($vo["p_Name"]); ?></p>
						<div class="galry">
							<div class="prices">
								<h5 class="item_price"><?php echo ($vo["price"]); ?>分</h5>
							</div>
							<!--<div class="rating">-->
								<!--<span>☆</span>-->
								<!--<span>☆</span>-->
								<!--<span>☆</span>-->
								<!--<span>☆</span>-->
								<!--<span>☆</span>-->
							<!--</div>						-->
							<div class="clearfix"></div>
						</div>
					</div>
				</div><?php endforeach; endif; ?>
			</div>	
		</div>
	</div>
	<!--//gallery-->
	<!--subscribe-->
	<div class="subscribe">
		 <div class="container">
			 <h3>Newsletter</h3>
			 <form>
				 <input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
				 <input type="submit" value="Subscribe">
			 </form>
		 </div>
	</div>
	<!--//subscribe-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-2 footer-grid">
					<h4>company</h4>
					<ul>
						<li><a href="products.html">products</a></li>
						<li><a href="#">Work Here</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Happenings</a></li>
						<li><a href="#">Dealer Locator</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<h4>service</h4>
					<ul>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Warranty</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>order & returns</h4>
					<ul>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Shipping Policy</a></li>
						<li><a href="#">Return Policy</a></li>
						<li><a href="#">Digital Gift Card</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<h4>legal</h4>
					<ul>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms and Conditions</a></li>
						<li><a href="#">Social Responsibility</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid icons">
					<h4>Connect with Us</h4>
					<ul>
						<li><a href="#"><img src="/jfsc/Public/Index/images/i1.png" alt=""/>Follow us on Facebook</a></li>
						<li><a href="#"><img src="/jfsc/Public/Index/images/i2.png" alt=""/>Follow us on Twitter</a></li>
						<li><a href="#"><img src="/jfsc/Public/Index/images/i3.png" alt=""/>Follow us on Google-plus</a></li>
						<li><a href="#"><img src="/jfsc/Public/Index/images/i4.png" alt=""/>Follow us on Pinterest</a></li>
				    </ul>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="footer-bottom">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
	<script src="/jfsc/Public/Js/dialog/layer.js"></script>
	<script src="/jfsc/Public/Js/dialog.js"></script>
	<script src="/jfsc/Public/Js/jquery.cookie.js"></script>
	<script src="/jfsc/Public/Index/js/cookie.js"></script>
	<script src="/jfsc/Public/Index/js/login.js"></script>
<script>
	var SCOPE=
	{
	  'change_url':"/jfsc/index.php?c=User&a=save",
		'jump_url':"",
	};
	$('#jfsc-button-change').click(function()
	{
		var data =$('#body').serializeArray();
		var postdata={};
		var url =SCOPE.change_url;
		$(data).each(function(i)
		{
			postdata[this.name]=this.value;
		});
		console.log(postdata);
		$.post(url,postdata,function(result)
		{
			if(result.status==1)
			{
				return dialog.success(result.message,SCOPE.jump_url);
			}
			if(result.status==0)
			{
				return dialog.error(result.message);
			}
		},'JSON');
	});
    function msgnotok(msg)
    {
        layer.msg(
                msg, {
                    icon: 2,
                    shade: [0.5, '#000'],
                    time:1000,
                    shadeColse:true
                });
    }
    $('.clicknum').click(function()
    {
        var prd_id = $(this).attr("attr-id");
        var data={};
        data={'prd_id':prd_id};
        var url="/jfsc/index.php?c=Product&a=Addclick";
        $.post(url,data,function()
        { });
    });
    $('.islogin').click(function()
    {
        var user=$(this).attr('attr-user');
        var where=$(this).attr("attr-where");
        if(user.length==0)
        {
            return dialog.error("您还未进行登录");
        }
        if(where==1)
        {
            window.location.href="/jfsc/index.php?c=Jifen&a=jfdetail&user_id="+user;
        }
        if(where==2)
        {
            window.location.href="/jfsc/index.php?c=Jifen&a=jfrecord&user_id="+user;
        }
    });

      window.onload=SearchMethod();
    function SearchMethod()
    {
        //jquery的绑定oninput事件

        $('.sear').bind('input propertychange', function() {
          console.log(233);
            var chaxun=$(this).val();
            var data=new Object();
            data.chaxun=chaxun;
            var showi=$('.sousuo');
            for(var m=0;m<=showi.length-1;m++)
            {
                $(showi[m]).html("");
            }
            var url="/jfsc/index.php?c=Product&a=searchmessage";
            $.post(url,data,function(result)
            {

                if(result.status==1)
                {
                    var show=$('.sousuo');
                    for(var t=0;t<=show.length-1;t++)
                    {
                      $(show[t]).html(result.chaxun[t]);
                    }
                }
            },'JSON');
        });

//            var chaxun=$(searcher).val();

    }
</script>
</body>
</html>