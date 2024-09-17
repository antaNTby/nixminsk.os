<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\apps\InvoiceSimple\appInvoiceSimple.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f976ee362_50762800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8246923b1b0e25d7c53a9585796a681201e85a' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\apps\\InvoiceSimple\\appInvoiceSimple.tpl.html',
      1 => 1711713073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f976ee362_50762800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
if (($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2) || ($_smarty_tpl->tpl_vars['order']->value['status_name'] == " Новый") || ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) || ($_smarty_tpl->tpl_vars['order']->value['status_name'] == " Активный")) {
$_smarty_tpl->_assignInScope('statusOkFlag', 1);
} else {
$_smarty_tpl->_assignInScope('statusOkFlag', 0);
}?>
<h4> Выставить счет </h4>
<?php echo debug($_smarty_tpl->tpl_vars['invoice']->value);?>

<?php if (!$_smarty_tpl->tpl_vars['invoice']->value['invoice_time']) {
$_smarty_tpl->_assignInScope('invoice_time', $_smarty_tpl->tpl_vars['order']->value['order_time']);
} else {
$_smarty_tpl->_assignInScope('invoice_time', $_smarty_tpl->tpl_vars['invoice']->value['invoice_time']);
}
if (!$_smarty_tpl->tpl_vars['invoice']->value['contract_time']) {
$_smarty_tpl->_assignInScope('contract_time', $_smarty_tpl->tpl_vars['order']->value['order_time']);
} else {
$_smarty_tpl->_assignInScope('contract_time', $_smarty_tpl->tpl_vars['invoice']->value['contract_time']);
}
$_smarty_tpl->_assignInScope('invoice_buyer', ((string)$_smarty_tpl->tpl_vars['c']->value['company_name'])." / УНП ".((string)$_smarty_tpl->tpl_vars['c']->value['company_unp'])."
".((string)$_smarty_tpl->tpl_vars['c']->value['company_adress'])."
".((string)$_smarty_tpl->tpl_vars['c']->value['company_bank'])."
".((string)$_smarty_tpl->tpl_vars['c']->value['company_contacts']));?>
<div class="border border-4 border-secondary border-opacity-25 p-2 mb-4 shadow-lg<?php if (!$_smarty_tpl->tpl_vars['invoice']->value['invoiceID']) {?> visually-hidden<?php }?>" id="HasInvoiceContainer">
    <DIV SUB class="row mb-3">
        <DIV SUB class="col-12 col-xxl-7">
            <?php if ($_smarty_tpl->tpl_vars['invoice']->value['buyerID'] == 0) {?>
            <h5 data-buyerID="0">Собственные реквизиты <del class="text-muted"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
 / УНП <?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
</del>
            </h5>
            <?php } else { ?>
            <h5 data-buyerID="<?php echo $_smarty_tpl->tpl_vars['order']->value['companyID'];?>
" class="text-dark"> <span class="badge text-bg-warning"><?php echo $_smarty_tpl->tpl_vars['order']->value['companyID'];?>
</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
 / УНП <?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
 </h5>
            <?php }?>
        </DIV>
        <DIV SUB class="col-12 col-xxl-5">
            <div class="d-flex justify-content-center">
                <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-outline-dark<?php } else { ?> btn-outline-secondary<?php }?> btn-lg me-2" title='Сбросить паранетры счета на "По-умолчанию"' data-action="Load" data-app="SetInvoiceDefault" name="btn_SetInvoiceDefault" data-operation="SetInvoiceDefault" data-orderID="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
