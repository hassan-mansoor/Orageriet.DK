<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 16:40:11
         compiled from "C:\wamp\www\prestashop\admin0699\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2777956e721ab33b902-26781868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf967dc2a284c7126a82bff5d8a20c45d7d3691' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin0699\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1395058664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2777956e721ab33b902-26781868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e721ab3c9007_28722744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e721ab3c9007_28722744')) {function content_56e721ab3c9007_28722744($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
