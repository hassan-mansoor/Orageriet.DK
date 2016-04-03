<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 14:12:28
         compiled from "C:\wamp\www\prestashop\admin0699\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3238356926c9ca99e09-91484582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30cfb28f5e946af467b46588ecb2d43d4cde506f' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin0699\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1395058664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3238356926c9ca99e09-91484582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56926c9cbe25f7_43084201',
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56926c9cbe25f7_43084201')) {function content_56926c9cbe25f7_43084201($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
