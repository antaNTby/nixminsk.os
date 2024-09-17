<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:25:32
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\apps\Currency\appCurrency.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604f13c72f041_15930870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a47329728ba65459ab9c6accbd95c079dcff2fb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\apps\\Currency\\appCurrency.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604f13c72f041_15930870 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive bg-dark bg-opacity-25 p-1 shadow-lg mb-3">
    <table id="CurrencyTable" class="table table-dark table-sm table-borderles align-top mb-0 pt-0">
        <tbody>
            <tr>
                <th>
                    <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['hasVATIncluded'] == 0) {?>
                    <label class="" for="resultCurrencyValue">Валюта, курс БЕЗ НДС</label>
                    <input type="text" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="resultCurrencyValue" id="resultCurrencyValue" class="form-control-plaintext form-control-lg text-center d-inline text-bg-success mx-3" style="max-width: 6em; width:6em;" value="<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyRate']);?>
" readonly="readonly">
                    <label class="" for="resultCurrencyValueWithVAT">Валюта, курс с НДС</label>
                    <input type="text" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="resultCurrencyValueWithVAT" id="resultCurrencyValueWithVAT" class="form-control-plaintext form-control-lg text-center d-inline text-bg-success mx-3" style="max-width: 6em; width:6em;" value="<?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyRate']*($_smarty_tpl->tpl_vars['MyOrderContent']->value['VAT_Rate']+100)/100));?>
" readonly="readonly">
                    <?php } else { ?>
                    <label class="" for="resultCurrencyValue">Валюта, курс БЕЗ НДС</label>
                    <input type="text" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="resultCurrencyValue" id="resultCurrencyValue" class="form-control-plaintext form-control-lg text-center d-inline text-bg-success mx-3" style="max-width: 6em; width:6em;" value="<?php echo invoiceUSDformat(($_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyRate']/($_smarty_tpl->tpl_vars['MyOrderContent']->value['VAT_Rate']+100)*100));?>
">
                    <label class="" for="resultCurrencyValueWithVAT">Валюта, курс с НДС</label>
                    <input type="text" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="resultCurrencyValueWithVAT" id="resultCurrencyValueWithVAT" class="form-control-plaintext form-control-lg text-center d-inline text-bg-success mx-3" style="max-width: 6em; width:6em;" value="<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyRate']);?>
">
                    <?php }?>
                </th>
                <td>
                    <select type="text" data-control="selectCurrency" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="selectCurrency" id="selectCurrency" class="form-select form-select-lg text-center d-inline">
                        <option disabled>--- Валюта на сайте ( на сегодняшний день) ---</option>
                        <?php
