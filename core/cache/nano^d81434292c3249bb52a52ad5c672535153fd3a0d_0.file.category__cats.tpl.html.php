<?php
/* Smarty version 4.2.1, created on 2024-03-19 16:17:14
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\category__cats.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65f9905a2365e5_24327236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81434292c3249bb52a52ad5c672535153fd3a0d' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\category__cats.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9905a2365e5_24327236 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cats']->value) {?>
<div id="smarty_cats">

<?php if ($_smarty_tpl->tpl_vars['cats_count']->value <= 50) {?>
    <div class="mb-2 d-flex justify-content-between align-items-end"><input class="form-check-input fs-4" type="checkbox" id="check-all-cats" value="1" checked aria-label="category">
        <label for="cats_container" class="text-dark">Найдено в категориях:</label><span class="badge bg-primary"><?php echo $_smarty_tpl->tpl_vars['cats_count']->value;?>
</span></div>
    <div class="table-responsive bg-white">
        <table class="table table-sm table-hover table-borderless mb-0" id="cats_container">
            <tbody id="cats_conttrols">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'value', false, 'key', 'foo', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value > 1) {?>
                <?php $_smarty_tpl->_assignInScope('href', "/category_".((string)$_smarty_tpl->tpl_vars['key']->value).".html");?>
                <?php $_smarty_tpl->_assignInScope('link', "<a href='".((string)$_smarty_tpl->tpl_vars['href']->value)."' class='text-nowrap text-decoration-none fw-lighter text-primary' data-categoryID='".((string)$_smarty_tpl->tpl_vars['key']->value)."'>".((string)$_smarty_tpl->tpl_vars['value']->value)."</a>");?>
                <?php $_smarty_tpl->_assignInScope('CHECKBOX', "<div><input class=\"form-check-input me-3\" type=\"checkbox\" checked id=\"btn-check-".((string)$_smarty_tpl->tpl_vars['key']->value)."\" value=\"1\" aria-label=\"category\" data-categoryID=\"".((string)$_smarty_tpl->tpl_vars['key']->value)."\"></div>");?>
                <?php $_smarty_tpl->_assignInScope('BODY', "<tr>
                    <td title=\"Показать/Спрятать\">".((string)$_smarty_tpl->tpl_vars['CHECKBOX']->value)." </td> <td title=\"Перейти в эту категорию\">".((string)$_smarty_tpl->tpl_vars['link']->value)."</td>
                </tr>");?>
                                                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['BODY']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cats_count']->value > 50) {?>
<div class="mb-2 d-flex justify-content-between align-items-end"><label for="cats_container" class="text-dark">Найдено в категориях:</label><span class="badge bg-primary"><?php echo $_smarty_tpl->tpl_vars['cats_count']->value;?>
</span></div>
<div class="form-text text-secondary mt-1 fs-7">Найдено, более чем в 50-ти категориях. Уточните свой запрос для отображения списка</div>
<?php }?>

</div>
<?php }
}
}
