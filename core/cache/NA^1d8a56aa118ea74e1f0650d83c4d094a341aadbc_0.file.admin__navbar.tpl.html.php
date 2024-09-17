<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\admin__navbar.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f975c6be6_49124790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8a56aa118ea74e1f0650d83c4d094a341aadbc' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\admin__navbar.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f975c6be6_49124790 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark navbar-expand-lg  bg-dark bg-gradient bg-opacity-75">
    <div class="container-xxl">
        <a class="navbar-brand nixadmin-brand" href="/"><img alt="nix.by logo" src="/<?php echo (defined('ADMIN_IMAGES_DEFAULT_PATH') ? constant('ADMIN_IMAGES_DEFAULT_PATH') : null);?>
/<?php echo (defined('CONF_LOGO_FILE') ? constant('CONF_LOGO_FILE') : null);?>
" height="32" /> <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <span class="navbar-text d-none d-sm-inline-block">login </span>
                <span class="navbar-text badge bg-dark mx-1 mx-lg-3" id="adminName" data-adminname="<?php if ((defined('CONF_BACKEND_SAFEMODE') ? constant('CONF_BACKEND_SAFEMODE') : null) == 1) {?>demo<?php } else {
echo $_smarty_tpl->tpl_vars['admintempname']->value;
}?>"><?php if ((defined('CONF_BACKEND_SAFEMODE') ? constant('CONF_BACKEND_SAFEMODE') : null) == 1) {?>demo<?php } else {
echo $_smarty_tpl->tpl_vars['admintempname']->value;
}?></span>

                <span class="navbar-text d-none d-sm-inline-block">online_users </span>
                <span class="navbar-text badge bg-dark mx-1 mx-lg-3"><?php echo $_smarty_tpl->tpl_vars['online_users']->value;?>
</span>

                <span class="navbar-text d-none d-sm-inline-block">Новых заказов: </span>
                <span class="navbar-text badge bg-danger mx-1 mx-lg-3" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?order_search_type=SearchByStatusID&amp;checkbox_order_status_<?php echo (defined('CONF_NEW_ORDER_STATUS') ? constant('CONF_NEW_ORDER_STATUS') : null);?>
=1&amp;dpt=custord&amp;sub=orders&amp;search="><?php echo $_smarty_tpl->tpl_vars['new_orders_count']->value;?>
</span>


            <div class="navbar-nav me-auto mb-2 mb-lg-0 d-flex d-lg-none">
                <hr>
                <a class="nav-link active" aria-current="page" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
">Admin <i class="bi bi-gear"></i></a>
                <a class="nav-link" href="index.php"><?php echo (defined('ADMIN_BACK_TO_SHOP') ? constant('ADMIN_BACK_TO_SHOP') : null);?>
 <i class="bi bi-house"></i></a>
                <a class="nav-link" href="index.php?logout=yes"><?php echo (defined('ADMIN_LOGOUT_LINK') ? constant('ADMIN_LOGOUT_LINK') : null);?>
 <i class="bi bi-door-open"></i></a>
            </div>

        </div>

        <div class="navbar-nav d-none d-lg-flex me-0 mb-2 mb-lg-0">
            <a class="nav-link fs-5 active" aria-current="page" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
"><i class="bi bi-gear"></i> Admin </a>
            <a class="nav-link fs-5" href="index.php"><i class="bi bi-house"></i> <?php echo (defined('ADMIN_BACK_TO_SHOP') ? constant('ADMIN_BACK_TO_SHOP') : null);?>
 </a>
            <a class="nav-link fs-5" href="index.php?logout=yes"><i class="bi bi-door-open"></i> <?php echo (defined('ADMIN_LOGOUT_LINK') ? constant('ADMIN_LOGOUT_LINK') : null);?>
 </a>
        </div>
    </div>
</nav><?php }
}
