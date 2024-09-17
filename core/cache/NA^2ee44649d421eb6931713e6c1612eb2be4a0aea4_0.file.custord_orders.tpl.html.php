<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\custord_orders.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f975f4ca7_05690078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee44649d421eb6931713e6c1612eb2be4a0aea4' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_orders.tpl.html',
      1 => 1698062860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/custord_orders_edit.tpl.html' => 1,
    'file:admin/custord_orders_list.tpl.html' => 1,
  ),
),false)) {
function content_66e97f975f4ca7_05690078 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order_detailed']->value) {
$_smarty_tpl->_subTemplateRender("file:admin/custord_orders_edit.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
$_smarty_tpl->_subTemplateRender("file:admin/custord_orders_list.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p><?php echo (defined('ADMIN_ABOUT_PRICES') ? constant('ADMIN_ABOUT_PRICES') : null);?>
</p>
    <p>Редактировать можно АКТИВНЫЙ или НОВЫЙ заказ</p>
    <p>Удалять можно только ОТМЕНЕННЫЙ заказ</p>
    <p>из Таблицы можно удалять любые, кроме АРХИВНЫХ заказов</p>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php }
}
