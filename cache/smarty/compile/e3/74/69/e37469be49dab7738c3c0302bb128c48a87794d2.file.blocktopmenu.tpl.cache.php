<?php /* Smarty version Smarty-3.1.14, created on 2016-01-10 06:25:02
         compiled from "C:\wamp\www\prestashop\themes\theme1242\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2947156923f8eaafdc5-80770822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37469be49dab7738c3c0302bb128c48a87794d2' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme1242\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1443280208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2947156923f8eaafdc5-80770822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56923f8ecf2f75_62281097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56923f8ecf2f75_62281097')) {function content_56923f8ecf2f75_62281097($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
        <ul class="sf-menu clearfix menu-content">
            <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
                <li class="sf-search noBack" style="float:right">
                    <form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                        <p>
                            <input type="hidden" name="controller" value="search" />
                            <input type="hidden" value="position" name="orderby"/>
                            <input type="hidden" value="desc" name="orderway"/>
                            <input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </p>
                    </form>
                </li>
            <?php }?>
        </ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>