" <?php if (!($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3)) {?> disabled<?php }?>> <i class="bi bi-x-lg text-danger"></i> Сбросить</button>                <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-outline-dark<?php } else { ?> btn-outline-secondary<?php }?> btn-lg me-2" title="Загрузить Счёт" data-action="Load" data-app="LoadInvoice" name="btn_LoadInvoice" data-operation="btn_LoadInvoice" data-orderID="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
" <?php if (!($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3)) {?> disabled<?php }?>> <i class="bi bi-arrow-clockwise"></i> Загрузить</button>                <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-success<?php } else { ?> btn-outline-success<?php }?> btn-lg" title="Сохранить Счёт" data-action="Save" data-app="InvoiceSimple" data-operation="SaveInvoice" name="btn_SaveInvoice" data-orderID="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
" <?php if (!($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3)) {?> disabled<?php }?>> <i class="bi bi-save"></i> СОХРАНИТЬ</button>            </div>
        </DIV>
    </DIV>
    <DIV SUB class="row">
        <DIV SUB class="col-12 col-xxl-9">
            <div class="row mb-2">
                <div class="col-12 col-xxl-9">
                    <form id="invoiceCompanyForm" name="invoiceCompanyForm">
                        <input type="hidden" id="thisInvoiceID" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
">
                        <fieldset id="pm_fieldset">
                            <div class="row">
                                <div class="col-12 col-xxl-7 text-center">
                                    <div class="form-floating">
                                        <textarea <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only'] && $_smarty_tpl->tpl_vars['invoice']->value['buyerID']) {?> disabled readonly<?php }?> class="form-control input-sm pm-control mb-xs-2 mb-md-2" name="pm_requisites" id="pm_requisites" placeholder="Реквизиты" style="height:calc(calc(3.83rem + calc(var(--bs-border-width) * 2))*3);
                                              min-height:calc(calc(3.83rem + calc(var(--bs-border-width) * 2))*3);"><?php echo $_smarty_tpl->tpl_vars['c']->value['requisites'];?>
</textarea>
                                        <label for="pm_requisites">Реквизиты</label>
                                    </div>
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['c']->value['variants']) > 1) {?>
                                    <button class="btn btn-outline-danger btn-sm dropdown-toggle my-2" data-bs-toggle="dropdown" aria-expanded="false"> Для УНП <strong><?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
</strong> есть <span class="text-bg-danger rounded px-2 py-1 lh-1 mx-1"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['c']->value['variants']);?>
</span><?php echo say_to_russian(smarty_modifier_count($_smarty_tpl->tpl_vars['c']->value['variants']),'вариант реквизитов','варианта реквизитов','вариантов реквизитов');?>
</button>
                                    <ul class="dropdown-menu" id="htmlCompanyVariants">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value['variants'], 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['foo']->value['companyID'] == $_smarty_tpl->tpl_vars['c']->value['companyID']) {?>
                                        <?php $_smarty_tpl->_assignInScope('isSelectedClass', "dropdown-item text-bg-danger");?>
                                        <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('isSelectedClass', "dropdown-item");?>
                                        <?php }?>
                                        <li><a class="<?php echo $_smarty_tpl->tpl_vars['isSelectedClass']->value;?>
" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=companies&company_detailed=<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
&companyID=<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];
if ($_smarty_tpl->tpl_vars['order']->value) {?>&toOrderID=<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
&toInvoiceID=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];
}?>" aria-current="page"> Вариант <span class="badge text-bg-warning"><?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
</span> от <?php echo $_smarty_tpl->tpl_vars['foo']->value['update_time'];?>
</a></li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php }?>
                                </div>
                                <div class="col-12 col-xxl-5">
                                    <div class="form-floating mb-2">
                                        <input <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only'] && $_smarty_tpl->tpl_vars['invoice']->value['buyerID']) {?> disabled readonly<?php }?> class="form-control input-sm pm-control" type="text" name="pm_director_nominative" id="pm_director_nominative" placeholder="Директор Иванов А.Г." value="<?php echo $_smarty_tpl->tpl_vars['c']->value['director_nominative'];?>
">
                                        <label for="pm_director_nominative">Руководитель в именительном падеже</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only'] && $_smarty_tpl->tpl_vars['invoice']->value['buyerID']) {?> disabled readonly<?php }?> class="form-control input-sm pm-control" type="text" name="pm_director_genitive" id="pm_director_genitive" placeholder="Директора Иванова А.Г." value="<?php echo $_smarty_tpl->tpl_vars['c']->value['director_genitive'];?>
