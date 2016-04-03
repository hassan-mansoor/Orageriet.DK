<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 14:12:28
         compiled from "C:\wamp\www\prestashop\admin0699\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2421356926c9cd92185-37760182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59e783447723eb77648156a6dc35db8cfc0bc193' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin0699\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1395058664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2421356926c9cd92185-37760182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56926c9ce69dc1_92360232',
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56926c9ce69dc1_92360232')) {function content_56926c9ce69dc1_92360232($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
