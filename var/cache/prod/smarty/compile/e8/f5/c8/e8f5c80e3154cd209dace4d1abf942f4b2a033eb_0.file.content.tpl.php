<?php
/* Smarty version 4.3.4, created on 2024-11-27 15:12:19
  from '/var/www/html/adminMc7IFcRnYvwrPSU/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674728c3b56fa3_59653705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8f5c80e3154cd209dace4d1abf942f4b2a033eb' => 
    array (
      0 => '/var/www/html/adminMc7IFcRnYvwrPSU/themes/default/template/content.tpl',
      1 => 1727103393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674728c3b56fa3_59653705 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
