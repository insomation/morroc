<h1><?php echo lang('user_shop_aboutus');?></h1>

<script type="text/javascript" src="<?php echo (DIR_TINYMCE.'/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",theme: "modern",width: 680,height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"<?php echo APP;?>/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "<?php echo APP;?>/filemanager/plugin.min.js"}
 });
</script>

<?php echo lang('user_shop_setting_publish');?> :
<select id="publish">
	<option value="th"> <?php echo lang('user_yes');?> </option>
	<option value="en"> <?php echo lang('user_no');?> </option>
</select>

<br/>

<hr/>
content

<form method="post">
    <textarea></textarea>
</form>


<br/>

<button class="btt_submit"><?php echo lang('user_btt_save');?></button>
<button class="btt_submit"><?php echo lang('user_btt_back');?></button>