<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:25:11
         compiled from "C:\wamp\www\prestashop\themes\theme1242\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140056923f9774e703-55213694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bde63b7b932e5698040f69638b700b8ff4e0b0' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme1242\\layout.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1140056923f9774e703-55213694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_LEFT_COLUMN' => 0,
    'hide_left_column' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'hide_right_column' => 0,
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56923f97dcc416_09052636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56923f97dcc416_09052636')) {function content_56923f97dcc416_09052636($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['left_column_size'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['right_column_size'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&!$_smarty_tpl->tpl_vars['hide_left_column']->value){?>
	<?php $_smarty_tpl->tpl_vars['left_column_size'] = new Smarty_variable(3, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&!$_smarty_tpl->tpl_vars['hide_right_column']->value){?>
	<?php $_smarty_tpl->tpl_vars['right_column_size'] = new Smarty_variable(3, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&!$_smarty_tpl->tpl_vars['hide_right_column']->value&&isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&!$_smarty_tpl->tpl_vars['hide_left_column']->value){?>
	<?php $_smarty_tpl->tpl_vars['left_column_size'] = new Smarty_variable(4, null, 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?><?php }} ?>