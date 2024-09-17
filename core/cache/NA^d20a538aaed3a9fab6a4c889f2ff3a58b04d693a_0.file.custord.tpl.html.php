<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:25:32
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\custord.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604f13c6aa469_41665838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20a538aaed3a9fab6a4c889f2ff3a58b04d693a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\custord.tpl.html',
      1 => 1697552836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604f13c6aa469_41665838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('admin_departments_name', "Торговля, счета, заказы, клиенты");?>

<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['admin_sub_departments']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['current_sub']->value == $_smarty_tpl->tpl_vars['admin_sub_departments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
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
<?php if ($_smarty_tpl->tpl_vars['toOrderID']->value) {?>
<h1 class="h1 fw-lighter text-warning" data-id="PageH1">Выбор компании для заказа #<?php echo $_smarty_tpl->tpl_vars['toOrderID']->value;?>
</h1>
<?php } else { ?>
<h1 class="h1 fw-lighter text-body" data-id="PageH1"><?php echo $_smarty_tpl->tpl_vars['admin_sub_departments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</h1>
<?php }
}
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
<?php }?>

<?php }
}
