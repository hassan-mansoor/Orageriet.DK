<?php /* Smarty version Smarty-3.1.19, created on 2016-03-31 15:55:52
         compiled from "C:\wamp\www\prestashop\modules\tmmegamenu\views\templates\hook\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5077569240e7ba9ae8-76850929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7358460db0c55bb7779e05f62b41ee802b1cc9f' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmmegamenu\\views\\templates\\hook\\menu.tpl',
      1 => 1459454151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5077569240e7ba9ae8-76850929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569240e7d273e7_18707660',
  'variables' => 
  array (
    'MENU' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240e7d273e7_18707660')) {function content_569240e7d273e7_18707660($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['MENU']->value)&&$_smarty_tpl->tpl_vars['MENU']->value!='') {?> 
    <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left_column'||$_smarty_tpl->tpl_vars['hook']->value=='right_column') {?>
        <section class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_menu block">
            <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</h4>
            <div class="block_content">
    <?php } else { ?>
        <div class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_menu">
	
            <div class="menu-title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</div>
    <?php }?>
          <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
 
    
    <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left_column'||$_smarty_tpl->tpl_vars['hook']->value=='right_column') {?>
            </div>
        </section>
    <?php } else { ?>
        </div>
    <?php }?>
<?php }?><?php }} ?>
