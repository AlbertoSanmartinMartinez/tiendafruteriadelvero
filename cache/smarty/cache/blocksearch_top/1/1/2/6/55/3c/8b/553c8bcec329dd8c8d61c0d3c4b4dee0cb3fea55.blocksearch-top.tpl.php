<?php /*%%SmartyHeaderCode:1110367578595acfeb36dc27-76097270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553c8bcec329dd8c8d61c0d3c4b4dee0cb3fea55' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110367578595acfeb36dc27-76097270',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5960e22d7b1235_10817780',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960e22d7b1235_10817780')) {function content_5960e22d7b1235_10817780($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/prestashop_fruteriadelvero/prestashop/ca/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cercar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Cercar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
