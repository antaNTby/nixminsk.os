<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:45
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\user\nano\index__servicePanel.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec5d7628e8_34564239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6242625fe9d59836d51a1cc76df9b7cd0283de06' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\index__servicePanel.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/nanoBreadcrumbs.tpl.html' => 1,
  ),
),false)) {
function content_6604ec5d7628e8_34564239 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-sm" id="liveSearchResultContainer" style="max-width:576px!important;">
    <div class="row">
        <div class="col">
            <div id="liveSearchResult"></div>
        </div>
    </div>
</div>
        <?php if ($_smarty_tpl->tpl_vars['PageH1']->value) {?>
<div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" || $_smarty_tpl->tpl_vars['main_content_template']->value == "product_brief.tpl.html" || $_smarty_tpl->tpl_vars['main_content_template']->value == "product_detailed.tpl.html") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:blocks/nanoBreadcrumbs.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <div class="mt-2 d-flex flex-column flex-md-row justify-content-center justify-content-md-between" id="servicePanel">
        <h1 class="h3 fw-lighter<?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html") {?> text-primary<?php }?>" data-id="PageH1"><?php echo $_smarty_tpl->tpl_vars['PageH1']->value;?>
</h1>
        <div class="btn-toolbar d-flex flex-row justify-content-center justify-content-md-end align-items-baseline">
        <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" || $_smarty_tpl->tpl_vars['main_content_template']->value == "search_simple.tpl.html") {?>
            <a class="btn <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 1) {?>btn-outline-secondary<?php } else { ?>btn-primary<?php }?> btn-sm ms-2" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Таблица" title="Вид страницы товаров" onclick="changeViewType(0)"><i class="bi bi-table"></i></a>
            <a class="btn <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 0) {?>btn-outline-secondary<?php } else { ?>btn-primary<?php }?> btn-sm ms-1 me-5" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Витрина" title="Вид страницы товаров" onclick="changeViewType(1)"><i class="bi bi-columns-gap"></i></a>
        <?php }?>

            <?php if (($_smarty_tpl->tpl_vars['main_content_template']->value == "shopping_cart.tpl.html" && ($_smarty_tpl->tpl_vars['shopping_cart_value']->value > 0))) {?><a class="btn btn-outline-danger btn-sm ms-2" href="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
&amp;shopping_cart=yes&amp;clear_cart=yes" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?php echo (defined('CART_CLEAR') ? constant('CART_CLEAR') : null);?>
"><i class="bi bi-trash"></i></a><?php }?>

            <?php if ($_smarty_tpl->tpl_vars['Parent']->value['parent'] > 1) {?>
            <?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {
$_smarty_tpl->_assignInScope('ahref', "category_".((string)$_smarty_tpl->tpl_vars['Parent']->value['parent']).".html");
} else {
$_smarty_tpl->_assignInScope('ahref', "index.php?categoryID=".((string)$_smarty_tpl->tpl_vars['Parent']->value['parent']));
}?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['ahref']->value;?>
" class="btn btn-secondary btn-sm ms-2"><i class="bi bi-arrow-up-short" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="На уровень выше"></i></a>
            <?php }?>

            <a class="btn btn-secondary btn-sm ms-2" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="true" aria-controls=".el-0 .el-1 .el-2 .el-3"><i class="bi bi-arrows-expand" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Скрыть лишнее"></i></a>

        </div>
    </div>
</div>
        <?php }?>

<input type="hidden" id="tpl_view_type" value="<?php echo $_smarty_tpl->tpl_vars['view_type']->value;?>
">




<?php if (0 && $_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>

<b>this smarty.template is <?php echo basename($_smarty_tpl->source->filepath);?>
</b>

<?php }?>

<?php }
}
