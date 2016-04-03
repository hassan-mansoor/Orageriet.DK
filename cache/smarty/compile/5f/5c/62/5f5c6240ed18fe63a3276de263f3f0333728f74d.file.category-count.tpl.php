<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:31:39
         compiled from "C:\wamp\www\prestashop\themes\theme1242\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203365692411b86faa5-28247221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5c6240ed18fe63a3276de263f3f0333728f74d' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme1242\\category-count.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203365692411b86faa5-28247221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5692411bc7c9f2_39157739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5692411bc7c9f2_39157739')) {function content_5692411bc7c9f2_39157739($_smarty_tpl) {?><span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)){?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1){?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['nb_products']->value)){?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>