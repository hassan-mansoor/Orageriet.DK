<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:13:11
         compiled from "C:\wamp\www\prestashop\themes\default-bootstrap\modules\blocknewproducts\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1509556923cc7ed2c01-58647145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5ee5115562dfb9c3879ac2fe43e036262187ce8' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blocknewproducts\\tab.tpl',
      1 => 1395058666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1509556923cc7ed2c01-58647145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56923cc8021d68_18691087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56923cc8021d68_18691087')) {function content_56923cc8021d68_18691087($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>