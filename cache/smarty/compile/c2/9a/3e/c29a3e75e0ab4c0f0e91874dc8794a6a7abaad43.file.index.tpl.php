<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:25:11
         compiled from "C:\wamp\www\prestashop\themes\theme1242\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:413956923f975932c4-96688489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29a3e75e0ab4c0f0e91874dc8794a6a7abaad43' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme1242\\index.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '413956923f975932c4-96688489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56923f976a72f2_43856006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56923f976a72f2_43856006')) {function content_56923f976a72f2_43856006($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)){?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)){?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?><?php }} ?>