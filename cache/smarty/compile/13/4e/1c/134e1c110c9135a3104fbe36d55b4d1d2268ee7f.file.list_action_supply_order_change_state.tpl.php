<?php /* Smarty version Smarty-3.1.19, created on 2016-02-27 19:46:47
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\helpers\list\list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2314956d1ef175f7649-05073064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134e1c110c9135a3104fbe36d55b4d1d2268ee7f' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_supply_order_change_state.tpl',
      1 => 1446117412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2314956d1ef175f7649-05073064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d1ef1767a561_23665120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1ef1767a561_23665120')) {function content_56d1ef1767a561_23665120($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
