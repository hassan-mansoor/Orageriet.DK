<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:52:01
         compiled from "C:\wamp\www\prestashop\modules\tmsociallogin\views\templates\hook\header-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20308569240f4b30187-65469476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1efc7b4f6dd16b739ee44c7d4531389a9a30b178' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmsociallogin\\views\\templates\\hook\\header-account.tpl',
      1 => 1443280206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20308569240f4b30187-65469476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569240f4eac137_36824140',
  'variables' => 
  array (
    'link' => 0,
    'f_status' => 0,
    'back' => 0,
    'back_page' => 0,
    'g_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240f4eac137_36824140')) {function content_569240f4eac137_36824140($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['back_page'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
    <a class="btn btn-default btn-sm btn-login-facebook" <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebooklogin',array(),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebooklogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Login with Your Facebook Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
         <?php echo smartyTranslate(array('s'=>'Facebook Login','mod'=>'tmsociallogin'),$_smarty_tpl);?>

    </a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
    <a class="btn btn-default btn-sm btn-login-google" <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Login with Your Google Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
         <?php echo smartyTranslate(array('s'=>'Google Login','mod'=>'tmsociallogin'),$_smarty_tpl);?>

    </a>
<?php }?><?php }} ?>
