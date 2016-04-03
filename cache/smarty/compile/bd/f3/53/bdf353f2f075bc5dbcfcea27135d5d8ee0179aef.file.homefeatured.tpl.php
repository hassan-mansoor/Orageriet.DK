<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:30:51
         compiled from "C:\wamp\www\prestashop\themes\theme1242\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18871569240ebd225f2-96718405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf353f2f075bc5dbcfcea27135d5d8ee0179aef' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme1242\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18871569240ebd225f2-96718405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_569240ebdf19c1_97180868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240ebdf19c1_97180868')) {function content_569240ebdf19c1_97180868($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php }else{ ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>