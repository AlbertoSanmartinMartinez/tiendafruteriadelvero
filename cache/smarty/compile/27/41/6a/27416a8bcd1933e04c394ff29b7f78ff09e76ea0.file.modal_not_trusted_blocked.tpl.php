<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 00:57:40
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14266193595acbe4e918b3-48118101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27416a8bcd1933e04c394ff29b7f78ff09e76ea0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14266193595acbe4e918b3-48118101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595acbe4e9df00_10223825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595acbe4e9df00_10223825')) {function content_595acbe4e9df00_10223825($_smarty_tpl) {?>

<div class="modal-body">
	<div class="alert alert-warning">
		<h3><?php echo smartyTranslate(array('s'=>'This module could not be verified by PrestaShop.'),$_smarty_tpl);?>
</h3>

		<p><?php echo smartyTranslate(array('s'=>"This generally happens when the module isn't distributed through our official marketplace, PrestaShop Addons - or when your server failed to communicate with PrestaShop Addons."),$_smarty_tpl);?>
</p>
	</div>

	<div class="row">
		<div class="col-sm-2" style="text-align: center;">
			<img id="untrusted-module-logo" class="" src="" alt="">
		</div>
		<div class="col-sm-10">
			<table class="table">
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Module'),$_smarty_tpl);?>
</td>
					<td><strong><span class="module-display-name-placeholder"></span></strong></td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Author'),$_smarty_tpl);?>
</td>
					<td><strong><span class="author-name-placeholder"></span></strong></td>
				</tr>
			</table>
		</div>

		<div class="col-sm-12" style="text-align: center; padding-top: 12px;">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Back to modules list'),$_smarty_tpl);?>
</button>
		</div>
	</div>
</div>

<div class="modal-footer">
	<div class="alert alert-info">
		<p><?php echo smartyTranslate(array('s'=>'Since you may not have installed this module from PrestaShop Addons, we cannot assert that the module is complying with our safety requirements (e.g. that it is not adding some undisclosed functionalities such as ads, hidden links, spam, etc...).'),$_smarty_tpl);?>
</p>

		<p><?php echo smartyTranslate(array('s'=>'You can search for similar modules on the official marketplace.'),$_smarty_tpl);?>
</p>

		<p><?php echo smartyTranslate(array('s'=>"[1]Click here to browse our catalog on PrestaShop Addons[/1].",'tags'=>array('<a class="catalog-link" href="#">')),$_smarty_tpl);?>

	</div>
</div><?php }} ?>
