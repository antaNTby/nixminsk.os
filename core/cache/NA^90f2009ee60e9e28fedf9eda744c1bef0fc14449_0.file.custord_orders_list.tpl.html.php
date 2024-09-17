<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:08:56
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\custord_orders_list.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ed5896b8a7_75737029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f2009ee60e9e28fedf9eda744c1bef0fc14449' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_orders_list.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ed5896b8a7_75737029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['orders']->value) {?>
<form method=POST action="" name="status_cpast_f" id="status_cpast_f">
    <input type="hidden" name="dpt" value="custord">
    <input type="hidden" name="sub" value="orders">
    <input type="hidden" name="none" value="" id="ant">
    <div class="input-group flex-nowrap mb-0">
        <label class="input-group-text" for="telemac">с отмеченными</label>
        <select class="form-select" name="status_cpast" id="telemac">
            <option value='-1' selected><?php echo (defined('ADMIN_PROMPT_TO_SELECT') ? constant('ADMIN_PROMPT_TO_SELECT') : null);?>
</option>
            <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order_statuses']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value='<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
'> <?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_name'];?>
 </option>
            <?php
}
}
?>
        </select>
        <button class="btn btn-outline-dark" onclick="document.getElementById('status_cpast_f').submit(); return false"><?php echo (defined('ADMIN_STATUS_LINK') ? constant('ADMIN_STATUS_LINK') : null);?>
 <i class="bi bi-shield-exclamation"></i></button>
        <button class="btn btn-outline-danger" onclick="document.getElementById('telemac').name = 'orders_delete'; document.getElementById('status_cpast_f').submit(); return false"><?php echo (defined('DELETE_BUTTON') ? constant('DELETE_BUTTON') : null);?>
 <i class="bi bi-trash"></i></button>
    </div>
    <div id="status_cpastHelpBlock" class="form-text mt-0 mb-4">
        <?php echo (defined('ADMIN_DELORD_NOTICE') ? constant('ADMIN_DELORD_NOTICE') : null);?>

    </div>
    <div class="table-responsive-xl">
        <table class="table table-hover table-striped table-bordered align-middle">
            <thead class="table-primary">
                <tr>
                    <th class="text-nowrap text-start" colspan=2>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="id_chall" name="chk" value="">
                            <label class="form-check-label text-secondary fw-bold" for="id_chall">все</label>
                        </div>
                        <a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=orderID&amp;direction=ASC' class="btn btn-link"><i class="bi bi-sort-up-alt"></i></a><?php echo (defined('STRING_ORDER_ID') ? constant('STRING_ORDER_ID') : null);?>
<a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=orderID&amp;direction=DESC' class="btn btn-link"><i class="bi bi-sort-down"></i></a>
                    </th>
                    <th class="text-nowrap text-center"><a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=order_time&amp;direction=ASC' class="btn btn-link"><i class="bi bi-sort-up-alt"></i></a><?php echo (defined('TABLE_ORDER_TIME') ? constant('TABLE_ORDER_TIME') : null);?>
<a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=order_time&amp;direction=DESC' class="btn btn-link"><i class="bi bi-sort-down"></i></a></th>
                    <th class="text-nowrap text-center"><a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=shipping_type&amp;direction=ASC' class="btn btn-link"><i class="bi bi-sort-up-alt"></i></a><?php echo (defined('ADMIN_ORD_SHIPPING_TYPE') ? constant('ADMIN_ORD_SHIPPING_TYPE') : null);?>
<a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=shipping_type&amp;direction=DESC' class="btn btn-link"><i class="bi bi-sort-down"></i></a></th>
                    <th class="text-nowrap text-center"><a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=payment_type&amp;direction=ASC' class="btn btn-link"><i class="bi bi-sort-up-alt"></i></a><?php echo (defined('ADMIN_ORD_PAYMENT_TYPE') ? constant('ADMIN_ORD_PAYMENT_TYPE') : null);?>
<a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=payment_type&amp;direction=DESC' class="btn btn-link"><i class="bi bi-sort-down"></i></a></th>
                    <th class="text-nowrap text-center"><a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=order_amount&amp;direction=ASC' class="btn btn-link"><i class="bi bi-sort-up-alt"></i></a><?php echo (defined('TABLE_ORDER_TOTAL') ? constant('TABLE_ORDER_TOTAL') : null);?>
