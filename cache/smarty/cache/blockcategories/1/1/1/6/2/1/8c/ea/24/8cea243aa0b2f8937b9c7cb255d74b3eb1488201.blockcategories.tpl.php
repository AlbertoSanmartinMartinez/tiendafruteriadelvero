<?php /*%%SmartyHeaderCode:18501411435960e23bd9b506-91464646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cea243aa0b2f8937b9c7cb255d74b3eb1488201' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
    '331b177c54a133df1c239d346a639784eb47b2a3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/themes/default-bootstrap/modules/blockcategories/category-tree-branch.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18501411435960e23bd9b506-91464646',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5960e23bde1a71_29362326',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960e23bde1a71_29362326')) {function content_5960e23bde1a71_29362326($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
					Categorías
			</h2>
	<div class="block_content">
		<ul class="tree dhtml">
												
<li >
	<a 
	href="http://localhost/prestashop_fruteriadelvero/prestashop/es/12-quesos" title="Descripción de categoría quesos...">
		Quesos
	</a>
	</li>

																
<li >
	<a 
	href="http://localhost/prestashop_fruteriadelvero/prestashop/es/13-pates" title="Descripción categoría pates...">
		Pates
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost/prestashop_fruteriadelvero/prestashop/es/14-embutidos" title="Descripción categoría embutidos...">
		Embutidos
	</a>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
