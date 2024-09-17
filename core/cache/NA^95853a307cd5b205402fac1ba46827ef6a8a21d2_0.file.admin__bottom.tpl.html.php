<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\admin__bottom.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f97710e76_95546040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95853a307cd5b205402fac1ba46827ef6a8a21d2' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\admin__bottom.tpl.html',
      1 => 1697564651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f97710e76_95546040 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/lib/bootstrap/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" defer><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/jquery-3.6.0.min.js" defer><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="/lib/bootstrap-select-1.14.0-beta3/bootstrap-select.js" defer><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/bootstrap-select-1.14.0-beta3/defaults-ru_RU.min.js" defer><?php echo '</script'; ?>
>
<!-- Подключение jQuery плагинов MaskedInput bootstrap-select -->
<?php echo '<script'; ?>
 src="/lib/toastr/toastr.min.js" defer><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/lib/jquery.blockui.js" charset="utf-8" defer><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/cleave/dist/cleave.min.js"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 src="/lib/DataTables_JQuery3/datatables.min.js"><?php echo '</script'; ?>
> 
 <?php echo '<script'; ?>
 src="/lib/vanillajs-datepicker/js/datepicker-full.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/lib/vanillajs-datepicker/js/locales/by.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/core/tpl/admin/js/admin.js"><?php echo '</script'; ?>
>




<?php echo '<script'; ?>
 src="/core/tpl/admin/js/jQueryScripts.js" defer><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['order_detailed']->value) {
echo '<script'; ?>
 src="./core/tpl/admin/apps/Currency/appCurrency.js" type="module"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./core/tpl/admin/apps/OrderContent/appOrderContent.js" type="module"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./core/tpl/admin/apps/AdminProductDataTable/appAdminProductDataTable.js" type="module"><?php echo '</script'; ?>
>
<?php }?>

<?php }
}
