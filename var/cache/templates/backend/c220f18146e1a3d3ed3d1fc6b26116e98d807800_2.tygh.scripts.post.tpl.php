<?php
/* Smarty version 4.3.0, created on 2024-10-15 00:06:52
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e148c3148a8_97063554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c220f18146e1a3d3ed3d1fc6b26116e98d807800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\scripts.post.tpl',
      1 => 1727424663,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e148c3148a8_97063554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center_background.js"),$_smarty_tpl);?>

<?php }
}
}