">
                                        <label for="pm_director_genitive">Договор заключается в лице</label>
                                    </div>
                                    <div class="form-floating">
                                        <input <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only'] && $_smarty_tpl->tpl_vars['invoice']->value['buyerID']) {?> disabled readonly<?php }?> class="form-control input-sm pm-control" type="text" name="pm_director_reason" id="pm_director_reason" placeholder="Устава" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['director_reason'];?>
">
                                        <label for="pm_director_reason">Действующего на основании</label>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-12 col-xxl-3">
                    <div class="d-grid gap-2 col-6 col-xxl-12 mx-auto">

<div class="dropdown-center">
  <button class="btn btn-secondary btn-lg my-2 my-xxl-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Организация
  </button>
  <ul class="dropdown-menu">
    <li>
        <a class="dropdown-item<?php if ('statusOkFlag') {
} else { ?> disabled<?php }?>"
        name="btn_replaceCompany"
        title="Выбрать организацию для выставления счета"
        href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=companies&toOrderID=<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
&toInvoiceID=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"
        data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
"></i>Выбрать</a>
    </li>
<?php if ($_smarty_tpl->tpl_vars['invoice']->value['buyerID'] > 0) {?>
    <li>
        <a class="dropdown-item<?php if ('statusOkFlag') {
} else { ?> disabled<?php }?>"
        name="btn_editCompany"
        title="Редактировать реквизиты"
        href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=companies&company_detailed=<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
&companyID=<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
&toOrderID=<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
&toInvoiceID=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
"
        data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"
        data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
">Редактировать реквизиты</i></a>
    </li>
<?php }?>
    <li>
        <button type="button" class="dropdown-item" id="btn_restore_company_from_order" name="btn_restore_company_from_order" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
" data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
"><i class="bi bi-cart"></i>Восстановить из заказа</button>
    </li>
  </ul>
</div>



                        <div class="form-check form-switch" title="Использовать собственные реквизиты вместо Компании">
                            <input class="form-check-input" type="checkbox" role="switch" name="useCustomrequisites" id="useCustomrequisites" <?php if (!$_smarty_tpl->tpl_vars['invoice']->value['buyerID']) {?>checked="checked" <?php }?>> <label class="form-check-label" for="useCustomrequisites">Собственные реквизиты id:<?php echo $_smarty_tpl->tpl_vars['invoice']->value['buyerID'];?>
:</label>
                        </div>
                        <div class="d-grid gap-1 col-11 mx-auto visually-hidden" id="save_requisites">
                            <button type="button" class="text-success bg-body btn btn-outline-dark btn-sm" id="btn_save_requisites" name="btn_save_requisites" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
" data-invoiceID="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoiceID'];?>
"><i class="bi bi-save"></i> Сохранить Реквизиты для этого Счета</button>
                            <button type="button" class="bg-body btn btn-outline-dark btn-sm text-danger" id="btn_cancel" form="invoiceCompanyForm" title="Отменить изменения"><i class="bi bi-arrow-counterclockwise"></i> Отменить изменения</button>
                            <div class="form-text text-muted"><i class="bi bi-exclamation-diamond-fill text-danger"></i> Измененные на этой форме реквизиты сохраняются только именно этом выставленном счете.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-xxl-3">
                    <form id="invoiceParamsForm" name="invoiceParamsForm">
                        <fieldset id="fieldset0">
                            <div class="form-floating mb-2">
                                <select class="form-select" id="purposeID" name="purposeID" aria-label="purpose">
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "0") {?> selected="selected" <?php }?> value="0">для собственного потребления/производства</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "1") {?> selected="selected" <?php }?> value="1">для оптовой/розничной торговли</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "2") {?> selected="selected" <?php }?> value="2">__________________________________________</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "3") {?> selected="selected" <?php }?> value="3">для оптовой торговли</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "4") {?> selected="selected" <?php }?> value="4">для розничной торговли</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "5") {?> selected="selected" <?php }?> value="5">для вывоза за пределы РБ</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "6") {?> selected="selected" <?php }?> value="6">для мира во всем мире</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['purposeID'] == "7") {?> selected="selected" <?php }?> value="7">для экспорта продукции за пределы Республики Беларусь</option>
                                </select>
                                <label for="purposeID">Цель приобретения</label>
                            </div>
                            <div class="form-floating mb-2">
                                <select class="form-select" id="fundingID" name="fundingID" aria-label="funding">
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "0") {?> selected="selected" <?php }?> value="0">собственные средства</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "1") {?> selected="selected" <?php }?> value="1">Республиканский бюджет</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "2") {?> selected="selected" <?php }?> value="2">__________________________________________</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "3") {?> selected="selected" <?php }?> value="3">Казначейство РБ</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "4") {?> selected="selected" <?php }?> value="4">спонсорская помощь</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "5") {?> selected="selected" <?php }?> value="5">неизвестный источник</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['invoice']->value['fundingID'] == "6") {?> selected="selected" <?php }?> value="6">небюджетные средства</option>
                                </select>
                                <label for="fundingID">Источник финансирования</label>
                            </div>
                        </fieldset>
                </div>
                <div class="col-6 col-xxl-5">
                    <fieldset id="fieldset1">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="deliveryFrom" placeholder="Адрес погрузки" value="<?php if ($_smarty_tpl->tpl_vars['invoice']->value['deliveryFrom'] != '') {
