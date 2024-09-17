<?php
/* Smarty version 4.2.1, created on 2024-03-29 17:36:40
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\blocks\nanoBreadcrumbsVertical.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6606d1f818f760_95341712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21046f674baf11fbc121914ffac03ec72d4bee46' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\blocks\\nanoBreadcrumbsVertical.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606d1f818f760_95341712 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="col-auto mb-2 mx-1" style="--bs-breadcrumb-divider: '>';padding:0 0.7rem;" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-start mb-0 lh-1 fs-7">
<?php
$__section_i_19_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['product_category_path']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_19_total = $__section_i_19_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_19_total !== 0) {
for ($__section_i_19_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_19_iteration <= $__section_i_19_total; $__section_i_19_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_19_iteration === $__section_i_19_total);
if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {
$_smarty_tpl->_assignInScope('_href', "category_".((string)$_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoryID']).".html");
} else {
$_smarty_tpl->_assignInScope('_href', "index.php?categoryID=".((string)$_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoryID']));
}
if ($_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoryID'] != 1) {
if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" && (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
                    <li class=" bg-light bg-gradient p-1 breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</li>
<?php } else { ?>
                    <li class=" bg-light bg-gradient p-1 breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li>
<?php }
}
}
}
?>
            </ol>
        </nav>
<?php }
}
