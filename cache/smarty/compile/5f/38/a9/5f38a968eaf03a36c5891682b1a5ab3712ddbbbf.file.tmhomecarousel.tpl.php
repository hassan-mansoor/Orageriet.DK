<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:51:59
         compiled from "C:\wamp\www\prestashop\modules\tmhomecarousel\views\templates\hook\tmhomecarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8080569240f01fa5e7-44400628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f38a968eaf03a36c5891682b1a5ab3712ddbbbf' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmhomecarousel\\views\\templates\\hook\\tmhomecarousel.tpl',
      1 => 1443280206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8080569240f01fa5e7-44400628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569240f021e231_14285292',
  'variables' => 
  array (
    'carousel_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240f021e231_14285292')) {function content_569240f021e231_14285292($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['carousel_status']->value) {?>
    <ul id="homepage-carousel" class="homepage-carousel product_list grid"></ul>
<?php }?><?php }} ?>