echo $_smarty_tpl->tpl_vars['invoice']->value['deliveryFrom'];
} else {
echo $_smarty_tpl->tpl_vars['s']->value['company_adress'];
}?>">
                            <label for="deliveryFrom">Адрес погрузки</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="deliveryTo" placeholder="Адрес разгрузки" value="<?php if ($_smarty_tpl->tpl_vars['invoice']->value['deliveryTo'] != '') {
echo $_smarty_tpl->tpl_vars['invoice']->value['deliveryTo'];
} else {
echo $_smarty_tpl->tpl_vars['c']->value['company_adress'];
}?>">
                            <label for="deliveryTo">Адрес разгрузки</label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-12 col-xxl-4">
                    <div class="row">
                        <label for="fieldset2" class="form-label col-6 col-xxl-12 mb-0">Траспортировка</label>
                        <fieldset class="btn-group col-6 col-xxl-12 mb-2 mb-xxl-0" id="fieldset2" role="group" aria-label="Transport">
                            <input type="radio" data-bit="0" class="btn-check" name="options-transport" id="clientTransport" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['invoice']->value['DeliveryType'] == "0") {?> checked="checked" <?php }?>> <label class="btn btn-outline-dark text-nowrap" for="clientTransport">Самовывоз клиентом</label>
                            <input type="radio" data-bit="1" class="btn-check" name="options-transport" id="hosterTransport" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['invoice']->value['DeliveryType'] == "1") {?> checked="checked" <?php }?>> <label class="btn btn-outline-dark text-nowrap" for="hosterTransport">Доставка продавцом</label>
                        </fieldset>
                        <label for="fieldset3" class="form-label col-6 col-xxl-12 mb-0">Оплата</label>
                        <fieldset class="btn-group col-6 col-xxl-12 mb-2 mb-xxl-0" id="fieldset3" role="group" aria-label="Payment">
                            <input type="radio" data-bit="0" class="btn-check" name="options-payment" id="payThenGet" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['invoice']->value['PaymentType'] == "0") {?> checked="checked" <?php }?>> <label class="btn btn-outline-dark text-nowrap" for="payThenGet">Предоплата</label>
                            <input type="radio" data-bit="1" class="btn-check" name="options-payment" id="getThenPay" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['invoice']->value['PaymentType'] == "1") {?> checked="checked" <?php }?>> <label class="btn btn-outline-dark text-nowrap" for="getThenPay">Оплата после поставки</label>
                        </fieldset>
                    </div>
                    </form>
                </div>
            </div>
        </DIV>
        <DIV SUB class="col-12 col-xxl-3 text-end">
            <form class="row" id="invoiceDatesForm" name="invoiceDatesForm">
                <fieldset class="col-6 col-xxl-12" id="dates_fieldset">
                    <div class="input-group mb-2">
                        <div class="form-floating">
                            <input type="text" class="form-control text-center" id="invoiceDate" name="invoiceDate" placeholder="YYYY-MM-DD" data-date="<?php echo $_smarty_tpl->tpl_vars['invoice_time']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['invoice_time']->value;?>
