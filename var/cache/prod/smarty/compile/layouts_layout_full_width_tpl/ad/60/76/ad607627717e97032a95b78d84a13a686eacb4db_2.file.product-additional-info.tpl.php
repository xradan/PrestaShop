<?php
/* Smarty version 3.1.33, created on 2019-09-09 14:20:59
  from '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d75b70bdb6089_47597181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad607627717e97032a95b78d84a13a686eacb4db' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d75b70bdb6089_47597181 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
