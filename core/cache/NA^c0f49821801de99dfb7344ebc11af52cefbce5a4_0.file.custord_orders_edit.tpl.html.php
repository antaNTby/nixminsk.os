<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:25:32
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\custord_orders_edit.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604f13c6f6c97_96372259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0f49821801de99dfb7344ebc11af52cefbce5a4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_orders_edit.tpl.html',
      1 => 1699021881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/apps/Currency/appCurrency.tpl.html' => 1,
    'file:admin/apps/OrderContent/appAddProduct.tpl.html' => 1,
    'file:admin/apps/OrderContent/appOrderContent.tpl.html' => 1,
    'file:admin/apps/InvoiceSimple/appInvoiceSimple.tpl.html' => 1,
  ),
),false)) {
function content_6604f13c6f6c97_96372259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<input type="hidden" name="thisOrderID" id="thisOrderID" value="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
">
<?php if (($_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) || $_smarty_tpl->tpl_vars['order']->value['status_name'] == "Активный") {?><h3 class="text-dark">Просмотр и редактирование заказа # <?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
 от <?php echo $_smarty_tpl->tpl_vars['order']->value['order_time'];?>
</h3><?php }
if (($_smarty_tpl->tpl_vars['order']->value['statusID'] != 3) || $_smarty_tpl->tpl_vars['order']->value['status_name'] != "Активный") {?><h3 class="text-muted">Просмотр заказа # <?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
 от <?php echo $_smarty_tpl->tpl_vars['order']->value['order_time'];?>
</h3><?php }?>


<ul class="nav nav-underline mb-3" id="myTabOrder" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" aria-current="page" data-bs-toggle="tab" data-bs-target="#order-content-tab-pane" type="button" role="tab" aria-controls="order-content-tab" aria-selected="true">Товарная часть</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#invoice-tab-pane" type="button" role="tab" aria-controls="invoice-tab" aria-selected="false">Счёт на оплату</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab" aria-selected="false">История изменений</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#customer-tab-pane" type="button" role="tab" aria-controls="customer-tab" aria-selected="false">Данные заказчика</a>
    </li>
</ul>

<div class="tab-content" id="myTabOrderContent">


    <div class="w-100 tab-pane fade show active" id="order-content-tab-pane" role="tabpanel" aria-labelledby="order-content-tab" tabindex="0">
                <div id="app_currency">
            <?php $_smarty_tpl->_subTemplateRender("file:admin/apps/Currency/appCurrency.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MyOrderContent'=>$_smarty_tpl->tpl_vars['MyOrderContent']->value,'MyCurrencies'=>$_smarty_tpl->tpl_vars['currencies']->value), 0, false);
?>
        </div>
        <div id="app_add_product">
            <?php $_smarty_tpl->_subTemplateRender("file:admin/apps/OrderContent/appAddProduct.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MyOrderContent'=>$_smarty_tpl->tpl_vars['MyOrderContent']->value,'MyCurrencies'=>$_smarty_tpl->tpl_vars['currencies']->value), 0, false);
?>
        </div>
        <div id="app_order_content">
            <?php $_smarty_tpl->_subTemplateRender("file:admin/apps/OrderContent/appOrderContent.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MyOrderContent'=>$_smarty_tpl->tpl_vars['MyOrderContent']->value), 0, false);
?>
        </div>
    </div>


    <div class="w-100 tab-pane fade" id="invoice-tab-pane" role="tabpanel" aria-labelledby="invoice-tab" tabindex="0">
                <div id="app_invoice_simple">
            <?php $_smarty_tpl->_subTemplateRender("file:admin/apps/InvoiceSimple/appInvoiceSimple.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MyOrderContent'=>$_smarty_tpl->tpl_vars['MyOrderContent']->value,'c'=>$_smarty_tpl->tpl_vars['c']->value,'order'=>$_smarty_tpl->tpl_vars['order']->value,'invoice'=>$_smarty_tpl->tpl_vars['invoice']->value), 0, false);
?>
        </div>
    </div>


    <div class="w-100 tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
                    <div class="alert alert-light alert-dismissible fade show" role="alert" id="myStatusPanel">
                <h4>Комментарии и История изменения статуса заказа</h4>
                <div class="input-group mb-2">
                    <div class="form-floating">
                        <textarea class="form-control" name="status_comment" id="status_comment_n" placeholder="Leave a comment here" style="height: 80px"></textarea>
                        <label for="status_comment_n">Добавьте комментарий к заказу при изменении статуса заказа</label>
                    </div>
                    <button class="btn btn-outline-secondary btn-lg" data-action="Comment" data-app="OrderContent" data-operation="AddComment" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" title="Добавить комментарий"><i class="bi bi-sticky"></i></button>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['customer_email'] && $_smarty_tpl->tpl_vars['order']->value['customer_email'] != "-") {?>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" name="notify_customer" id="id_notify_customer" value="1">
                    <label class="form-check-label text-danger" for="id_notify_customer"><?php echo (defined('ADMIN_STRING_NOTIFY_CUSTOMER') ? constant('ADMIN_STRING_NOTIFY_CUSTOMER') : null);?>
</label>
                </div>
                <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['order_status_report']->value || $_smarty_tpl->tpl_vars['order']->value['order_time']) {?>
        <div class="table-responsive-xl mb-3 overflow-y-scroll" style="max-height: 20vh;">
            <table class="table table-sm table-borderless align-baseline" id="tableComments">
                <caption>История изменений</caption>
                <thead class="table-primary">
                    <tr>
                        <th class="text-start text-nowrap">Время ( по убыванию )</th>
                        <th class="text-start text-wrap">Комментарий админа</th>
                        <th class="text-start text-nowrap w-25">Статус</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order_status_report']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <tr>
                        <th class="text-start text-wrap"><?php echo $_smarty_tpl->tpl_vars['order_status_report']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_change_time'];?>
</th>
                        <td class="text-start text-wrap"><?php echo $_smarty_tpl->tpl_vars['order_status_report']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_comment'];?>
</td>
                        <td class="text-start text-nowrap w-25"><?php if ($_smarty_tpl->tpl_vars['order_status_report']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_name'] != 'STRING_CANCELED_ORDER_STATUS') {
echo $_smarty_tpl->tpl_vars['order_status_report']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_name'];
} else {
echo (defined('STRING_CANCELED_ORDER_STATUS') ? constant('STRING_CANCELED_ORDER_STATUS') : null);
}?>&nbsp;</td>
                    </tr>
                    <?php
}
}
?>
                    <tr>
                        <th class="text-start text-wrap"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_time'];?>
</th>
                        <td class="text-start text-wrap"><?php echo $_smarty_tpl->tpl_vars['order']->value['admin_comment'];?>
</td>
                        <td class="text-start text-nowrap w-25">Создан</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php }?>


        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    </div>

    <div class="tab-pane fade" id="customer-tab-pane" role="tabpanel" aria-labelledby="customer-tab" tabindex="0">

        <?php if ($_smarty_tpl->tpl_vars['order']->value['customerID'] != "11") {?>
        <div class="mb-4 alert alert-light alert-dismissible fade show" role="alert" id="myOrderContentPanel">
            <h4>Данные заказчика</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <?php echo (defined('STRING_ORDER_STATUS') ? constant('STRING_ORDER_STATUS') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['status_name'];?>
</b>
                </li>
                <li class="list-group-item">
                    <?php echo (defined('TABLE_ORDER_TIME') ? constant('TABLE_ORDER_TIME') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['order_time'];?>
</b>
                </li>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_IP_ADDRESS') ? constant('ADMIN_IP_ADDRESS') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['customer_ip'];?>
</b>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['customer_email']) {?>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_ORDER_EMAIL_CUST') ? constant('ADMIN_ORDER_EMAIL_CUST') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['customer_email'];?>
</b>
                </li>
                <?php }?>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_CUSTOMER_FIRST_NAME') ? constant('ADMIN_CUSTOMER_FIRST_NAME') : null);?>
:
                    <b> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order']->value['customer_firstname']," <","&lt;");?>
 </b> </li> <li class="list-group-item">
                            <?php echo (defined('ADMIN_CUSTOMER_LAST_NAME') ? constant('ADMIN_CUSTOMER_LAST_NAME') : null);?>
:
                            <b> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order']->value['customer_lastname']," <","&lt;");?>
 </b> </li> <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order']->value['reg_fields_values']) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?> <li class="list-group-item">
                                    <?php echo $_smarty_tpl->tpl_vars['order']->value['reg_fields_values'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_name'];?>
:
                                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['reg_fields_values'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_value'];?>
</b>
                </li>
                <?php
}
}
?>
                <li class="list-group-item">
                    <?php echo (defined('CUSTOMER_ADRESL') ? constant('CUSTOMER_ADRESL') : null);?>
:
                    <b><?php if ($_smarty_tpl->tpl_vars['order']->value['shipping_address'] != '') {
echo $_smarty_tpl->tpl_vars['order']->value['shipping_address'];
}
if ($_smarty_tpl->tpl_vars['order']->value['shipping_city'] != '') {?>, <?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_city'];
}
if ($_smarty_tpl->tpl_vars['order']->value['shipping_state'] != '') {?>, <?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_state'];
}
if ($_smarty_tpl->tpl_vars['order']->value['shipping_country'] != '') {?>, <?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_country'];
}?></b>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['shipping_type']) {?>
                <li class="list-group-item">
                    <?php echo (defined('STRING_SHIPPING_TYPE2') ? constant('STRING_SHIPPING_TYPE2') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_type'];
if ($_smarty_tpl->tpl_vars['order']->value['shippingServiceInfo']) {?> (<?php echo $_smarty_tpl->tpl_vars['order']->value['shippingServiceInfo'];?>
)<?php }?></b>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['payment_type']) {?>
                <li class="list-group-item">
                    <?php echo (defined('STRING_PAYMENT_TYPE2') ? constant('STRING_PAYMENT_TYPE2') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['payment_type'];?>
</b>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['cc_number'] || $_smarty_tpl->tpl_vars['order']->value['cc_holdername'] || $_smarty_tpl->tpl_vars['order']->value['cc_expires'] || $_smarty_tpl->tpl_vars['order']->value['cc_expires']) {?>
                <?php if ($_smarty_tpl->tpl_vars['https_connection_flag']->value) {?>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_CC_NUMBER') ? constant('ADMIN_CC_NUMBER') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['cc_number'];?>
</b>
                </li>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_CC_HOLDER_NAME') ? constant('ADMIN_CC_HOLDER_NAME') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['cc_holdername'];?>
</b>
                </li>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_CC_EXPIRES') ? constant('ADMIN_CC_EXPIRES') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['cc_expires'];?>
</b>
                </li>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_CC_CVV') ? constant('ADMIN_CC_CVV') : null);?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['order']->value['cc_cvv'];?>
</b>
                </li>
                <?php } else { ?>
                <li class="list-group-item">
                    <?php echo (defined('ADMIN_INFO_CAN_BE_SHOWN_WHEN_HTTPS_IS_USED') ? constant('ADMIN_INFO_CAN_BE_SHOWN_WHEN_HTTPS_IS_USED') : null);?>

                </li>
                <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['customers_comment']) {?>
                <li class="list-group-item">
                    <?php echo (defined('TABLE_ORDER_COMMENTS') ? constant('TABLE_ORDER_COMMENTS') : null);?>
<b><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order']->value['customers_comment']," <","&lt;");?>
</b> </li> <?php }?> </ul> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['orderedCarts']->value) {?>
        <div class="mb-4 alert alert-light alert-dismissible fade show" role="alert" id="myOrderContentPanel">
            <h4>Заказанные товары, так как видел их клиент</h4>
            <div class="table-responsive-xl">
                <table class="table table-hover table-bordered table-sm align-middle">
                    <caption>Заказанные товары</caption>
                    <thead class="table-primary">
                        <tr>
                            <td colspan=4>
                                Курс $1 = <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyValue'];
echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'];?>
&nbsp;|&nbsp;
                                Скидка/Надбавка,%:&nbsp;<?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['discountPercent'] <> 0) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['shippingCost'];?>
=<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['orderDiscountPercent'];?>
=<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['discountPercent'];?>
%
                                    <?php } else { ?>0<?php }?>&nbsp;|&nbsp;
                                    СтоимостьДоставки/Скидка:&nbsp;
                                    <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['shippingCost'] <> 0) {?>
                                        $<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['shippingCost'];?>
=<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['DiscountAndShipping']['outShippingCost'];
echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>

                                        <?php } else { ?>0<?php }?>&nbsp;|&nbsp;[<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['maximalShippingDelayValue'];?>
]&nbsp;|&nbsp;
                                        orderCurrencyRound : <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyRound'];?>

                            </td>
                        </tr>
                        <tr>
                            <th class="text-start"><?php echo (defined('ADMIN_PRODUCT_NAME') ? constant('ADMIN_PRODUCT_NAME') : null);?>
</th>
                            <th class="text-end text-wrap"><?php echo (defined('TABLE_PRODUCT_QUANTITY') ? constant('TABLE_PRODUCT_QUANTITY') : null);?>
</th>
                            <th class="text-end text-wrap"><?php echo (defined('CURRENT_PRICE') ? constant('CURRENT_PRICE') : null);?>
</th>
                            <th class="text-end text-wrap"><?php echo (defined('TABLE_PRODUCT_COST_WITHOUT_TAX') ? constant('TABLE_PRODUCT_COST_WITHOUT_TAX') : null);?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orderedCarts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <tr>
                            <td class="text-start text-wrap"><?php if ($_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pr_item']) {?><a href="index.php?productID=<?php echo $_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pr_item'];?>
"><?php echo $_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];
}?></td>
                            <td class="text-end text-nowrap"><?php echo $_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Quantity'];?>
</td>
                            <td class="text-end text-nowrap"><?php echo $_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PriceOne'];?>
</td>
                            <td class="text-end text-nowrap"><?php echo $_smarty_tpl->tpl_vars['orderedCarts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PriceToShow'];?>
</td>
                        </tr>
                        <?php
}
}
?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive-xl mb-3">
                <table class="table table-borderless table-sm align-middle">
                    <tbody class="table-group-divider">
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['order_discount'] != 0 || $_smarty_tpl->tpl_vars['order']->value['shipping_cost'] != 0) {?>
                        <tr>
                            <td class="text-end text-wrap"><?php echo (defined('STRING_PRED_TOTAL') ? constant('STRING_PRED_TOTAL') : null);?>
:</td>
                            <th class="text-end text-wrap"><?php echo $_smarty_tpl->tpl_vars['order']->value['clear_total_priceToShow'];?>
</th>
                        </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['order_discount'] != 0) {?>
                        <tr>
                            <td class="text-end text-nowrap"><?php echo (defined('ADMIN_DISCOUNT') ? constant('ADMIN_DISCOUNT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['order_discount'];?>
%:</td>
                            <th class="text-end text-nowrap"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_discount_ToShow'];?>
</th>
                        </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['shipping_cost'] != 0) {?>
                        <tr>
                            <td class="text-end text-nowrap"><?php echo (defined('ADMIN_SHIPPING_COST') ? constant('ADMIN_SHIPPING_COST') : null);?>
:</td>
                            <th class="text-end text-nowrap"><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_costToShow'];?>
</th>
                        </tr>
                        <?php }?>
                        <tr>
                            <td class="text-end text-nowrap"><span class="lead"><?php echo (defined('TABLE_TOTAL') ? constant('TABLE_TOTAL') : null);?>
:</span></td>
                            <th class="text-end text-nowrap"><span class="lead fw-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_amountToShow'];?>
</span></th>
                        </tr>
                        <tr>
                            <td class="text-end text-nowrap"><span class="">без учета доставки и скидки <?php echo (defined('TABLE_TOTAL') ? constant('TABLE_TOTAL') : null);?>
:</span></td>
                            <th class="text-end text-nowrap"><span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_amountToShow_fromOrder'];?>
</span></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } else { ?>
        <div class="m-5 p-5 text-bg-danger">
            <h2><?php echo (defined('ADMIN_NO_RECORD_FOUND') ? constant('ADMIN_NO_RECORD_FOUND') : null);?>
</h2>
        </div>
        <?php }?>

    </div>


</div>


<div class="mb-4 alert alert-light alert-dismissible fade show" role="alert" id="MainForm2Panel">

        <form name="MainForm2" method="POST" id="MainForm2" action="">

            <input name="none" value="" type="hidden" id="resultat">
            <input type="hidden" name="orders_detailed" value="yes">
            <?php if (($_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) || $_smarty_tpl->tpl_vars['order']->value['status_name'] == "Активный") {?>
            <input type="hidden" name="order_is_active" value="yes">
            <?php }?>
            <div class="mb-4 alert alert-dark" role="alert" id="OrderStatusPanel">
                <h4>Cтатус заказа</h4>
                <div class="input-group flex-nowrap mb-0">
                    <label class="input-group-text" for="status">Статус</label>
                    <select form="MainForm2" class="form-select" name="status" id="status">
                        <option value="-1"><?php echo (defined('ADMIN_PROMPT_TO_SELECT') ? constant('ADMIN_PROMPT_TO_SELECT') : null);?>
</option>
                        <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order_statuses']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
' <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID']) {?> selected<?php }?>> <?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_name'];?>
 </option> <?php
}
}
?> </select> <button class="btn<?php if (($_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) || $_smarty_tpl->tpl_vars['order']->value['status_name'] == "Активный") {?> btn-success<?php } else { ?> btn-outline-secondary<?php }?>" type="button" onclick="document.getElementById('resultat').name = 'set_status'; if(document.getElementById('status').value == '-1') return false; document.getElementById('MainForm2').submit(); return false;" title="<?php echo (defined('ADMIN_CHANGE_STATUS') ? constant('ADMIN_CHANGE_STATUS') : null);?>
"><?php echo (defined('ADMIN_STATUS_LINK') ? constant('ADMIN_STATUS_LINK') : null);?>
 <i class="bi bi-shield-exclamation"></i></button>
                </div>
                <div class="form-text mt-0 mb-2">
                    <?php echo (defined('ADMIN_DELORD_NOTICE') ? constant('ADMIN_DELORD_NOTICE') : null);?>

                </div>
            </div>

        </form>     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>


<?php }
}