$__section_d_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['MyCurrencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_6_total = $__section_d_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_6_total !== 0) {
for ($__section_d_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_6_iteration <= $__section_d_6_total; $__section_d_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'] == $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['currency_iso_3']) {?>
                        <?php $_smarty_tpl->_assignInScope('attrSelected', '');?>
                        <?php $_smarty_tpl->_assignInScope('check_mark', ">");?>
                        <?php $_smarty_tpl->_assignInScope('selectedCurrencyCID', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID']);?>
                        <?php $_smarty_tpl->_assignInScope('currencyName', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name']);?>
                        <?php $_smarty_tpl->_assignInScope('orderHasVATIncluded', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['hasVATIncluded']);?>
                        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('attrSelected', '');?>
                        <?php $_smarty_tpl->_assignInScope('check_mark', '');?>
                        <?php }?>
                        <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] == '4') {?>                         <?php $_smarty_tpl->_assignInScope('attrSelected', " selected='selected'");?>
                        <?php $_smarty_tpl->_assignInScope('check_mark', ">");?>
                        <?php $_smarty_tpl->_assignInScope('selectedCurrencyCID', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID']);?>
                        <?php $_smarty_tpl->_assignInScope('currencyName', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name']);?>
                        <?php $_smarty_tpl->_assignInScope('orderHasVATIncluded', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['hasVATIncluded']);?>
                        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('attrSelected', '');?>
                        <?php $_smarty_tpl->_assignInScope('check_mark', '');?>
                        <?php $_smarty_tpl->_assignInScope('selectedCurrencyCID', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID']);?>
                        <?php $_smarty_tpl->_assignInScope('currencyName', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name']);?>
                        <?php $_smarty_tpl->_assignInScope('orderHasVATIncluded', $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['hasVATIncluded']);?>
                        <?php }?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'];?>
" data-Name="<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];?>
" data-currency-value="<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['currency_value']);?>
" data-currency-iso3="<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['currency_iso_3'];?>
" data-currency-precision="<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['roundval'];?>
" data-has-vat="<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['hasVATIncluded'];?>
" <?php echo $_smarty_tpl->tpl_vars['attrSelected']->value;?>
>                            "<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];?>
,<?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['code'];?>
" &nbsp;&nbsp;&nbsp;1:<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['currency_value']);?>
 <?php echo $_smarty_tpl->tpl_vars['MyCurrencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['currency_iso_3'];?>
 &nbsp;&nbsp;&nbsp;<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>

                        </option>
                        <?php
}
}
?>
                        <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('attrSelected', " selected='selected'");?>
                        <?php $_smarty_tpl->_assignInScope('check_mark', ">>");?>
                        <option disabled>--- Валюта заказа ( на день оформления) ---</option>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['selectedCurrencyCID']->value;?>
" data-Name="<?php echo $_smarty_tpl->tpl_vars['currencyName']->value;?>
" data-currency-value="<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyValue']);?>
" data-currency-iso3="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'];?>
" data-currency-precision="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyRound'];?>
" data-has-vat="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['hasVATIncluded'];?>
" <?php echo $_smarty_tpl->tpl_vars['attrSelected']->value;?>
>                            "<?php echo $_smarty_tpl->tpl_vars['currencyName']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'];?>
" &nbsp;&nbsp;&nbsp;1:<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyValue']);?>
 <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'];?>
 &nbsp;&nbsp;&nbsp;Заказ#<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>

                        </option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="hasVATIncluded" <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value['hasVATIncluded']) {?> checked="onLoad" <?php }?>> <label class="form-check-label" for="hasVATIncluded">НДС УЖЕ ВКЛЮЧЕН (!) В КУРС ВАЛЮТЫ</label>
                    </div>
                </td>
                <td class="d-flex justify-content-end">
                    <div class="input-group">
                        <label class="input-group-text" for="targetCurrencyRate"><span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></label>
                        <input type="text" data-control="targetCurrencyRate" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="targetCurrencyRate" id="targetCurrencyRate" class="form-control form-control-lg  text-end d-inline" style="max-width: 6em; width:6em" value="<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyRate']);?>
">
                                            </div>
                    <div class="form-text w-100">Валюта заказа:<br> "<?php echo $_smarty_tpl->tpl_vars['currencyName']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'];?>
" &nbsp;1:<?php echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyValue']);?>
 <?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderCurrencyCode'];?>
</div>
                </td>
            </tr>
            <tr>
                <th>Ставка НДС, %</th>
                <td>
                    <div class="input-group">
                        <input type="text" data-control="VAT_Rate" <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value) {?>data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" <?php }?>name="VAT_Rate" id="VAT_Rate" class="form-control text-end d-inline" style="max-width: 6em; width:6em" value="<?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value) {
echo invoiceUSDformat($_smarty_tpl->tpl_vars['MyOrderContent']->value['VAT_Rate']);
} else {
echo invoiceUSDformat((defined('DEFAULT_VAT_RATE') ? constant('DEFAULT_VAT_RATE') : null));
}?>" disabled>
                        <span class="input-group-text"><i class="bi bi-percent"></i></span>
                    </div>
                </td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['MyOrderContent']->value) {?>
            <tr class="table-light">

                <?php $_smarty_tpl->_assignInScope('discountPercent', floatval($_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['discountPercent']));?>
                <td title="Скидка-уменьшение цены / Наценка-увеличение цены">
                    <div class="d-flex justify-content-center">
                        <div class="form-text">Скидка или наценка в %</div>
                        <div class="input-group w-25 px-1">
                             <button class="btn btn-outline-danger" type="button" role="button" onclick="onResetClick('input#discountPercent')"><i class="bi bi-x-lg"></i></button>
                            <input type="text" data-control="discountPercent" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="discountPercent" id="discountPercent" class="form-control text-end d-inline" value="<?php echo invoiceBYformat(abs($_smarty_tpl->tpl_vars['discountPercent']->value));?>
">
                            <span class="input-group-text"><i class="bi bi-percent"></i></span>
                        </div>
                        <div class="px-1">
                            <input type="radio" class="btn-check" name="options-discountPercent" id="danger-discountPercent" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['discountPercent']->value <= 0) {?>checked<?php }?>>
                            <label class="btn btn-outline-danger px-1" for="danger-discountPercent">НАЦЕНКА,%</label>
                                                    <input type="radio" class="btn-check" name="options-discountPercent" id="success-discountPercent" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['discountPercent']->value > 0) {?>checked<?php }?>>
                            <label class="btn btn-outline-primary px-1" for="success-discountPercent">СКИДКА,%</label>
                        </div>
                    </div>
                </td>

                <?php $_smarty_tpl->_assignInScope('discountValue', floatval($_smarty_tpl->tpl_vars['MyOrderContent']->value['Discount']['discountValue']));?>

                <td title="Скидка-уменьшение цены / Наценка-увеличение цены. Равномерно распределяем по заказу ">
                    <div class="d-flex justify-content-center">
                        <div class="form-text">Доставка в $</div>
                        <div class="input-group w-25 px-1">
                            <button class="btn btn-outline-danger" type="button" role="button" onclick="onResetClick('input#discountValue')"><i class="bi bi-x-lg"></i></button>
                            <input type="text" data-control="discountValue" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" name="discountValue" id="discountValue" class="form-control text-end d-inline" value="<?php if ($_smarty_tpl->tpl_vars['discountValue']->value != 0) {
echo -invoiceBYformat($_smarty_tpl->tpl_vars['discountValue']->value);
} else { ?>0<?php }?>">
                            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>

                        </div>
                        <div class="px-1">
                            <input type="radio" class="btn-check" name="options-discountValue" id="danger-discountValue" autocomplete="off" <?php if (-$_smarty_tpl->tpl_vars['discountValue']->value < 0) {?>checked<?php }?>>
                            <label class="btn btn-outline-danger px-1" for="danger-discountValue">MINUS, $</label>
                                                    <input type="radio" class="btn-check" name="options-discountValue" id="success-discountValue" autocomplete="off" <?php if (-$_smarty_tpl->tpl_vars['discountValue']->value >= 0) {?>checked<?php }?>>
                            <label class="btn btn-outline-primary px-1" for="success-discountValue">PLUS, $</label>
                        </div>
                    </div>
                </td>

            </tr>
            <?php }?>
        </tbody>
    </table>
</div><?php }
}
