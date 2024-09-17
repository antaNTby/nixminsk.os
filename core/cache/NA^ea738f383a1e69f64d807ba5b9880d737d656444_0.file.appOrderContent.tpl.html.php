<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:25:32
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\apps\OrderContent\appOrderContent.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604f13c81d4f4_43897118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea738f383a1e69f64d807ba5b9880d737d656444' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\apps\\OrderContent\\appOrderContent.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604f13c81d4f4_43897118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('oc', $_smarty_tpl->tpl_vars['MyOrderContent']->value['OrderedCarts']);?>
<div class="table-responsive bg-secondary bg-opacity-25 p-2 mb-4 shadow-lg">

    <table id="OrderContentTable" class="table table-sm table-bordered align-top mb-0 pt-0">
                <thead class="table-primary">
            <tr class="collapse multi-collapse js-collapse-old">
                <td colspan=10>
                    Курс $1 = <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['hasVATIncluded'] == 0) {
echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyRate'];?>
+<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['VAT_Rate'];?>
%=<?php }
echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['outCurrencyRate'];
echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
&nbsp;|&nbsp;
                    Скидка/Надбавка,%:&nbsp;<?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['discountPercent'] <> 0) {?>
                        <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['discountPercent'];?>
%
                        <?php } else { ?>0<?php }?>&nbsp;|&nbsp;
                        СтоимостьДоставки/Скидка:&nbsp;
                        <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['discountValue'] <> 0) {?>$<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['discountValue'];?>
=<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['outDiscountValue'];
echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];
} else { ?>0<?php }?>&nbsp;|&nbsp;
                            Максимальная задержка поставки:&nbsp;
                            <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['maximalShippingDelayString'];?>
&nbsp;[<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['maximalShippingDelayValue'];?>
]
                </td>
            </tr>
            <tr>
                <th class="text-center" rowspan=2>#</th>
                <th colspan=8 class="text-center">
                    <?php echo (defined('TABLE_PRODUCT_NAME') ? constant('TABLE_PRODUCT_NAME') : null);?>

                </th>
                <th class="text-center text-nowrap bg-secondary bg-opacity-25">
                    <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-success<?php } else { ?> btn-outline-secondary<?php }?> btn-lg" title="Сохранить учитывая скидки"<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?>  data-action="Save" data-app="OrderContent" data-operation="SaveSimplePrices" <?php }?> data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
"<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] != 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] != 3) {?> disabled<?php }?>> <i class="bi bi-save2"></i></button>
                </th>
            </tr>
            <tr>
                                <th class="text-center"><?php echo (defined('TABLE_PRODUCT_QUANTITY') ? constant('TABLE_PRODUCT_QUANTITY') : null);?>
</th>
                <td class="text-end">Цена,у.е (БЕЗ доставки)<br>+доставка,у.е </td>
                <td class="text-center">Цена с Доставкой,у.е <br><sup>цена+доставка=Цена с Доставкой</sup></td>
                <td class="text-center">точн.Цена,<span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></td>
                <th class="text-center">Цена,<span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></th>
                <th class="text-center">Стоимость,<span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></th>
                <th class="text-center">НДС,<span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></th>
                <th class="text-center">Всего,<span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></th>
                                <th class="text-center text-nowrap"><i class="bi bi-terminal-fill"></i></th>
            </tr>
        </thead>
        <tbody class="bg-body">
            <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['oc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_7_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <td colspan=10 class="bg-secondary bg-opacity-25 lh-1"></td>
            </tr>
            <tr>
                <th class="text-center text-nowrap" title="id:<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
 #<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code_regex'];?>
">-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
-</th>
                <td colspan=8 class="align-middle text-bg-light bg-opacity-75">
                                        <span class="content" data-control="Name" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</span>
                                            

                </td>
                <td class="text-center">                     <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?>
                    <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalOrderContentItem" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
"><i class="bi bi-pencil-square"></i></button>
                    <?php }?>
                </td>
            </tr>
            <tr id="ocrow_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
">
                <td class="text-start">
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?>
                    <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalOrderContentItem" data-control="itemPriority" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
">
                        <span class="px-1 content" data-control="itemPriority" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" title="Позиция в таблице: чем больше - тем выше"><?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemPriority'];?>
