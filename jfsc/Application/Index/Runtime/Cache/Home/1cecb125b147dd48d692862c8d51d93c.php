<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>商品列表頁</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="/jfsc/Public/Index/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="/jfsc/Public/Index/css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="/jfsc/Public/Index/css/mystyle.css" type="text/css" rel="stylesheet" media="all">
<link href="/jfsc/Public/Index/css/form.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="/jfsc/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/jfsc/Public/Index/js/bootstrap-3.1.1.min.js"></script>
<!-- //js -->	
<!-- cart -->
<script src="/jfsc/Public/Index/js/simpleCart.min.js"> </script>
<!-- cart -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="/jfsc/Public/Index/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="/jfsc/Public/Index/js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin -->
</head>
<body>
	<!--header-->
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
											<?php if(is_array($producti)): foreach($producti as $key=>$vo): ?><li><a class="list clicknum" attr-id="<?php echo ($vo["prd_id"]); ?>" href="/jfsc/index.php?c=product&a=prodetail&prd_id=<?php echo ($vo["prd_id"]); ?>"><?php echo ($a++); ?>.<?php echo ($vo["p_Name"]); ?></a></li><?php endforeach; endif; ?>
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
							<input type="text" class="form-control" name="p_Name">
							<button type="submit" class="btn btn-default" aria-label="Left Align">
								搜索
							</button>
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
	<!--products-->
	<div class="products">
		<div class="container">
			<h2>Our Products</h2>			
			<div class="col-md-9 product-model-sec">
				<?php if(is_array($product)): foreach($product as $key=>$vo): ?><div class="product-grid clicknum" attr-id="<?php echo ($vo["prd_id"]); ?>" >
					<a href="/jfsc/index.php?c=product&a=prodetail&prd_id=<?php echo ($vo["prd_id"]); ?>">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox" >
							<img src="/jfsc/./<?php echo ($vo["pImg"]); ?>" class="img-responsive" alt="" style="border-radius:15px;" >
							<div class="b-wrapper">
								<h4 class="b-animate b-from-left  b-delay03">							
									<button>View</button>
								</h4>
							</div>
						</div>
					</a>				
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4><?php echo ($vo["p_Name"]); ?></h4>
							<span class="item_price"><?php echo ($vo["price"]); ?>分</span>
							<input type="text" class="item_quantity" value="1" />
							<input type="button" class="item_add items" value="Buy" attr-id="<?php echo ($vo["prd_id"]); ?>" attr-user="<?php echo ($Hukcuser); ?>">
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div><?php endforeach; endif; ?>
			</div>
			<div class="col-md-3 rsidebar span_1_of_left">
				<section  class="sky-form">
					<div class="product_right">
						<h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>分類</h4>
						<?php $t=1;?>
						<?php if(is_array($type)): foreach($type as $key=>$vo): ?><div class="tab">
							<ul class="place">								
								<li class="sort"><?php echo ($vo["type_name"]); ?></li>
								<li class="by"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></li>								
							</ul>
							<div class="clearfix"> </div>
							<div class="single-bottom">
								<?php if(is_array($vo["child"])): foreach($vo["child"] as $key=>$list): ?><a href="/jfsc/index.php?c=Product&a=index&typename=<?php echo ($list["type_name"]); ?>"><p><?php echo ($list["type_name"]); ?></p></a><?php endforeach; endif; ?>
						    </div>
					    </div>
							<?php $t++; endforeach; endif; ?>
						<input type="hidden" class="thecount" value="<?php echo ($t); ?>">
						<script>
							$(document).ready(function(){
								var jishu=$('.thecount').val();
								for(var i=0;i<=(jishu-1);i++)
								{
									$(".tab:eq("+i+") .single-bottom").hide();
								}
								//写进for循环里的绑定点击事件这样写才是正确的。
								for(var t=0;t<=(jishu-1);t++)
								{
									$(".tab:eq("+t+") ul").bind("click",{index:t},clickHandler);
								}
								function clickHandler(event)
								{
									var i= event.data.index;
									$(".tab:eq("+i+") .single-bottom").slideToggle(300);
									for(var f=0;f<=(jishu-1);f++)
									{
										if(i!=f)
										{
											$(".tab:eq("+f+") .single-bottom").hide();
										}
									}
								}
							});
						</script>
					</div>
				</section>
				<section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>積分範圍</h4>
					<div class="row row1 scroll-pane">

						<div class="col col-4">
							<label class="checkbox" style="padding-left: 15px;"><a style="color:#555555;"><a href="/jfsc/index.php?c=product&a=index&jifen_fanwei=1" style="color:#555555;">1 - 2000</a> </label>
							<label class="checkbox" style="padding-left: 15px;"><a href="/jfsc/index.php?c=product&a=index&jifen_fanwei=2" style="color:#555555;">2001 - 5000</a> </label>
							<label class="checkbox" style="padding-left: 15px;"><a href="/jfsc/index.php?c=product&a=index&jifen_fanwei=3" style="color:#555555;">5001 - 10000 </a></label>
							<label class="checkbox" style="padding-left: 15px;"><a href="/jfsc/index.php?c=product&a=index&jifen_fanwei=4" style="color:#555555;">10001 - 50000 </a></label>
							<label class="checkbox" style="padding-left: 15px;"><a href="/jfsc/index.php?c=product&a=index&jifen_fanwei=5" style="color:#555555;">50001 - 200000</a></label>
							<label class="checkbox" style="padding-left: 15px;"><a href="/jfsc/index.php?c=product&a=index&jifen_fanwei=6" style="color:#555555;">200000以上 </a></label>
						</div>
					</div>
				</section>
				<section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>人气</h4>
					<div class="row row1 scroll-pane">

						<div class="col col-4">
							<?php $p=1;?>
							<?php if(is_array($producti)): foreach($producti as $key=>$pro): ?><label class="checkbox" style="padding-left: 15px;"><a class="clicknum" attr-id="<?php echo ($pro["prd_id"]); ?>" href="/jfsc/index.php?c=product&a=prodetail&prd_id=<?php echo ($pro["prd_id"]); ?>" style="color:#555555;"><?php echo ($p); ?>.<?php echo ($pro["p_Name"]); ?></a></label>
								<?php $p++; endforeach; endif; ?>
						</div>
					</div>
				</section>


			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="row text-center" style="width: 1125px;">
		<div class="col-lg-12" style="width: 1125px;">
			<ul class="pagination" style="float:right;">
				<li >
					<a href="javascript:void(0);" style="float:right;margin-left: 5px;" class="pagego">确定</a>
					<div style="padding-left:5px;float:right;padding-top: 5px;"><span style="font-size:14px; ">到:</span>
						<input type="text" value="1" class="yeshu" style=" line-height: 30px;height: 25px;width: 40px;font-size: 14px;text-align: center;"/><span style="font-size:14px; ">&nbsp;页</span> </div>
					<a href="/jfsc/index.php?c=Product&a=index&jifen_fanwei=<?php echo ($jifen_fanwei); ?>&page=<?php echo ($pageres["totalPage"]); ?>&p_Name=<?php echo ($p_Name); ?>&typename=<?php echo ($typename); ?>" style="float:right;">尾页</a>&nbsp;&nbsp;
					<a href="/jfsc/index.php?c=Product&a=index&jifen_fanwei=<?php echo ($jifen_fanwei); ?>&page=<?php echo ($pageres["pageNext"]); ?>&p_Name=<?php echo ($p_Name); ?>&typename=<?php echo ($typename); ?>" style="float:right;">下一页</a>&nbsp;&nbsp;
					<a href="/jfsc/index.php?c=Product&a=index&jifen_fanwei=<?php echo ($jifen_fanwei); ?>&page=<?php echo ($pageres["pagePrev"]); ?>&p_Name=<?php echo ($p_Name); ?>&typename=<?php echo ($typename); ?>" style="float:right;">上一页</a>&nbsp;&nbsp;
					<a href="/jfsc/index.php?c=Product&a=index&jifen_fanwei=<?php echo ($jifen_fanwei); ?>&page=1&typename=<?php echo ($typename); ?>&p_Name=<?php echo ($p_Name); ?>" style="float:right;" >第一页</a>&nbsp;&nbsp;
					<a style="float:right;">    当前&nbsp;<font color=black><?php echo ($pageres["page"]); ?></font>/<font color=black><?php echo ($pageres["totalPage"]); ?></font>&nbsp;页</a>

				</li>
			</ul>
		</div>
	</div>
	<!--//products-->
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
	<input type="hidden" value="<?php echo ($typename); ?>" class="typename">
	<input type="hidden" value="<?php echo ($jifen_fanwei); ?>" class="jifen_fanwei">
	<input type="hidden" value="<?php echo ($p_Name); ?>" class="p_Name">
	<script src="/jfsc/Public/Js/dialog/layer.js"></script>
	<script src="/jfsc/Public/Js/dialog.js"></script>
	<script src="/jfsc/Public/Js/jquery.cookie.js"></script>
	<script src="/jfsc/Public/Index/js/cookie.js"></script>
	<script src="/jfsc/Public/Index/js/login.js"></script>
	<script>

		var SCOPE = {
			'yeshu_url':'/jfsc/index.php?c=product&a=index',
		}
		$('.pagego').click(function()
				{
					var typename=$('.typename').val();
					var yeshu=$('.yeshu').val();
                    if(isNaN(yeshu))
                    {
                        return dialog.error("请输入数字");
                    }
					var jifen_fanwei=$('.jifen_fanwei').val();
					var p_Name=$('.p_Name').val();
					window.location.href='/jfsc/index.php?c=Product&a=index&page='+yeshu+'&typename='+typename+'&jifen_fanwei='+jifen_fanwei+"&p_Name="+p_Name;
				}
		);
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
		$(".item_add").click(function()
		{

//			寻找上级的兄弟节点
            var quality=$(this).prev().val();
			var prd_id=$(this).attr('attr-id');
			var money=$(this).prevAll('.item_price').html();
			var prdname=$(this).prevAll('h4').html();
			var user=$(this).attr('attr-user');
			if(user.length==0)
			{
				return msgnotok("您还未进行登录");
			}
			if(isNaN(quality))
			{
				return dialog.error("输入的并不是数量");
			}
			var data=new Object();
			data.quality=quality;
			data.prd_id=prd_id;
			data.money=money;
			console.log(data);
			layer.open(
					{
						'title':'是否购买?',
						btn:['yes','no'],
						icon:3,
						closeBtn:2,
						content:'是否确定购买'+prdname+" "+quality+"件",
						scrollbar:true,
						yes:function() {
							$.post("/jfsc/index.php?c=Product&a=jiaoyi", data, function (result) {
								if (result.status == 1) {
									return dialog.success("购买成功", "");
								}
								if (result.status == 0) {
									return dialog.error(result.message);
								}
							}, 'JSON');
						}});
		});
		$('.clicknum').click(function()
		{
			var prd_id = $(this).attr("attr-id");
			var data={};
			data={'prd_id':prd_id};
			var url="/jfsc/index.php?c=Product&a=Addclick";
			$.post(url,data,function()
			{ });
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
	</script>
</body>
</html>