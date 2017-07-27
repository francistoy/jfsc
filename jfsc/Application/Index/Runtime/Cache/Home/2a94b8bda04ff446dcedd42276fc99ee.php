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
						<li><a href="<?php echo U('Index/index');?>" class="active">主頁</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">全部商品分類<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-4" >
								<div class="row">
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">缤纷礼券</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">旅游票券</a></li>
											<li class="typeli"><a class="list" href="products.html">食品饮料</a></li>
											<li class="typeli"><a class="list" href="products.html">时尚生活</a></li>
											<li class="typeli"><a class="list" href="products.html">其他</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">户外出行</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">户外装备</a></li>
											<li class="typeli"><a class="list" href="products.html">运动健身</a></li>
											<li class="typeli"><a class="list" href="products.html">汽车用品</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">家居用品</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">居家日用</a></li>
											<li class="typeli"><a class="list" href="products.html">家纺用品</a></li>
											<li class="typeli"><a class="list" href="products.html">厨房用品</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">美容护理</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">面部护理</a></li>
											<li class="typeli"><a class="list" href="products.html">洗发护发</a></li>
											<li class="typeli"><a class="list" href="products.html">个护健康</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">箱包饰品</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">潮流女包</a></li>
											<li class="typeli"><a class="list" href="products.html">精品男包</a></li>
											<li class="typeli"><a class="list" href="products.html">功能箱包</a></li>
											<li class="typeli"><a class="list" href="products.html">皮具配件</a></li>
											<li class="typeli"><a class="list" href="products.html">流行饰品</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">日用家电</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">厨房电器</a></li>
											<li class="typeli"><a class="list" href="products.html">生活电器</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>
									<div class="col-sm-3 typelist" >
										<h4 style="margin-bottom: 10px">数码办公</h4>
										<ul class="multi-column-dropdown">
											<li class="typeli"><a class="list" href="products.html">电脑及配件</a></li>
											<li class="typeli"><a class="list" href="products.html">数码及配件</a></li>
											<li class="typeli"><a class="list" href="products.html">手机及配件</a></li>
											<li class="typeli"><a class="list" href="products.html">商务办公</a></li>
											<!--<li><a class="list" href="products.html">Kids</a></li>-->
											<!--<li><a class="list" href="products.html">Parents</a></li>-->
										</ul>
									</div>

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
											<li><a class="list" href="products.html">1-2000</a></li>
											<li><a class="list" href="products.html">2001-5000</a></li>
											<li><a class="list" href="products.html">5001-10000</a></li>
											<li><a class="list" href="products.html">10001-50000</a></li>
											<li><a class="list" href="products.html">50001-200000</a></li>
											<li><a class="list" href="products.html">200000以上</a></li>
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
											<li><a class="list" href="products.html">1.Friend</a></li>
											<li><a class="list" href="products.html">2.Lover</a></li>
											<li><a class="list" href="products.html">3.Sister</a></li>
											<li><a class="list" href="products.html">4.Brother</a></li>
											<li><a class="list" href="products.html">5.Kids</a></li>
											<li><a class="list" href="products.html">6.Parents</a></li>
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
						<form class="navbar-form">
							<input type="text" class="form-control">
							<button type="submit" class="btn btn-default" aria-label="Left Align">
								搜索
							</button>
						</form>
					</div>	
				</div>
				<div class="header-right login">
					<a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
					<div id="loginBox">                
						<form id="loginForm">
							<fieldset id="body">
								<fieldset>
									<label for="email">用戶名</label>
									<input type="text" name="email" id="email">
								</fieldset>
								<fieldset>
									<label for="password">密碼</label>
									<input type="password" name="password" id="password">
								</fieldset>
								<input type="submit" id="login" value="登錄">
								<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
							</fieldset>
							<p>New User ? <a class="sign" href="account.html">Sign Up</a> <span><a href="#">Forgot your password?</a></span></p>
						</form>
					</div>
				</div>
				<div class="header-right cart">
					<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					<div class="cart-box">
						<h4><a href="checkout.html">
							<span > 積分:  </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 1</span>)
						</a></h4>
						<p><a href="<?php echo U('Jifen/jfdetail');?>" class="simpleCart_empty">積分明細</a></p>
						<p><a href="<?php echo U('Jifen/jfrecord');?>" class="simpleCart_empty">積分記錄</a></p>
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
			<a href="<?php echo U('Product/index');?>">SHOP NOW</a>
			</div>
		</div>
			<div class="banner-text">
			<div class="pitcureplay" style="width: 394px;height: 357px;">
				<div id="slidershow" class="carousel" data-ride="carousel" style="width: 394px;height: 357px;">
					<!-- 设置图片轮播的顺序 -->
					<ol class="carousel-indicators">

							<li class="active"  data-target="#slidershow" data-slide-to="0"></li>
						    <li class=""  data-target="#slidershow" data-slide-to="1"></li>

					</ol>
					<!-- 设置轮播图片 -->
					<?php $i=0; ?>
					<div class="carousel-inner">
						<div class="item active">
						<img src="/jfsc/Public/Index/images/2.png" alt="">
					</div>
						<div class="item">
							<img src="/jfsc/Public/Index/images/2.png" alt="">
						</div>
				</div>
				<a class="left carousel-control " href="#slidershow" role="button" data-slide="prev" style="opacity: 0.1">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#slidershow" role="button" data-slide="next" style="opacity: 0.1">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<script src="/jfsc/Public/jquery/jquery.js"></script>
			<script src="/jfsc/Public/bootstrap/js/bootstrap.min.js"></script>
		</div>
		</div>
		</div>
	</div>
	<!--//banner-->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<div class="col-md-8 gallery-grid glry-one">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g1.jpg" class="img-responsive" alt=""/>
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
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g3.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g4.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g5.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g6.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g7.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g8.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g9.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid ">
					<a href="products.html"><img src="/jfsc/Public/Index/images/g10.png" class="img-responsive" alt=""/>
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
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
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
</body>
</html>