</span>
                    </button>
                    <?php }?>
                    <button class="btn btn-light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls=".js-collapse-old .js-collapse-vat"><i class="bi bi-info-circle"></i></button>
                    <?php if ($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']) {?>
                    <a class="btn-link adminlink" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?productID=<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
&amp;eaction=prod" title="<?php echo (defined('STRING_EDITPR') ? constant('STRING_EDITPR') : null);?>
"><i class="bi bi-apple opacity-25"></i></a>
                    <?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null)) {?>
                    <a class="btn-link" href="product_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
.html" target="_blank" title="<?php echo (defined('ADMIN_BACK_TO_SHOP') ? constant('ADMIN_BACK_TO_SHOP') : null);?>
"><i class="bi bi-house"></i></a>
                    <?php } else { ?>
                    <a class="btn-link" href="index.php?productID=<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
" target="_blank" title="<?php echo (defined('ADMIN_BACK_TO_SHOP') ? constant('ADMIN_BACK_TO_SHOP') : null);?>
"><i class="bi bi-house"></i></a>
                    <?php }?>
                    <?php }?>
                </td>
                <td class="text-end">
                    <div class="input-group input-group-sm flex-nowrap">
                        <button type="button" class="btn btn-outline-secondary" onclick="_input_minus1('Quantity_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
'); return false">
                            <i class="bi bi-dash"></i>
                        </button>
                        <input type="text" data-control="Quantity" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="Quantity_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="Quantity_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" input-numbers="0" class="form-control form-control-sm text-end text-bg-light bg-opacity-75 d-inline" style="max-width: 50px; width:50px" value="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Quantity'];?>
">
                        <span class="input-group-text text-bg-light bg-opacity-75 content" data-control="itemUnit" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
"><?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemUnit'];?>
</span>
                        <button class="btn btn-outline-secondary" type="button" onclick="_input_plus1('Quantity_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
');  return false">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                    <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old"><?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Quantity'];?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Quantity'] < $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['min_order_amount']) {?> <div class="text-warning text-center"><?php echo (defined('STRING_MIN_ORDER_AMOUNT') ? constant('STRING_MIN_ORDER_AMOUNT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['min_order_amount'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemUnit'];?>

</div><?php }?>
</td>
<td class="text-end">
    <input type="text" data-control="purePrice" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="purePrice_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="purePrice_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" input-numbers="8" class="form-control form-control-sm text-end text-bg-light d-inline" style="max-width: 9em; width:9em" value="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['purePrice'];?>
">
        <input type="text" data-control="shippingPay" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="shippingPay_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="shippingPay_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" input-numbers="8" class="form-control-plaintext fw-lighter form-control-sm pe-2 text-end text-bg-light d-inline text-opacity-50" style="max-width: 9em; width:9em" readonly value="+<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shippingPay'];?>
">
        <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old" data-control="purePrice"><?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['purePrice']));?>
 + <?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shippingPay']));?>
</div>
</td>
<td class="text-end">
    <input type="text" data-control="Price" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="Price_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="Price_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" input-numbers="8" class="form-control form-control-sm text-end text-bg-light d-inline" style="max-width: 9em; width:9em" value="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Price'];?>
">
    <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old" data-control="Price">=<?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Price']));?>
</div>
    <div class="text-danger text-center text-opacity-50 lh-1 collapse multi-collapse js-collapse-vat" data-helpid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
">
        <small class="fs-7" data-help="sub" data-control="Price"><?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Price']*100/120));?>
</small><br>
        <small class="fs-7" data-help="sup" data-control="Price"><?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Price']*120/100));?>
</small>
    </div>
</td>
<td class="text-end">
    <input type="text" data-control="outPrice" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="outPrice_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="outPrice_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" class="form-control form-control-sm text-end text-bg-light bg-opacity-75 d-inline" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outPrice']);?>
">
    <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old" data-control="outPrice"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outPrice']);?>
</div>
    <div class="text-danger text-center text-opacity-50 lh-1 collapse multi-collapse js-collapse-vat" data-helpid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
">
        <small class="fs-7" data-help="sub" data-control="outPrice"><?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outPrice']*100/120));?>
</small><br>
        <small class="fs-7" data-help="sup" data-control="outPrice"><?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outPrice']*120/100));?>
</small>
    </div>