">
                            <label for="invoiceDate">Дата выставления счёта</label>
                        </div>
                        <button type="button" id="btn_submitInvoiceDate" name="btn_submitInvoiceDate" class="btn btn-outline-dark btn-lg" title="Подтвердить изменение даты" data-app="InvoiceSimple" data-operation="SetInvoiceDate" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"><i class="bi bi-calendar3" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"></i></button>
                    </div>
                                        <div class="input-group mb-2">
                        <div class="form-floating shadow-lg p-1">
                            <input type="text" class="form-control text-center" id="orderDate" name="orderDate" placeholder="YYYY-MM-DD" data-date="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_time'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_time'];?>
">
                            <label for="orderDate">Дата оформления заказа</label>
                        </div>
                        <button type="button" id="btn_submitOrderDate" name="btn_submitOrderDate" class="btn btn-outline-dark btn-lg" title="Подтвердить изменение даты" data-app="InvoiceSimple" data-operation="SetOrderDate" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"><i class="bi bi-calendar3" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"></i></button>
                    </div>
                                                                                                                                                                                                                                        </fieldset>
                <fieldset class="col-3 col-xxl-7" id="termines_fieldset">
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['termin_options']->value)) {?>
                    <datalist id="termin_list">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['termin_options']->value),$_smarty_tpl);?>

                    </datalist>
                    <?php }?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['payment_options']->value)) {?>
                    <datalist id="payment_list">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['payment_options']->value),$_smarty_tpl);?>

                    </datalist>
                    <?php }?>
                    <div class="input-group mb-2">
                        <div class="form-floating">
                            <input type="text" class="form-control text-center" id="actuality_termin" name="actuality_termin" placeholder="Срок актуальности заказа" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['actuality_termin'];?>
" list="termin_list">
                            <label class="lh-1" for="actuality_termin">Срок актуальности счета</label>
                        </div>
                                            </div>
                    <div class="input-group mb-2">
                        <div class="form-floating">
                            <input type="text" class="form-control text-center" id="delivery_termin" name="delivery_termin" placeholder="Срок поставки товара" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['delivery_termin'];?>
" list="termin_list">
                            <label for="delivery_termin">Срок поставки товара</label>
                        </div>
                                            </div>
                    <div class="input-group mb-2">
                        <div class="form-floating">
                            <input type="text" class="form-control text-center" id="payment_termin" name="payment_termin" placeholder="Отсрочка оплаты" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['payment_termin'];?>
" list="termin_list">
                            <label class="lh-1" for="payment_termin">Отсрочка оплаты товара</label>
                        </div>
                                            </div>
                    <div class="input-group mb-2">
                        <div class="form-floating">
                            <input type="number" class="form-control text-center" id="payment_prepay" name="payment_prepay" placeholder="Процент предоплаты" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['payment_prepay'];?>
" list="payment_list" min="5" max="100">
                            <label for="payment_prepay">Процент предоплаты</label>
                        </div>
                                            </div>
                </fieldset>
                <fieldset class="col-3 col-xxl-5 text-start" id="fieldset_h">
                    <code>
                        [%b] - банковские дни,
                        [%n] - дни,
                        [%w] - рабочие дни,
                        [==] - произвольный текст
                    </code>
                </fieldset>
            </form>
        </DIV>
    </DIV>
</div>
<div class="m-5 p-5 text-bg-danger<?php if ($_smarty_tpl->tpl_vars['invoice']->value['invoiceID']) {?> visually-hidden<?php }?>" id="HasNlotInvoiceContainer">
    <h2>Нет счёта для этого заказа <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-light<?php } else { ?> btn-outline-secondary<?php }?> btn-lg me-2" title="Создать Счёт" data-action="Create" data-app="InvoiceSimple" name="btn_CreateInvoice" data-operation="btn_CreateInvoice" data-orderID="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
" data-companyID="<?php echo $_smarty_tpl->tpl_vars['order']->value['companyID'];?>
" <?php if (!($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3)) {?> disabled<?php }?>> <i class="bi bi-magic"></i> Создать счет</button></h2>
</div><?php }
}
