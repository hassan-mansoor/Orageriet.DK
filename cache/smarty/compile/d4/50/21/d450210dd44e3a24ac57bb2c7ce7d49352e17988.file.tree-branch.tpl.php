<?php /* Smarty version Smarty-3.1.19, created on 2016-03-31 16:04:04
         compiled from "C:\wamp\www\prestashop\modules\tmmegamenu\views\templates\admin\tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:468256fd82b431d2d7-90047742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd450210dd44e3a24ac57bb2c7ce7d49352e17988' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmmegamenu\\views\\templates\\admin\\tree-branch.tpl',
      1 => 1443280206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468256fd82b431d2d7-90047742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'id' => 0,
    'item' => 0,
    'active' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fd82b4513f99_87961044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fd82b4513f99_87961044')) {function content_56fd82b4513f99_87961044($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['id']) {?>
	<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['node']->value['id'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['id_cms_category']) {?>
	<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['node']->value['id_cms_category'], null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['node']->value['is_cms'])&&$_smarty_tpl->tpl_vars['node']->value['is_cms']) {?>
	<?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable("CMS_CAT".((string)$_smarty_tpl->tpl_vars['id']->value), null, 0);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['node']->value['is_cms_page'])&&$_smarty_tpl->tpl_vars['node']->value['is_cms_page']) {?>
	<?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable("CMS".((string)$_smarty_tpl->tpl_vars['id']->value), null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable("CAT".((string)$_smarty_tpl->tpl_vars['id']->value), null, 0);?>
<?php }?>
<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['active']->value) {?> selected="selected"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['level_depth'])&&$_smarty_tpl->tpl_vars['node']->value['level_depth']) {?>style="padding-left:<?php echo 7*mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['level_depth'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['is_cms'])&&$_smarty_tpl->tpl_vars['node']->value['is_cms']) {?>cms<?php } elseif (isset($_smarty_tpl->tpl_vars['node']->value['is_cms_page'])&&$_smarty_tpl->tpl_vars['node']->value['is_cms_page']) {?>cms_page<?php } else { ?>category<?php }?>">
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'active'=>$_smarty_tpl->tpl_vars['active']->value), 0);?>

		<?php } ?>
  	<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['pages'])&&count($_smarty_tpl->tpl_vars['node']->value['pages'])>0) {?>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'active'=>$_smarty_tpl->tpl_vars['active']->value), 0);?>

		<?php } ?>
  	<?php }?>
</option>
<?php }} ?>