</td>
<td class="text-end">
    <input type="text" name="outPriceFix_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="outPriceFix_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-control="outPriceFix" readonly class="form-control-plaintext fw-lighter form-control-sm text-end px-1 d-inline" style="max-width: 9em; width:9em" value="">
</td>
<td class="text-end"><input type="text" readonly data-control="outCost" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="outCost_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="outCost_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" class="form-control-plaintext fw-lighter form-control-sm text-end px-1 d-inline" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outCost']);?>
"></td>
<td class="text-end"><input type="text" readonly data-control="outVAT_Value" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="outVAT_Value_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="outVAT_Value_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" class="form-control-plaintext fw-lighter form-control-sm text-end px-1 d-inline" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outVAT_Value']);?>
"></td>
<td class="text-end"><input type="text" readonly data-control="outCost_WITH_VAT" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-row-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="outCost_WITH_VAT_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" id="outCost_WITH_VAT_<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" class="form-control-plaintext fw-lighter form-control-sm text-end px-1 d-inline" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['outCost_WITH_VAT']);?>
"></td>
<td class="text-center">
    <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?>
    <button class="btn btn-outline-danger btn-sm" data-app="OrderContent" data-operation="DeleteCartItem" data-action="Delete" data-itemid="<?php echo $_smarty_tpl->tpl_vars['oc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemID'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" title="Удалить"><i class="bi bi-x-lg"></i></button><?php }?>
</td>
</tr>
<?php }} else {
 ?>
<tr style="border-top:none;">
    <td class="text-center">1</td>
    <td class="p-2 text-start name">
        <div class="alert alert-info">
            <strong>в Заказе нет Товаров</strong> можно добавить из панели ... а потом сделаю буфер
        </div>
    </td>
    <td class="text-center">0.00</td>
    <td class="text-end">0.00</td>
    <td class="text-end">0.00</td>
    <td class="text-end">0.00</td>
    <td class="text-end">0.00</td>
    <td class="text-end">0.00</td>
    <td class="text-end">0.00</td>
        </tr>
<?php
}
?>
<tr>
    <td colspan=9 class="bg-secondary bg-opacity-25 lh-1"></td>
</tr>
</tbody>
<tfoot class="table-primary table-group-divider align-top">
    <tr>
        <th colspan=1 class="text-center">
            <input type="text" readonly name="countOrderedCarts" id="countOrderedCarts" class="form-control-plaintext fw-lighter px-2 fw-bold text-end d-inline" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" style="max-width: 9em; width:9em" value="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['countOrderedCarts'];?>
">
        </th>
        <th class="text-center">
            <input type="text" readonly name="totalItemsQuantity" id="totalItemsQuantity" class="form-control-plaintext fw-lighter px-2 fw-bold text-end d-inline" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" style="max-width: 9em; width:9em" value="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalItemsQuantity'];?>
"><br>
            <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalItemsQuantity'];?>
</div>
        </th>
        <th colspan=4 class="text-center pt-2 h2">
            ИТОГО
        </th>
        <th class="text-end">
            <input type="text" readonly name="totalCost_WITHOUT_VAT" id="totalCost_WITHOUT_VAT" class="form-control-plaintext fw-lighter px-2 fw-bold text-end d-inline" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalCost_WITHOUT_VAT']);?>
"><br>
            <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalCost_WITHOUT_VAT']);?>
</div>
        </th>
        <th class="text-end">
            <input type="text" readonly name="totalVAT_Amount" id="totalVAT_Amount" class="form-control-plaintext fw-lighter px-2 fw-bold text-end d-inline" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalVAT_Amount']);?>
"><br>
            <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalVAT_Amount']);?>
</div>
        </th>
        <th class="text-end">
            <input type="text" readonly name="totalCost_WITH_VAT" id="totalCost_WITH_VAT" class="form-control-plaintext fw-lighter px-2 fw-bold text-end d-inline" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" style="max-width: 9em; width:9em" value="<?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalCost_WITH_VAT']);?>
"><br>
            <div class="text-muted text-center fs-7 collapse multi-collapse js-collapse-old"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalCost_WITH_VAT']);?>
</div>
        </th>
        <td class="text-center text-nowrap bg-secondary bg-opacity-25">
            <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-success<?php } else { ?> btn-outline-secondary<?php }?> btn-lg" title="<?php echo (defined('SAVE_BUTTON') ? constant('SAVE_BUTTON') : null);?>
