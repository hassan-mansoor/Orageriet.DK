<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:52:01
         compiled from "C:\wamp\www\prestashop\modules\tmsearch\views\templates\hook\tmsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3837569240f4ee8af9-79206054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2d2a92f8e7f69f88f1b89d749b753299124649' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmsearch\\views\\templates\\hook\\tmsearch.tpl',
      1 => 1443280206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3837569240f4ee8af9-79206054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569240f527e058_74380010',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240f527e058_74380010')) {function content_569240f527e058_74380010($_smarty_tpl) {?><div id="tmsearch" class="clearfix">
	<form id="tmsearchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="tm_search_query form-control" type="text" id="tm_search_query" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmsearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="tm_submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmsearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div><?php }} ?>
