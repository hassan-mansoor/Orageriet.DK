<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:25:03
         compiled from "C:\wamp\www\prestashop\themes\theme1242\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2068256923f8f8f9101-93315759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba102f370c4d35b12a9704d991eb287f96a412f2' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme1242\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2068256923f8f8f9101-93315759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56923f8f999df5_13501434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56923f8f999df5_13501434')) {function content_56923f8f999df5_13501434($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!=''){?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" 
        	data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" 
            data-height="300" 
            data-colorscheme="light" 
            data-show-faces="true" 
            data-header="false" 
            data-stream="false" 
            data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>