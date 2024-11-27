<?php
/* Smarty version 4.3.4, created on 2024-11-27 15:14:40
  from '/var/www/html/adminMc7IFcRnYvwrPSU/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674729502085f9_41942561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0a2a73c7993d3b324a3c800683b959395d119c' => 
    array (
      0 => '/var/www/html/adminMc7IFcRnYvwrPSU/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1727103393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674729502085f9_41942561 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
