<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php echo link_tag(DIR_CSS.'/user_style.css');?>

<title>Project S</title>

<script src="<?php echo (DIR_JS.'/jquery-1.10.1.min.js'); ?>"></script>
<script>
	$(document).ready(function(){
		var allSubUl = $("div.menu li.submenu ul");
		var allSubLabel = $("div.menu li.submenu label");
		
		allSubUl.hide();
		allSubLabel.removeClass("selected");
		allSubLabel.click(function() {
			var t = $(this);
			var ul = t.parent().find("ul");
			allSubUl.not(ul).hide();
			allSubLabel.not(ul).removeClass("selected");
			if(ul.is(":hidden"))
				t.addClass("selected");
			ul.toggle("fast");
		});
	});
	
	function link(url) {
		var content = $("#content");
		content.load(url);
	}
</script>
<body>
	<div id="header">
		<div id="login">
			<a href="#">Pekalero Pekalore</a> ||
			<a href="#"><?php echo lang('user_logout');?></a>
		</div>

		<div id="lang">
			<?php echo anchor('user/set_th', '<img src="'.DIR_IMAGES.'/lang_flag/th.gif" > Th')?>
			/ 
			<?php echo anchor('user/set_en', '<img src="'.DIR_IMAGES.'/lang_flag/us.gif" > En')?>
		</div>

	</div>
	
	<div class="nav">
		<ol>
			<?php echo $nav;?>
		</ol>
	</div>

	<div id="container">
		<div id="leftside">
			<div class="menu">
				<ul>
					<li class="top"><a href="#"><?php echo lang('user_products');?></a></li>
					
					<li class="submenu">
						<label><a href="#"><?php echo lang('user_orders');?></a></label>
						<ul>
							<li><a href="#">Histories Orders</a></li>
							<li class="last"><a href="#">มี order เข้ามาอะ</a></li>
						</ul>
					</li>
					
					<li class="submenu">
						<label><a href="#"><?php echo lang('user_shop');?></a></label>
						<ul>
							<li><?php echo anchor('shop/firstpage', lang('user_shop_firstpage'));?></li>
							<li><?php echo anchor('shop/aboutus', lang('user_shop_aboutus'));?></li>
							<li><?php echo anchor('shop/promotion', lang('user_shop_promotion'));?></li>
							<li><?php echo anchor('shop/galleries', lang('user_shop_galleries'));?></li>
							<li><?php echo anchor('shop/payment', lang('user_shop_payment'));?></li>
							<li><?php echo anchor('shop/contactus', lang('user_shop_contactus'));?></li>							
							<li class="last"><?php echo anchor('shop/setting', lang('user_shop_setting'));?></li>
						</ul>
					</li>
					
					<li><a href="#">Center Market</a></li>
					
					<li class="submenu">
						<label><a href="#"><?php echo lang('user_message');?></a></label>
						<ul>
							<li><?php echo anchor('message/write', lang('user_message_write'));?></li>
							<li><?php echo anchor('message/inbox', lang('user_message_inbox'));?></li>
							<li class="last"><?php echo anchor('message/sentbox', lang('user_message_sentbox'));?></li>
						</ul>
					</li>
					
					<li class="submenu">
						<label><a href="#"><?php echo lang('user_statistic');?></a></label>
						<ul>
							<li><a href="#"><?php echo lang('user_statistic_income');?></a></li>
							<li><a href="#"><?php echo lang('user_statistic_topviews');?></a></li>
							<li><a href="#"><?php echo lang('user_statistic_toprating');?></a></li>
							<li class="last"><a href="#"><?php echo lang('user_statistic_bestseller');?></a></li>
						</ul>
					</li>
					<li class="last"><?php echo anchor('user/setting', lang('user_setting'));?></li>
				</ul>
			</div>
		</div><!-- End of leftside-->
		<div id="content">