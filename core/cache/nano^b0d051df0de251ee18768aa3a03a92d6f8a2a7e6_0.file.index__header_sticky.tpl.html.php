<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:45
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\user\nano\index__header_sticky.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec5d74ba54_60775851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0d051df0de251ee18768aa3a03a92d6f8a2a7e6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\index__header_sticky.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/nanoContacts.tpl.html' => 1,
  ),
),false)) {
function content_6604ec5d74ba54_60775851 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html") || ($_smarty_tpl->tpl_vars['main_content_template']->value == "search_simple.tpl.html")) {
$_smarty_tpl->_assignInScope('hideFilterProducts', '');
} else {
$_smarty_tpl->_assignInScope('hideFilterProducts', " disabled opacity-50");
}?>

    <div class="container-fluid bg-gradient" id="mainSearchBox">
        <div class="d-flex py-1">
            <div class="d-none d-lg-flex flex-shrink-0 me-0 me-md-2 me-xl-5 justify-content-center justify-content-md-start">
                <div class="btn-group" role="group">
                    <button class="btn btn-outline-primary<?php echo $_smarty_tpl->tpl_vars['hideFilterProducts']->value;?>
" type="button" data-action="show-filter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter" title='Показать "Фильтр товаров"'><i class="bi bi-funnel-fill"></i></button>
                    <button class="btn btn-outline-danger me-2<?php echo $_smarty_tpl->tpl_vars['hideFilterProducts']->value;?>
" type="button" data-action="reset-filter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter" title='Сбросить "Фильтр товаров"'><i class="bi bi-x-lg"></i></button>
                </div>
            </div>
            <div class="d-flex d-lg-none flex-shrink-0 me-0 me-md-2 justify-content-start">
                <button class="btn btn-outline-primary<?php echo $_smarty_tpl->tpl_vars['hideFilterProducts']->value;?>
" type="button" data-action="show-filter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter" title='Показать "Фильтр товаров"'><i class="bi bi-funnel-fill"></i></button>
            </div>
            <form class="w-100 me-0 me-lg-3" id="formpoisk" role="search" action="index.php" method="get">
                <?php
$__section_sert_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['searchstrings']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sert_5_total = $__section_sert_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sert'] = new Smarty_Variable(array());
if ($__section_sert_5_total !== 0) {
for ($__section_sert_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sert']->value['index'] = 0; $__section_sert_5_iteration <= $__section_sert_5_total; $__section_sert_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sert']->value['index']++){
?>
                <input type="hidden" name='search_string_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sert']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sert']->value['index'] : null);?>
' value='<?php echo $_smarty_tpl->tpl_vars['searchstrings']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sert']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sert']->value['index'] : null)];?>
'> <?php
}
}
?>
                <div class="input-group">
                    <button class="btn btn-outline-danger" type="button" role="button" value="search" id="search-button-reset" onclick="onClearClick('input#searchstring')"><i class="bi bi-x-lg"></i></button>
                    <input type="text" class="form-control" name="searchstring" id="searchstring" placeholder="<?php echo (defined('FIND_BUTTON_PL') ? constant('FIND_BUTTON_PL') : null);?>
" value="<?php echo $_smarty_tpl->tpl_vars['searchstring']->value;?>
" aria-label="Main Search String">
                    <button class="btn btn-primary" type="submit" value="search" id="search-button-main"><i class="bi bi-search"></i> <span class="d-none d-md-inline"><?php echo (defined('FIND_BUTTON') ? constant('FIND_BUTTON') : null);?>
</span></button>
                </div>
            </form>
            <div class="d-flex flex-shrink-0 ms-1 ms-lg-3 me-0">
                <a id="main_cart_icon" class="nav-link position-relative text-dark<?php if (!$_smarty_tpl->tpl_vars['shopping_cart_value']->value) {?> text-opacity-25<?php }?>" href="<?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {?>cart.html<?php } else { ?>index.php?shopping_cart=yes<?php }?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                    <span class="p-1 m-0 position-absolute top-25 start-50 translate-middle-x fs-8">
                        <span id="main_cart_counter" class="badge bg-success bg-opacity-75 text-light align-text-bottom<?php if (!$_smarty_tpl->tpl_vars['shopping_cart_value']->value) {?> visually-hidden<?php }?>"><?php if ($_smarty_tpl->tpl_vars['shopping_cart_value']->value > 0) {
echo $_smarty_tpl->tpl_vars['shopping_cart_items']->value;
} else { ?>0<?php }?></span>
                        <span id="main_cart_value" class="visually-hidden" id="main_cart_value"><?php echo $_smarty_tpl->tpl_vars['shopping_cart_value']->value;?>
</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid collapse" id="navbarToggleContacts">
        <?php $_smarty_tpl->_subTemplateRender("file:blocks/nanoContacts.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

<?php }
}
