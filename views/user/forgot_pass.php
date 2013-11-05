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
		<?php echo lang('login_forgot_pass');?>
		<br/> <br/>
		<input type="text" id="email" placeholder="<?php echo lang('login_email');?>">
		<button class="btt_submit"><?php echo lang('login_btt_submit');?></button>
	</div>
</div>

</body>
</html>