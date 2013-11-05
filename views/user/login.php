<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="<?php echo (DIR_CSS.'/login_style.css');?>" rel="stylesheet" type="text/css" />
<title>ProJEct MorRoc</title>
</head>
<body>
<div id="lang">
	<?php echo anchor('user/set_th', '<img src="'.DIR_IMAGES.'/lang_flag/th.gif" > Th')?>
	/ 
	<?php echo anchor('user/set_en', '<img src="'.DIR_IMAGES.'/lang_flag/us.gif" > En')?>
</div>
<div id="login">
	<div>
		<input type="text" id="user" placeholder="<?php echo lang('login_username');?>"> 
		<input type="password" id="password" placeholder="<?php echo lang('login_password');?>"/>
		<button class="btt_submit"><?php echo lang('login_btt_login');?></button>
		<br/> <br/>
		<?php echo anchor('user/register', lang('login_register'));?> | 
		<?php echo anchor('user/forgot_pass', lang('login_forgot_pass'));?>
	</div>
</div>

</body>
</html>