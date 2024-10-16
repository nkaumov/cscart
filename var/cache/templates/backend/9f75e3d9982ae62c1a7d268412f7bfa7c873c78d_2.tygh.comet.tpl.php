<?php
/* Smarty version 4.3.0, created on 2024-10-15 00:06:50
  from 'C:\xampp\htdocs\cscart\design\backend\templates\common\comet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e148a654755_51982416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f75e3d9982ae62c1a7d268412f7bfa7c873c78d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1727424676,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e148a654755_51982416 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
                        <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }
}
