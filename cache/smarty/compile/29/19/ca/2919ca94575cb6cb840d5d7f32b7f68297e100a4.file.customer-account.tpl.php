<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:52:01
         compiled from "C:\wamp\www\prestashop\modules\tmsociallogin\views\templates\hook\customer-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15206569240f3e0cb19-84446189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2919ca94575cb6cb840d5d7f32b7f68297e100a4' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmsociallogin\\views\\templates\\hook\\customer-account.tpl',
      1 => 1443280206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15206569240f3e0cb19-84446189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569240f42a9ac1_42393239',
  'variables' => 
  array (
    'f_status' => 0,
    'link' => 0,
    'facebook_status' => 0,
    'g_status' => 0,
    'back' => 0,
    'google_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240f42a9ac1_42393239')) {function content_569240f42a9ac1_42393239($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebooklink',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Facebook Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
           <i class="fa fa-facebook"></i>
           <span><?php if ($_smarty_tpl->tpl_vars['facebook_status']->value) {?><?php echo smartyTranslate(array('s'=>'Connect Whith Facebook','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Facebook Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php }?></span>
        </a>
    </li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
    <li>
        <a <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array(),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Google Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
            <i class="fa fa-google"></i>
            <span><?php if ($_smarty_tpl->tpl_vars['google_status']->value) {?><?php echo smartyTranslate(array('s'=>'Connect Whith Google','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Google Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php }?></span>
        </a>
    </li>
<?php }?>
<?php }} ?>
