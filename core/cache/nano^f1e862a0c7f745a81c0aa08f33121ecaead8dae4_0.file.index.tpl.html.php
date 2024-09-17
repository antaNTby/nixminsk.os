<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:45
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\user\nano\index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec5d6db9c3_85081525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1e862a0c7f745a81c0aa08f33121ecaead8dae4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\index.tpl.html',
      1 => 1701857758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index__head.tpl.html' => 1,
    'file:index__svg.tpl.html' => 1,
    'file:blocks/nanoShowRootCategories.tpl.html' => 1,
    'file:index__header_dashboard.tpl.html' => 1,
    'file:index__header_sticky.tpl.html' => 1,
    'file:index__servicePanel.tpl.html' => 1,
    'file:blocks/nanoOffcanvasFilter.tpl.html' => 1,
    'file:index__head_empty.tpl.html' => 1,
  ),
),false)) {
function content_6604ec5d6db9c3_85081525 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<?php if (((defined('CONF_SHOP_BILD') ? constant('CONF_SHOP_BILD') : null) == 0) || ($_smarty_tpl->tpl_vars['isadmin']->value == "yes")) {?>
<html class="h-100 bg-white" lang="ru-RU" dir="ltr">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:index__head.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body class="d-flex flex-column h-100 bg-white">
    <?php $_smarty_tpl->_subTemplateRender("file:index__svg.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <header>
        <div class="py-1 bg-light multi-collapse el-0">
            <div class="container-fluid">
                                <?php if ((defined('CONF_DISPLAY_INFO') ? constant('CONF_DISPLAY_INFO') : null) == 1) {?>
                <div class="my-1 alert alert-secondary alert-dismissible fade show" role="alert">
                    <?php echo (defined('STRING_EXE_DATA') ? constant('STRING_EXE_DATA') : null);?>
: <span class="mark" id="tgenexe">0.000</span> <?php echo (defined('TIME_SEK') ? constant('TIME_SEK') : null);?>
;&nbsp;&nbsp;<?php echo (defined('STRING_PREEXE_DATA') ? constant('STRING_PREEXE_DATA') : null);?>
: <span class="mark" id="tgencompile">0.000</span> <?php echo (defined('TIME_SEK') ? constant('TIME_SEK') : null);?>
;&nbsp;&nbsp;<?php echo (defined('BD_DO_TIME') ? constant('BD_DO_TIME') : null);?>
: <span class="mark" id="tgendb">0.000</span> <?php echo (defined('TIME_SEK') ? constant('TIME_SEK') : null);?>
;&nbsp;&nbsp;<?php echo (defined('STRING_ALL_EXETIME') ? constant('STRING_ALL_EXETIME') : null);?>
: <span class="mark" id="tgenall">0.000</span> <?php echo (defined('TIME_SEK') ? constant('TIME_SEK') : null);?>
;&nbsp;&nbsp;<?php echo (defined('STRING_DO_COUNT') ? constant('STRING_DO_COUNT') : null);?>
: <span class="mark" id="tgensql">0</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php echo '<script'; ?>
>doLStat('do=stat');<?php echo '</script'; ?>
>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cookie_policy_show']->value == 1) {?>
                <div class="my-4 alert alert-primary alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Настройка файлов cookie и политика обмена персональными данными
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Согласится" onclick='setCookie( "COOKIE_POLICY", "1","1", "/");return false;'></button>
                    <p>На нашем сайте используются файлы <strong>cookie</strong> и другие технологии, которые позволяют нам идентифицировать вас, а также изучать, как вы используете веб-сайт. <a class="alert-link" href="politika-konfidentsialnosti.html" target="_blank">Подробнее ...</a> </p>
                    <hr>
                    <p class="mb-0">Дальнейшее использование этого сайта подразумевает ваше согласие на использование этих технологий и полное согдасие с нашей политикой обмена персональными данными.
                        <span class="text-danger">Покиньте сайт, если для Вас это не приемлимо</span></p>
                </div>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/nanoShowRootCategories.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Caption'=>"Основные разделы",'CategoriesArray'=>$_smarty_tpl->tpl_vars['categories_tree']->value), 0, false);
?>
            </div>
        </div>
        <div class="m-0" id="dashboardHeader">
            <?php $_smarty_tpl->_subTemplateRender("file:index__header_dashboard.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </header>
    <div class="sticky-top bg-light pb-1" id="stickyHeader">
        <?php $_smarty_tpl->_subTemplateRender("file:index__header_sticky.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:index__servicePanel.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
        <div id="modalAuth" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header bg-navbar">
                    <h4 class="modal-title text-white"><?php echo (defined('AUTH_TH') ? constant('AUTH_TH') : null);?>
</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post" role="form">
                        <div class="mb-2">
                            <label for="user_login_id"><?php echo (defined('CUSTOMER_LOGIN') ? constant('CUSTOMER_LOGIN') : null);?>
</label>
                            <input type="text" class="form-control" name="user_login" id="user_login_id">
                        </div>
                        <div class="mb-2">
                            <label for="user_pw_id"><?php echo (defined('CUSTOMER_PASSWORD') ? constant('CUSTOMER_PASSWORD') : null);?>
</label>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" name="user_pw" id="user_pw_id">
                                <div class=input-group-text><input class="form-check-input mt-0" type=checkbox aria-label="Checkbox for user_pw_id" onclick="return show_hide_password(this,'user_pw_id')"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center g-3 mb-3">
                            <button type="submit" class="btn btn-success btn-lg w-100"><i class="bi bi-person-check"></i> <?php echo (defined('BUTTON_ENTER_AUTH') ? constant('BUTTON_ENTER_AUTH') : null);?>
</button>
                        </div>
                        <?php if ((defined('CONF_USER_SYSTEM') ? constant('CONF_USER_SYSTEM') : null) > 0) {?>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-link" href="index.php?register=yes" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?php echo (defined('REGISTER_LINK') ? constant('REGISTER_LINK') : null);?>
"><?php echo (defined('REGISTER_LINK') ? constant('REGISTER_LINK') : null);?>
</a>
                            <a class="btn btn-link" href="index.php?logging=yes" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Восстановить пароль"><?php echo (defined('FORGOT_PASSWORD_LINK') ? constant('FORGOT_PASSWORD_LINK') : null);?>
</a>
                        </div>
                        <?php }?>
                        <input type="hidden" name="enter" value="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="text-center my-3 visually-hidden" id="spinnerLoadData">
        <span class="h1 text-primary">Loading...</span>
        <div class="spinner-border text-primary" role="status"></div>     </div>
    <!-- Begin page content -->
    <main class="flex-shrink-0">
                <div class="container-fluid" id="filterResult">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['main_content_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </main>
    <footer class="d-block mt-auto bg-dark p-0 my-2" id="footer">
        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-1 px-2 px-xl-0">
                <p class="col-md-6 mb-0 text-muted"><span class="nix-brand">nix.by</span></p>
                <ul class="nav col-md-6 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">About</a></li>
                </ul>
            </div>
        </div>
        <div class="container-sm">
            <p class="mb-0 text-center text-danger">Сайт <span class="font-monospace">nix.by</span> не является интернет-магазином и не работает с физлицами.</p>
            <p class="mb-0 text-center text-muted">©1997-2022, antaNT64</p>
        </div>
        <p class="my-1 text-center text-muted">Использование информации сервера www.nix.ru <a class="text-center text-muted" href="https://www.nix.ru/rights.html">Copyright © 1991-2022 НИКС - Компьютерный Супермаркет</a></p>
            </footer>
    <div class="container-fluid">
                <div class="py-1 px-2 px-xl-0 text-muted text-small">
            Вся информация, опубликованная на сайте <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
, в т.ч. цены товаров, описания, характеристики и комплектации, извещения об оформлении, а также обработке заказа не являются публичной офертой и носит исключительно справочный характер. Договор заключается только после предварительного согласования наличия, наименования и количества товара, а так же подтверждения исполнения заказа сотрудником <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
.
        </div>
    </div>



    <?php echo '<script'; ?>
 src="/lib/bootstrap/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/lib/jquery-3.6.0.min.js" defer><?php echo '</script'; ?>
>
    <!-- JavaScript Bundle with Popper -->
    
    

    <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
            <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" || $_smarty_tpl->tpl_vars['main_content_template']->value == "search_simple.tpl.html") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:blocks/nanoOffcanvasFilter.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="/lib/DataTables/datatables.min.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/productsFilter.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/productsDataTableColumns.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/productsDataTable.js" defer><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html") {?>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/category.js" defer><?php echo '</script'; ?>
>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "search_simple.tpl.html") {?>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/search_simple.js" defer><?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "product_detailed.tpl.html") {?>
    <?php echo '<script'; ?>
 src="/lib/lightgallery/lightgallery.min.js" defer><?php echo '</script'; ?>
>
    <!-- lightgallery plugins -->
    <?php echo '<script'; ?>
 src="/lib/lightgallery/plugins/fullscreen/lg-fullscreen.min.js" defer><?php echo '</script'; ?>
> <!--  -->
    <?php echo '<script'; ?>
 src="/lib/lightgallery/plugins/rotate/lg-rotate.min.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/lib/lightgallery/plugins/thumbnail/lg-thumbnail.min.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/lib/lightgallery/plugins/zoom/lg-zoom.min.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/product_detailed.js" charset="utf-8" defer><?php echo '</script'; ?>
>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "shopping_cart.tpl.html") {?>
        <?php if ($_smarty_tpl->tpl_vars['cart_content']->value) {?>
        
    <?php echo '<script'; ?>
 src="/lib/bootstrap-select-1.14.0-beta3/bootstrap-select.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/lib/bootstrap-select-1.14.0-beta3/defaults-ru_RU.min.js" defer><?php echo '</script'; ?>
>
    <!-- Подключение jQuery плагинов MaskedInput bootstrap-select -->
    <?php echo '<script'; ?>
 src="/lib/jquery.maskedinput.min.js" defer><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/cart_functions.js" charset="utf-8" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/invoice_functions.js" charset="utf-8" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/cart_processing.js" charset="utf-8" defer><?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>


    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/nano.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/lib/toastr/toastr.min.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/nano-toasts.js" defer><?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['livesearch']->value) {?>         <?php echo '<script'; ?>
 src="/lib/jquery-ui-1.13.1.custom/jquery-ui.min.js" charset="utf-8" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/nano-livesearch.js" charset="utf-8" defer><?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
 src="/lib/jquery.blockui.js" charset="utf-8" defer><?php echo '</script'; ?>
>

    <input type="hidden" id="tpl_categoryID" value="<?php echo $_smarty_tpl->tpl_vars['categoryID']->value;?>
">
    <input type="hidden" id="tpl_currency_value" value="<?php echo $_smarty_tpl->tpl_vars['currency_details']->value['currency_value'];?>
">
    <input type="hidden" id="tpl_CID" value="<?php echo $_smarty_tpl->tpl_vars['currency_details']->value['CID'];?>
">
    <input type="hidden" id="tpl_currency_code" value="<?php echo $_smarty_tpl->tpl_vars['currency_details']->value['code'];?>
">
    </body>

</html>
<?php } else { ?>
<html lang="by">
<?php $_smarty_tpl->_subTemplateRender("file:index__head_empty.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="shop-build"><?php echo (defined('BUILD_WRAP_HTML') ? constant('BUILD_WRAP_HTML') : null);?>
</body>

</html>
<?php }
}
}
