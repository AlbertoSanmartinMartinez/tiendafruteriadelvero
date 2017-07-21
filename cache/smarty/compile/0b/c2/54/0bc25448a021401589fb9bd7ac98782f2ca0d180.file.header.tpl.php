<?php /* Smarty version Smarty-3.1.19, created on 2017-07-08 15:43:03
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/modules/correos/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3245556215960e1671364d6-52497563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc25448a021401589fb9bd7ac98782f2ca0d180' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/modules/correos/views/templates/hook/header.tpl',
      1 => 1499381781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245556215960e1671364d6-52497563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'api_google_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5960e16715c2b1_25925843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960e16715c2b1_25925843')) {function content_5960e16715c2b1_25925843($_smarty_tpl) {?>

<script type="text/javascript">

if (typeof google === 'object' && typeof google.maps === 'object') 
{
	//goole maps loaded
} else
	document.write("<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp<?php if ($_smarty_tpl->tpl_vars['api_google_key']->value) {?>&key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['api_google_key']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>'><\/script>");

</script>
<?php }} ?>
