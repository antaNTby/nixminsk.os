<?php
/* Smarty version 4.2.1, created on 2024-04-05 11:39:28
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\blocks\nanoBreadcrumbs.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_660fb8c08e8fe5_66332511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ff06f9f3c747ad3949efe326fd97a2daf07f234' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\blocks\\nanoBreadcrumbs.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fb8c08e8fe5_66332511 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="my-1 d-flex flex-column-inverse flex-md-row-inverse justify-content-start justify-content-md-end" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="mb-0 p-1 breadcrumb text-small lh-1">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo (defined('CONF_FULL_SHOP_URL') ? constant('CONF_FULL_SHOP_URL') : null);?>
"><?php echo (defined('LINK_TO_HOMEPAGE') ? constant('LINK_TO_HOMEPAGE') : null);?>
 <i class="bi bi-house-fill"></i></a></li>
<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['product_category_path']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_6_iteration === $__section_i_6_total);
if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {
$_smarty_tpl->_assignInScope('_href', "category_".((string)$_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoryID']).".html");
} else {
$_smarty_tpl->_assignInScope('_href', "index.php?categoryID=".((string)$_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoryID']));
}
if ($_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoryID'] != 1) {
if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" && (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</li>
<?php } else { ?>
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['product_category_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li>
<?php }
}
}
}
if (($_smarty_tpl->tpl_vars['isadmin']->value == "yes")) {
if ((defined('SITE_URL') ? constant('SITE_URL') : null) == "wwww.nix.by") {?>
                    <li class="ms-2"><a class="text-decoration-none text-danger font-monospace" href="http:\\nixminsk.by\<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
">nixminsk.by <i class="bi bi-arrow-left-right"></i></a></li>
<?php } else { ?>
                    <li class="ms-2"><a class="text-decoration-none text-danger font-monospace" href="http:\\nix.by\<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
">nix.by <i class="bi bi-arrow-left-right"></i></a></li>
<?php }
}?>
            </ol>
        </nav>


<?php }
}
