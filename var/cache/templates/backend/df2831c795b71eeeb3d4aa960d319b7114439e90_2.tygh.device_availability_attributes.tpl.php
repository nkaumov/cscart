<?php
/* Smarty version 4.3.0, created on 2024-10-15 00:06:35
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\block_manager\components\device_availability_attributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e147be97ff7_87708878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2831c795b71eeeb3d4aa960d319b7114439e90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\block_manager\\components\\device_availability_attributes.tpl',
      1 => 1727424693,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e147be97ff7_87708878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('devices', (($tmp = $_smarty_tpl->tpl_vars['item']->value['availability'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>
    data-ca-device-availability-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>true<?php } else { ?>false<?php }?>"
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
