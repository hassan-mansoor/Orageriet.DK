<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:51:57
         compiled from "C:\wamp\www\prestashop\themes\default-bootstrap\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2948256df3b6d6fcd18-11583028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfdafc6e9caf7e3a2cb99a025bfe6e967d0121c' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2948256df3b6d6fcd18-11583028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56df3b6d7443d4_37950170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56df3b6d7443d4_37950170')) {function content_56df3b6d7443d4_37950170($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
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
