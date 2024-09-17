<?php
/* Smarty version 4.2.1, created on 2024-03-29 17:36:47
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\product_detailed__adminTable.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6606d1ff43f663_42335478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700fab0ea52ee97d53a289211de0ade8afd57c40' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\product_detailed__adminTable.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606d1ff43f663_42335478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('a_href', ((string)(defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null))."?categoryID=".((string)$_smarty_tpl->tpl_vars['product_info']->value['categoryID'])."&amp;eaction=cat");
$_smarty_tpl->_assignInScope('a_tips', ((string)(defined('ADMIN_EDIT_CATEGORY') ? constant('ADMIN_EDIT_CATEGORY') : null)));
$_smarty_tpl->_assignInScope('a_icon', "<i class='bi bi-chevron-right opacity-25'></i>");
$_smarty_tpl->_assignInScope('a_admin_category', "<a class='btn-link adminlink' href='".((string)$_smarty_tpl->tpl_vars['a_href']->value)."' title='".((string)$_smarty_tpl->tpl_vars['a_tips']->value)."'>".((string)$_smarty_tpl->tpl_vars['a_icon']->value)."</a>");
$_smarty_tpl->_assignInScope('a_admin_catalog', "<a class='btn-link adminlink' href='".((string)(defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null))."?dpt=catalog&sub=products_categories&categoryID=".((string)$_smarty_tpl->tpl_vars['product_info']->value['categoryID'])."&expandCat=".((string)$_smarty_tpl->tpl_vars['product_info']->value['categoryID'])."' title='Редактировать в КАТАЛОГЕ'><i class='bi bi-table opacity-25'></i></a>");
$_smarty_tpl->_assignInScope('a_admin_tree', "<a class='btn-link adminlink' href='".((string)(defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null))."?dpt=catalog&sub=tree&expandCatName=".((string)$_smarty_tpl->tpl_vars['product_info']->value['name'])."&expandCat=".((string)$_smarty_tpl->tpl_vars['product_info']->value['categoryID'])."' title='Редактировать в Дереве'><i class='bi bi-tree opacity-25'></i></a>");
$_smarty_tpl->_assignInScope('a_admin_product', "<a class='btn-link adminlink' href='".((string)(defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null))."?productID=".((string)$_smarty_tpl->tpl_vars['product_info']->value['productID'])."&amp;eaction=prod' title='".((string)(defined('STRING_EDITPR') ? constant('STRING_EDITPR') : null))."'><i class='bi bi-apple opacity-25'></i></a>");?>
<div class="table-responsive-sm p-1">
    <h5 class="h5 adminlink">
        Для администраторов
        <span class="btn-toolbar float-md-end">
            <a class="btn btn-outline-dark btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#adminInfo" aria-expanded="false" aria-controls="adminInfo"><i class="bi bi-arrows-expand opacity-25" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Скрыть лишнее"></i></a>
        </span>
    </h5>
    <table class="table table-sm collapse" id="adminInfo">
        <tbody>
            <tr>
                <td colspan="2" class="text-nowrap" title="Число просмотров \ Добавить в рекомендуемые">
                    <span class="h4 badge bg-success"> <i class="bi bi-graph-up-arrow"></i> <?php echo $_smarty_tpl->tpl_vars['product_info']->value['viewed_times'];?>
 </span> <span class="d-none d-xxl-inline">число просмотров</span>
                    <a class="btn btn-link text-danger text-decoration-none" <?php if (!$_smarty_tpl->tpl_vars['product_info']->value['enabled']) {?>disabled<?php }?> href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=catalog&amp;sub=special&amp;new_offer=<?php echo $_smarty_tpl->tpl_vars['product_info']->value['productID'];?>
" title=" Добавить в рекомендованные"><i class="bi bi-balloon-fill"></i><span class="d-none d-xxl-inline">Добавить в список на главную страницу</span></a>
                </td>
            </tr>
            <tr>
                <td>categoryID</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product_info']->value['categoryID'];?>

                    <?php echo $_smarty_tpl->tpl_vars['a_admin_category']->value;?>

                </td>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product_info']->value['productID'];?>

                    <?php echo $_smarty_tpl->tpl_vars['a_admin_product']->value;?>

                </td>
            </tr>
            <tr>
                <td>Артикул</td>
                <td>#<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_code'];?>

                    <?php echo $_smarty_tpl->tpl_vars['a_admin_tree']->value;?>

                    <?php echo $_smarty_tpl->tpl_vars['a_admin_catalog']->value;?>

                </td>
            </tr>
            <tr>
                <td>Название</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
</td>
            </tr>
            <tr>
                <td>на складе</td>
                <td>
                    <label><?php echo $_smarty_tpl->tpl_vars['product_info']->value['in_stock'];?>
&nbsp;шт&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['product_info']->value['in_stock_string'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if ($_smarty_tpl->tpl_vars['product_info']->value['free_shipping']) {?>свободная доставка<?php }?> + $<?php echo $_smarty_tpl->tpl_vars['product_info']->value['shipping_freight'];?>
</label>
                </td>
            </tr>
            <tr>
                <td>Цены</td>
                <td>
                    <table class="table table-sm table-warning opacity-50">
                        <tbody>
                            <tr>
                                <td>$</td>
                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['Price'];?>
</td>
                            </tr>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['currency_details']->value['Name'];?>
</th>
                                <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['PriceWithUnit'];?>
</th>
                            </tr>
                        </tbody>
                    </table>
                                        <table class="table table-sm table-warning">
                        <thead>
                            <tr>
                                <td>валюта</td>
                                <td>Price</td>
                                <td>Вход</td>
                                <td>дельта</td>
                                <td>курс</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$__section_cu_12_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cu_12_total = $__section_cu_12_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cu'] = new Smarty_Variable(array());
if ($__section_cu_12_total !== 0) {
for ($__section_cu_12_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index'] = 0; $__section_cu_12_iteration <= $__section_cu_12_total; $__section_cu_12_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index']++){
?>
                            <?php $_smarty_tpl->_assignInScope('_cur', $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index'] : null)]);?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['_cur']->value['Name'];?>
, <?php echo $_smarty_tpl->tpl_vars['_cur']->value['currency_iso_3'];?>
 </td>
                                <td class="text-success">
                                    <?php if ($_smarty_tpl->tpl_vars['_cur']->value['where2show'] == 0) {
echo $_smarty_tpl->tpl_vars['_cur']->value['code'];
}
echo $_smarty_tpl->tpl_vars['product_info']->value['Price']*sprintf("%.2f",$_smarty_tpl->tpl_vars['_cur']->value['currency_value']);
if ($_smarty_tpl->tpl_vars['_cur']->value['where2show'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['_cur']->value['code'];
}?>
                                </td>
                                <td class="text-muted"><?php if ($_smarty_tpl->tpl_vars['_cur']->value['where2show'] == 0) {
echo $_smarty_tpl->tpl_vars['_cur']->value['code'];
}
echo $_smarty_tpl->tpl_vars['product_info']->value['list_price']*sprintf("%.2f",$_smarty_tpl->tpl_vars['_cur']->value['currency_value']);
if ($_smarty_tpl->tpl_vars['_cur']->value['where2show'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['_cur']->value['code'];
}?></td>
                                <td><?php if ($_smarty_tpl->tpl_vars['_cur']->value['where2show'] == 0) {
echo $_smarty_tpl->tpl_vars['_cur']->value['code'];
}
echo $_smarty_tpl->tpl_vars['product_info']->value['Price']*$_smarty_tpl->tpl_vars['_cur']->value['currency_value']-$_smarty_tpl->tpl_vars['product_info']->value['list_price']*$_smarty_tpl->tpl_vars['_cur']->value['currency_value'];
if ($_smarty_tpl->tpl_vars['_cur']->value['where2show'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['_cur']->value['code'];
}?></td>
                                <td>
                                    <span class="badge <?php if ($_smarty_tpl->tpl_vars['product_info']->value['Price']*$_smarty_tpl->tpl_vars['_cur']->value['currency_value'] > $_smarty_tpl->tpl_vars['product_info']->value['list_price']*$_smarty_tpl->tpl_vars['_cur']->value['currency_value']) {?>bg-success<?php } else { ?>bg-danger<?php }?>"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['_cur']->value['currency_value']);?>
 <?php echo $_smarty_tpl->tpl_vars['_cur']->value['code'];?>
</span>
                                </td>
                            </tr>
                            <?php
}
}
?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div><?php }
}
