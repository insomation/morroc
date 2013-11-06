<h1><?php echo lang('user_setting');?></h1>

<?php echo lang('user_setting_changepass');?> : 

<br/>

<?php echo lang('user_setting_language');?> : 
<select id="language">
	<option value="th"> ภาษาไทย </option>
	<option value="en"> English </option>
</select>

<br/>

<?php echo lang('user_setting_publish');?> :
<select id="publish">
	<option value="th"> <?php echo lang('user_yes');?> </option>
	<option value="en"> <?php echo lang('user_no');?> </option>
</select>

<br/>

<?php echo lang('user_setting_mobile');?> :
<input type="text" id="mobile"/>

<br/>

<button class="btt_submit"><?php echo lang('user_btt_save');?></button>
<button class="btt_submit"><?php echo lang('user_btt_back');?></button>