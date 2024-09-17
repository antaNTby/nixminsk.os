<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:05:44
  from 'W:\domains\nixminsk.os\core\tpl\admin\custord_companies.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97ea8e3e1b7_17278433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb4588d8514ecbae2fe3dfcc9df79f708f4942a1' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_companies.tpl.html',
      1 => 1698007206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/custord_companies_edit.tpl.html' => 1,
    'file:admin/custord_companies_table.tpl.html' => 1,
  ),
),false)) {
function content_66e97ea8e3e1b7_17278433 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="toOrderID" value="<?php echo $_smarty_tpl->tpl_vars['toOrderID']->value;?>
">
<input type="hidden" id="toInvoiceID" value="<?php echo $_smarty_tpl->tpl_vars['toInvoiceID']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['company_detailed']->value) {
$_smarty_tpl->_subTemplateRender("file:admin/custord_companies_edit.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-3 alert alert-warning alert-dismissible fade show" role="alert">
    <p><sup>1</sup> - Краткое наименование юридического лица, фамилия, имя, отчество (если таковое имеется) индивидуального предпринимателя</p>
    <p><sup>2</sup> - Организационно-правовая форма ведения бизнеса «Название организации» <code>Alt + 0171 = « , Alt + 0187 = »</code></p>
    <p><sup>3</sup> - Фактический, юридический, почтовый - место нахождения юридического лица</p>
    <p><sup>4</sup> - Расчетные счета, Наименование и адрес банка, Код банка юридического лица</p>
    <p>"dblclick" по некоторым "ПУСТЫМ" полям заполняет их данными</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } else {
$_smarty_tpl->_subTemplateRender("file:admin/custord_companies_table.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
