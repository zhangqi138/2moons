<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:41
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\ShowTopnavPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188644fafdf958637b9-49888200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241bfc3a170e81deb3648e2d0823a84a1268ca9d' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\ShowTopnavPage.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
    '2341b715241a081a6cbf180a2e15cbc391c2827d' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\overall_header.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
    '4c363b43ef833c88a1c113171039d9a4f2b820a8' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\overall_footer.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188644fafdf958637b9-49888200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adm_cp_title' => 1,
    'authlevel' => 1,
    'AvailableUnis' => 1,
    'UNI' => 1,
    'adm_cp_index' => 1,
    'sid' => 1,
    'mu_universe' => 1,
    'mu_moderation_page' => 1,
    'ad_authlevel_title' => 1,
    'id' => 1,
    're_reset_universe' => 1,
    'adm_cp_logout' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdf95c6e484_82652402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdf95c6e484_82652402')) {function content_4fafdf95c6e484_82652402($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\Server\\xampp\\htdocs\\2moons-1svn\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '188644fafdf958637b9-49888200');
content_4fafdf958a48e1_28424143($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<br><div style="font-size:22px;font-weight:bolder;font-variant:small-caps;text-align:center;width:100%;"><?php echo $_smarty_tpl->tpl_vars['adm_cp_title']->value;?>
</div><br>
<div align="right">
<?php if ($_smarty_tpl->tpl_vars['authlevel']->value==@AUTH_ADM){?>
<select id="universe" onchange="top.location = 'admin.php?uni='+$(this).val();">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['AvailableUnis']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>

</select>
<?php }?>
<a href="admin.php?page=overview" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['adm_cp_index']->value;?>
&nbsp;</a>
<?php if ($_smarty_tpl->tpl_vars['authlevel']->value==@AUTH_ADM){?>
<a href="?page=universe&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mu_universe']->value;?>
&nbsp;</a>
<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mu_moderation_page']->value;?>
&nbsp;</a>
<a href="?page=rights&amp;mode=users&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['ad_authlevel_title']->value;?>
&nbsp;</a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['id']->value==1){?>
<a href="?page=reset&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['re_reset_universe']->value;?>
&nbsp;</a>
<?php }?>
<a href="javascript:top.location.href='game.php';" target="_top" class="out">&nbsp;<?php echo $_smarty_tpl->tpl_vars['adm_cp_logout']->value;?>
&nbsp;</a>
</div>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '188644fafdf958637b9-49888200');
content_4fafdf95c10d83_17817396($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:41
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf958a48e1_28424143')) {function content_4fafdf958a48e1_28424143($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/ingame.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/admin.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['fcm_info']->value;?>
";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:41
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf95c10d83_17817396')) {function content_4fafdf95c10d83_17817396($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
<?php if ($_GET['reload']=='t'){?>
<script type="text/javascript">
parent.topFrame.document.location.reload();
</script>
<?php }elseif($_GET['reload']=='l'){?>
<script type="text/javascript">
parent.rightFrame.document.location.reload();
</script>
<?php }?>
<?php }?>
</body>
</html><?php }} ?>