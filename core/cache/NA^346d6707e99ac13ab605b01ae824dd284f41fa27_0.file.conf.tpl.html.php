<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:16
  from 'W:\domains\nixminsk.os\core\tpl\admin\conf.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f7c9eb223_84019346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '346d6707e99ac13ab605b01ae824dd284f41fa27' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\conf.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f7c9eb223_84019346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('admin_departments_name', "Настройки сайта");?>

<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['admin_sub_departments']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['current_sub']->value == $_smarty_tpl->tpl_vars['admin_sub_departments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
    <nav class="my-1 d-flex flex-column-inverse flex-md-row-inverse justify-content-start justify-content-md-end" style="--bs-breadcrumb-divider: '::';" aria-label="breadcrumb">
        <ol class="my-0 px-1 breadcrumb text-small lh-1">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
"><i class="bi bi-house-gear"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
"><?php echo $_smarty_tpl->tpl_vars['admin_departments_name']->value;?>
</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['admin_sub_departments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</li>
        </ol>
    </nav>
    <h1 class="h1 fw-lighter text-body" data-id="PageH1">
    <?php if ($_smarty_tpl->tpl_vars['current_sub']->value == "payment" || $_smarty_tpl->tpl_vars['current_sub']->value == "shipping") {?>
            <?php if ($_smarty_tpl->tpl_vars['current_sub']->value == "payment") {
echo (defined('ADMIN_STRING_PAYMENT_TYPE') ? constant('ADMIN_STRING_PAYMENT_TYPE') : null);
} else {
echo (defined('ADMIN_STRING_SHIPPING_TYPE') ? constant('ADMIN_STRING_SHIPPING_TYPE') : null);
}?>
            <a href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=conf&sub=<?php if ($_smarty_tpl->tpl_vars['current_sub']->value == "payment") {?>shipping<?php } else { ?>payment<?php }?>"
             class="mx-2 px-3 btn btn-dark"><i class="bi bi-arrow-left-right"></i></a>
            <small class=text-muted>
            <?php if ($_smarty_tpl->tpl_vars['current_sub']->value == "payment") {
echo (defined('ADMIN_STRING_SHIPPING_TYPE') ? constant('ADMIN_STRING_SHIPPING_TYPE') : null);
} else {
echo (defined('ADMIN_STRING_PAYMENT_TYPE') ? constant('ADMIN_STRING_PAYMENT_TYPE') : null);
}?></small>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['admin_sub_departments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

    <?php }?>
    </h1>
    <?php }
}
}
?>
<div id="preproc"></div>
<?php if (!$_smarty_tpl->tpl_vars['safemode']->value) {
$_smarty_tpl->_subTemplateRender("admin/".((string)$_smarty_tpl->tpl_vars['admin_sub_dpt']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
<div class="alert alert-danger alert-dismissible fade show mb-1" role="alert">
    <strong>Внимание! <?php echo (defined('USEFUL_FOR_YOU') ? constant('USEFUL_FOR_YOU') : null);?>
</strong> <?php echo (defined('ERROR_MODULE_ACCESS_DES2') ? constant('ERROR_MODULE_ACCESS_DES2') : null);?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }
}
}
