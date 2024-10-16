<?php
/* Smarty version 4.3.0, created on 2024-10-15 00:17:48
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\themes\components\logo_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e171c36af58_21139948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '024ccb942d432eed9db1178bbd8fbd341eff450a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\themes\\components\\logo_item.tpl',
      1 => 1727424707,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
  ),
),false)) {
function content_670e171c36af58_21139948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('logo_section.','no_image','alt_text'));
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['logo']->value['logo_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('image', (($tmp = $_smarty_tpl->tpl_vars['logo']->value['image'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
    <input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="logos-section__item attach-images control-group">
        <div class="upload-box clearfix">
            <div class="row-fluid">
                <div class="span12">
                    <h5><?php echo $_smarty_tpl->__("logo_section.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</h5>
                </div>
            </div>
            <div class="row-fluid">
                <div class="logos-section__image <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
 span4">
                    <div class="image <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                            <img class="solid-border" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="152">
                        <?php } else { ?>
                            <div class="no-image"><?php echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div>
                        <?php }?>
                    </div>
                    <?php if ((($tmp = $_smarty_tpl->tpl_vars['show_alt']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                        <div class="image-alt">
                            <div class="input-prepend">
                                <span class="add-on cm-tooltip" title="<?php echo $_smarty_tpl->__("alt_text");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment"),$_smarty_tpl);?>
</span>
                                <input type="text" class="input-text cm-image-field" id="alt_text_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image']->value['alt'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="">
                            </div>
                        </div>
                    <?php }?>
                </div>

                <div class="logos-section image-upload span8">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['type']->value)."]",'is_image'=>true,'show_hidpi_checkbox'=>(($tmp = $_smarty_tpl->tpl_vars['show_hidpi_checkbox']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)), 0, false);
?>
                    <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                        <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