<a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=order_amount&amp;direction=DESC' class="btn btn-link"><i class="bi bi-sort-down"></i></a></th>
                    <th class="text-nowrap text-center"><a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=statusID&amp;direction=ASC' class="btn btn-link"><i class="bi bi-sort-up-alt"></i></a><?php echo (defined('ADMIN_ORDER_STATUS_NAME') ? constant('ADMIN_ORDER_STATUS_NAME') : null);?>
<a href='<?php echo $_smarty_tpl->tpl_vars['urlToSort']->value;?>
&amp;sort=statusID&amp;direction=DESC' class="btn btn-link"><i class="bi bi-sort-down"></i></a></th>
                                                        </tr>
            </thead>
            <tbody>
                <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr class="table-group-divider">
                    <td class="text-end">
                        <div class="form-check order_chk">
                            <input type="checkbox" id="ordsel_<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
" name="ordsel_<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
" class="form-check-input" data-orderID="<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
">
                            <label class="form-check-label text-muted text-end" for="ordsel_<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
" data-orderID="<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
">#<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>

                            </label>
                        </div>
                    </td>
                    <td class="text-start">
                        <div class="btn-group btn-group-sm align-self-center" role="group" aria-label="Small button group">
                            <?php if (!($_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'] == "2" || $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'] == "3")) {?>                              <a class="btn btn-outline-secondary btn-sm" href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&amp;sub=orders&amp;orders_detailed=yes&amp;read_only=yes&amp;orderID=<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
&amp;urlToReturn=<?php echo $_smarty_tpl->tpl_vars['urlToReturn']->value;?>
' title="<?php echo (defined('ADMIN_ORDER_NAMEN2') ? constant('ADMIN_ORDER_NAMEN2') : null);?>
&nbsp;&nbsp;#&nbsp;<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
"><i class="bi bi-eye-fill"></i></a>
                            <?php } else { ?>
                            <a class="btn btn-outline-secondary btn-sm" href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&amp;sub=orders&amp;orders_detailed=yes&amp;orderID=<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
&amp;urlToReturn=<?php echo $_smarty_tpl->tpl_vars['urlToReturn']->value;?>
' title="Редактировать <?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
"><i class="bi bi-pencil-square text-dark"></i></a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'] != "6") {?>
                            <button onclick="document.getElementById('ant').name = 'delete_single_order'; confirmDelete( '<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
', '<?php echo (defined('QUESTION_DELETE_CONFIRMATION') ? constant('QUESTION_DELETE_CONFIRMATION') : null);?>
 заказ #<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderID'];?>
 от <?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_time'];?>
', '<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&amp;sub=orders&amp;urlToReturn=<?php echo $_smarty_tpl->tpl_vars['urlToReturn']->value;?>
&amp;delete_single_order=yes&amp;killID='); return false;" class="btn btn-danger btn-sm" title="<?php echo (defined('DELETE_BUTTON') ? constant('DELETE_BUTTON') : null);?>
"><i class="bi bi-trash"></i></button>
                            <?php }?>
                        </div>
                    </td>
                    <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_time'];?>
</td>
                    <td class="text-start"><?php if ($_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shipping_type']) {
echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shipping_type'];
} else { ?>---<?php }?></td>
                    <td class="text-start"><?php if ($_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_type']) {
echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_type'];
} else { ?>---<?php }?></td>
                    <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_amount'];?>
</td>
                    <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OrderStatus'];?>
</td>
                                    </tr>
                <?php
}
}
?>
            </tbody>
            <caption>Показано <?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['orders']->value);?>
 / <?php echo $_smarty_tpl->tpl_vars['ordersCount']->value;?>
 заказов</caption>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['navigator']->value) {?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php echo $_smarty_tpl->tpl_vars['navigator']->value;?>

            </ul>
        </nav>
        <?php }?>
    </div>
</form> <?php } else { ?>
<div class="m-5 p-5 text-bg-danger">
    <h2>Нет заказов</h2>
</div>
<?php }
}
}
