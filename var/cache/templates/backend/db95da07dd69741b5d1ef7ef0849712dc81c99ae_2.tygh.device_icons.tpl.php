<?php
/* Smarty version 4.3.0, created on 2024-10-15 00:06:36
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\block_manager\components\device_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e147c028756_72409452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db95da07dd69741b5d1ef7ef0849712dc81c99ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\block_manager\\components\\device_icons.tpl',
      1 => 1727424693,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e147c028756_72409452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('devices', (($tmp = $_smarty_tpl->tpl_vars['item']->value['availability'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('all_devices', array_filter($_smarty_tpl->tpl_vars['devices']->value) == $_smarty_tpl->tpl_vars['devices']->value);?>

<div class="device-specific-block__devices <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>
        <div class="device-specific-block__devices__device device-specific-block__devices__device--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 icon-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['all_devices']->value || !$_smarty_tpl->tpl_vars['is_available']->value) {?>hidden<?php }?>"></div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
