<?php
/* Smarty version 4.3.0, created on 2024-10-14 23:30:07
  from 'C:\xampp\htdocs\cscart\design\themes\cart_power\templates\addons\blog\blocks\recent_posts_scroller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e0befceae42_16179350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd5309128aabd93e6aab8a72a334bfd5dc70684' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\cart_power\\templates\\addons\\blog\\blocks\\recent_posts_scroller.tpl',
      1 => 1728917594,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_670e0befceae42_16179350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {?>

<div class="ty-mb-l my_blog">      <div class="ty-blog-recent-posts">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
            <div class="ty-blog-recent-posts__item">

                <div class="ty-blog-recent-posts__img-block">
                    <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['page']->value['main_pair']), 0, true);
?>
                    </a>
                </div>

                <div class="ty-blog__header">                      <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-blog__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <div class="ty-blog__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['content']) {?>                      <div class="ty-blog-recent-posts__description">
                        <?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value['content'],150), ENT_QUOTES, 'UTF-8');?>
                      </div>
                <?php }?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
</div>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/blocks/recent_posts_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/blocks/recent_posts_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?>

<div class="ty-mb-l my_blog">      <div class="ty-blog-recent-posts">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
            <div class="ty-blog-recent-posts__item">

                <div class="ty-blog-recent-posts__img-block">
                    <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['page']->value['main_pair']), 0, true);
?>
                    </a>
                </div>

                <div class="ty-blog__header">                      <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-blog__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <div class="ty-blog__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['content']) {?>                      <div class="ty-blog-recent-posts__description">
                        <?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value['content'],150), ENT_QUOTES, 'UTF-8');?>
                      </div>
                <?php }?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
</div>

<?php }
}
}
}
