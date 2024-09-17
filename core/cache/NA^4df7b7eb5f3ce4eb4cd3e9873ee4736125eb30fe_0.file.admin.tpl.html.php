<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\admin.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f975af389_08513456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df7b7eb5f3ce4eb4cd3e9873ee4736125eb30fe' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\admin.tpl.html',
      1 => 1708071817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/admin__head.tpl.html' => 1,
    'file:admin/admin__svg.tpl.html' => 1,
    'file:admin/admin__navbar.tpl.html' => 1,
    'file:admin/custord_orders_filter_form.tpl.html' => 1,
    'file:admin/admin__megamenu.tpl.html' => 1,
    'file:admin/apps/Toasts/appToasts.tpl.html' => 1,
    'file:admin/admin__bottom.tpl.html' => 1,
  ),
),false)) {
function content_66e97f975af389_08513456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<html class="h-100" lang="ru-RU" dir="ltr">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:admin/admin__head.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body class="d-flex flex-column bg-light h-100" style="max-height: 2500px;overflow-y: scroll;">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/admin__svg.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <header>
        <div class="m-0" id="dashboardHeader">
            <?php $_smarty_tpl->_subTemplateRender("file:admin/admin__navbar.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="mt-1">
                    </div>
    </header>
                                <!-- Begin page content -->
    <main class="flex-shrink-0">
                <div class="container-sm" id="appToastsContent">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-success" id="btnSuccess">Показать Success</button>
<button type="button" class="btn btn-danger" id="btnDanger">Show Error</button>
                </div>
            </div>
        </div>
                <?php if ($_smarty_tpl->tpl_vars['admin_main_content_template']->value == "default.tpl.html" || $_smarty_tpl->tpl_vars['antSUB']->value == "shipping" || $_smarty_tpl->tpl_vars['antSUB']->value == "payment" || $_smarty_tpl->tpl_vars['antSUB']->value == "setting" || $_smarty_tpl->tpl_vars['antSUB']->value == "companies") {?>
        <div class="container-fluid" id="indexMainContent">
                            <div class="row">
                    <div class="col">
                        <?php $_smarty_tpl->_subTemplateRender("admin/".((string)$_smarty_tpl->tpl_vars['admin_main_content_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
            </div>
            <?php } elseif ($_GET['orders_detailed']) {?>
            <div class="container-fluid" id="indexMainContent">
                <div class="row">
                    <div class="col-12">
                        <?php $_smarty_tpl->_subTemplateRender("file:admin/custord_orders_filter_form.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="col">
                        <?php $_smarty_tpl->_subTemplateRender("admin/".((string)$_smarty_tpl->tpl_vars['admin_main_content_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="container-fluid" id="indexMainContent">
                <div class="row">
                    <div class="col order-2  order-md-1 col-md-4">
                        <?php $_smarty_tpl->_subTemplateRender("file:admin/admin__megamenu.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="col order-1  order-md-2 col-md-8">
                        <?php $_smarty_tpl->_subTemplateRender("admin/".((string)$_smarty_tpl->tpl_vars['admin_main_content_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
            </div>
            <?php }?>
    </main>
                    <?php $_smarty_tpl->_subTemplateRender("file:admin/apps/Toasts/appToasts.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <footer class="p-0 my-2 d-block mt-auto bg-admin" id="footer">
        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-1 px-2 px-xl-0">
                <p class="col-md-6 mb-0 text-muted"><span class="nix-brand">nix.by</span></p>
                <ul class="nav col-md-6 justify-content-end">
                    <span class="navbar-text"> <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M");?>
</span>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">FAQs</a></li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-command"></i></button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" target="_blank" href="\lib\tfm\etfm.php"><i class="bi bi-house-exclamation-fill"></i> TinyFileManager</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value) {?><li><button class="dropdown-item text-bg-danger" name="btn_TerminateCompany" title="УДАЛИТЬ ЭТУ КОМПАНИЮ БЕЗО ВСЯКИХ НЕЖНОСТЕЙ" data-kill_id="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
" data-app="AdminCompany" data-operation="TerminateCompany"><i class="bi bi-sign-dead-end"></i> Удалить компанию</button></li><?php }?>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">About</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="container-fluid">
        <div class="py-1 px-2 px-xl-0 text-muted text-small">
            Вся информация, опубликованная на сайте <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
, в т.ч. цены товаров, описания, характеристики и комплектации, извещения об оформлении, а также обработке заказа не являются публичной офертой и носит исключительно справочный характер. Договор заключается только после предварительного согласования наличия, наименования и количества товара, а так же подтверждения исполнения заказа сотрудником <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
.
        </div>
    </div>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:admin/admin__bottom.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