"<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> data-action="Save" data-app="OrderContent" data-operation="SavePrices" <?php }?> data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
"<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] != 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] != 3) {?> disabled<?php }?>> <i class="bi bi-save"></i></button>
        </td>
    </tr>
</tfoot>
</table>


<ul class="list-group list-group-flush">
    <li class="list-group-item">Общая стоимость без НДС, <span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span> : <span class="fw-bolder" id="totalCost_WITHOUT_VAT"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalCost_WITHOUT_VAT']);?>
</span> (<span class="fw-lighter" id="totalCost_WITHOUT_VAT_STRING"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalStrings']['totalCost_WITHOUT_VAT_STRING'];?>
</span>)</li>
    <li class="list-group-item">Общая сумма НДС, <span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span> : <span class="fw-bolder" id="totalVAT_Amount"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalVAT_Amount']);?>
</span> (<span class="fw-lighter" id="totalVAT_Amount_STRING"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalStrings']['total_VAT_Amount_STRING'];?>
</span>)</li>
    <li class="list-group-item">Полная стоимость с НДС, <span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span> : <span class="fw-bolder" id="totalCost_WITH_VAT"><?php echo invoiceBYformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalCost_WITH_VAT']);?>
</span> (<span class="fw-lighter" id="totalCost_WITH_VAT_STRING"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalStrings']['totalCost_WITH_VAT_STRING'];?>
</span>)</li>
    <li class="list-group-item">Всего товарных позиций: <span class="fw-bolder" id="countOrderedCarts"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['countOrderedCarts'];?>
</span> (<span class="fw-lighter" id="countOrderedCarts_STRING"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalStrings']['countOrderedCarts_STRING'];?>
</span>)</li>
    <li class="list-group-item">Всего штук товара: <span class="fw-bolder" id="totalItemsQuantity"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalItemsQuantity'];?>
</span> (<span class="fw-lighter" id="totalItemsQuantity_STRING"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['Total']['totalStrings']['totalItemsQuantity_STRING'];?>
</span>)</li>
</ul>
</div>
<div id="modalOrderContentItem" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Наименование, Приоритет и Единица измерения <small id="modal_itemID"></small></h4>
                <button type="button" name="cancel_modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="modalItemID" id="modalItemID" value="">
                <input type="hidden" name="modalOrderID" id="modalOrderID" value="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
">
                <div class="m-1">
                    <label for="modalItemName">Наименование</label>
                    <textarea class="form-control" name="modalItemName" id="modalItemName" title="Новое Наименование"></textarea>
                    <textarea class="form-control" id="modalOldName" readonly style="background-color: whitesmoke!important; color:dimgray!important; margin-top: 10px;" title="Старое Наименование"></textarea>
                </div>
                <div class="m-1">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="modalTargetOrderID">Перенести в заказ</label>
                            <input type="number" class="form-control" name="modalTargetOrderID" id="modalTargetOrderID" value="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" step="1" title="Номер заказа для переноса товара в другой заказ" data-toggle="tooltip">
                        </div>
                        <div class="col-sm-4">
                            <label for="modalItemUnit">Единица измерения</label>
                            <input type="text" class="form-control" name="modalItemUnit" id="modalItemUnit" list="itemUnitsList">
                            <datalist id="itemUnitsList">
                                <option>шт</option>
                                <option>м</option>
                                <option>бухта</option>
                                <option>уп.</option>
                                <option>кор.</option>
                                <option>комплект</option>
                            </datalist>
                        </div>
                        <div class="col-sm-4">
                            <label for="modaItemPriority">Приоритет</label>
                            <input type="number" class="form-control" name="modaItemPriority" id="modaItemPriority" value="<?php echo $_smarty_tpl->tpl_vars['itemPriority']->value;?>
" step="1" maxlength="3" size="6" style="width:100%" title="Приоритет (чем больше тем выше в таблице)" data-toggle="tooltip">
                        </div>
                    </div>
                </div>
                <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button name="modaSave" type="button" class="btn btn-success" data-app="OrderContent" data-operation="ChangeItemProperties">Сохранить</button>
                    <button type="button" name="modaCancel" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
