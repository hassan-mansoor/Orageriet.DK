<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:51:58
         compiled from "C:\wamp\www\prestashop\themes\default-bootstrap\modules\tmmanufacturerblock\views\templates\hook\tmmanufacturerblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2779356df3b6e5917c7-97720551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376393df80d975a062f7b9b4415d0be590f433c9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\tmmanufacturerblock\\views\\templates\\hook\\tmmanufacturerblock.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2779356df3b6e5917c7-97720551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'display_caroucel' => 0,
    'nb_display' => 0,
    'display_name' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'display_image' => 0,
    'img_manu_dir' => 0,
    'image_type' => 0,
    'caroucel_nb' => 0,
    'slide_width' => 0,
    'slide_margin' => 0,
    'caroucel_item_scroll' => 0,
    'caroucel_auto' => 0,
    'caroucel_speed' => 0,
    'caroucel_auto_pause' => 0,
    'caroucel_random' => 0,
    'caroucel_loop' => 0,
    'caroucel_hide_controll' => 0,
    'caroucel_pager' => 0,
    'caroucel_control' => 0,
    'caroucel_auto_control' => 0,
    'caroucel_auto_hover' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56df3b6e883082_30623962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56df3b6e883082_30623962')) {function content_56df3b6e883082_30623962($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
    <div id="tm_manufacturers_block" class="clearfix">
    <h4><?php echo smartyTranslate(array('s'=>'Manufacturers'),$_smarty_tpl);?>
</h4>
        <ul class="manufacturers_items<?php if (!$_smarty_tpl->tpl_vars['display_caroucel']->value) {?> row<?php } else { ?> clearfix<?php }?>">
        	<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['iteration']++;
?>
            	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['iteration']<=$_smarty_tpl->tpl_vars['nb_display']->value) {?>
                    <li class="manufacturer_item<?php if (!$_smarty_tpl->tpl_vars['display_caroucel']->value) {?> col-xs-6 col-sm-3<?php } else { ?> caroucel_item<?php }?>">
                        <?php if (isset($_smarty_tpl->tpl_vars['display_name']->value)&&$_smarty_tpl->tpl_vars['display_name']->value) {?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'tmmanufacturerblock'),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['display_image']->value)&&$_smarty_tpl->tpl_vars['display_image']->value) {?>
                        	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'tmmanufacturerblock'),$_smarty_tpl);?>
">
                            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
-<?php echo $_smarty_tpl->tpl_vars['image_type']->value;?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </a>
                        <?php }?>
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_display_caroucel'=>intval($_smarty_tpl->tpl_vars['display_caroucel']->value)),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['display_caroucel']->value) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_nb'=>intval($_smarty_tpl->tpl_vars['caroucel_nb']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_slide_width'=>intval($_smarty_tpl->tpl_vars['slide_width']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_slide_margin'=>intval($_smarty_tpl->tpl_vars['slide_margin']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_item_scroll'=>intval($_smarty_tpl->tpl_vars['caroucel_item_scroll']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_auto'=>intval($_smarty_tpl->tpl_vars['caroucel_auto']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_speed'=>intval($_smarty_tpl->tpl_vars['caroucel_speed']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_auto_pause'=>intval($_smarty_tpl->tpl_vars['caroucel_auto_pause']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_random'=>intval($_smarty_tpl->tpl_vars['caroucel_random']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_loop'=>intval($_smarty_tpl->tpl_vars['caroucel_loop']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_hide_controll'=>intval($_smarty_tpl->tpl_vars['caroucel_hide_controll']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_pager'=>intval($_smarty_tpl->tpl_vars['caroucel_pager']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_control'=>intval($_smarty_tpl->tpl_vars['caroucel_control']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_auto_control'=>intval($_smarty_tpl->tpl_vars['caroucel_auto_control']->value)),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('m_caroucel_auto_hover'=>intval($_smarty_tpl->tpl_vars['caroucel_auto_hover']->value)),$_smarty_tpl);?>

    <?php }?>
<?php }?><?php }} ?>
