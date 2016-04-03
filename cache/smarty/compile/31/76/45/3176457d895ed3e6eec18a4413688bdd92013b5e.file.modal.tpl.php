<?php /* Smarty version Smarty-3.1.19, created on 2016-02-27 14:09:41
         compiled from "C:\wamp\www\prestashop\admin3580scheq\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2310056d1f475424d24-33126992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3176457d895ed3e6eec18a4413688bdd92013b5e' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin3580scheq\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1446117412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2310056d1f475424d24-33126992',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d1f475431898_48158227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1f475431898_48158227')) {function content_56d1f475431898_48158227($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
