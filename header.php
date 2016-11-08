<?php 
	require 'parse_dom.php';
	require 'function.php';

	error_reporting(E_ALL);

	$GLOBALS['config'] = array(
		'name' => '北京北唐科技有限公司',
		'address' => '北京市海淀区罗庄北里锦秋家园3号楼408',
		'tel' => '010-56170124',
		'domain' => 'http://www.zuimeizijia.com',
		'email' => 'postmaster@zuimeizijia.com',
		'source_domain' => 'http://www.banlimi.com',
	);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="wb:webmaster" content="02a86715ad81acdd" />
<meta property="qc:admins" content="2163407277621641516375" />
<title><?php echo $config['name'];?></title>
<meta name="keywords" content="<?php echo $config['name'];?>,原创,手工,创意,首饰,家居,玩具,时尚生活,设计,设计师,手工,礼物,时尚购" />
<meta name="description" content="<?php echo $config['name'];?>，分享国内原创设计作品，推荐优质、创意的商品。" />	
<link href="http://www.banlimi.com/src/css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://www.banlimi.com/src/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="http://www.banlimi.com/src/js/main.js"></script>
<script type="text/javascript" src="http://www.banlimi.com/src/js/jquery.corner.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menus > li').each(function(){$(this).hover(function(){$(this).find('ul:eq(0)').show();},function(){$(this).find('ul:eq(0)').hide();});});
	$('#backtotop').hide();
	$(window).scroll(function(){if($(window).scrollTop()>500){$('#backtotop').fadeIn();}else{$('#backtotop').fadeOut();}});
	$('#totop-box').click(function(){$('html,body').animate({scrollTop: '0px'}, 600);return false;});
	$("#totop-box").hover(function (){$(this).removeClass("top_curr").addClass("top_hover");},function (){$(this).removeClass("top_hover").addClass("top_curr");});
});
</script>
</head>
<body>
<div class="wrapper">
	<div id="daohang">
		<div class="logo bd-on">
			<a href="/" title="<?php echo $config['name'];?>"><img src="/images/logo.jpg" /></a>	
		</div>
		<div class="nav">
			<ul id="menus" class="menus">
				<li class='mleft8 w135 bd-no'><a href="/index.php">首页</a></li>
				<li class='mleft8 w135 bd-no'><a href="/fangtan.php">访谈</a></li>
				<li class='mleft8 w135 bd-no'><a href="/pinpai.php">品牌</a></li>
				<li class='mleft8 w135 bd-no'><a href="/about.php">关于</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

