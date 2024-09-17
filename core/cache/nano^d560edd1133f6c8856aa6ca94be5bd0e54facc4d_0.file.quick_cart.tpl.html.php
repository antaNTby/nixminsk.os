<?php
/* Smarty version 4.2.1, created on 2024-02-08 11:52:23
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\quick_cart.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65c49647319659_07690124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd560edd1133f6c8856aa6ca94be5bd0e54facc4d' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\quick_cart.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:quick_cart__success.tpl.html' => 1,
  ),
),false)) {
function content_65c49647319659_07690124 (Smarty_Internal_Template $_smarty_tpl) {
if ($_GET['quick_cart_success']) {
$_smarty_tpl->_subTemplateRender("file:quick_cart__success.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
<div class="m-2 p-3 bg-secondary bg-gradient bg-opacity-10">
<h3 class="display-6" id="QUICK_CART">Оформление заказа</h3>

<form id="formCart" name="formCart" class="start-validation" method=post action="/index.php?send_quick_cart=yes" title="Форма данных для оформления заказа">
    <fieldset class="row g-3 mb-3" id="private_data">
        <label class="h4" for="private_data">Контактные данные</label>
        <div class="col-xl-4 position-relative">
            <label for="first_name" class="form-label">Как к вам обращаться</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
" placeholder="Введите Ваше имя и фамилию" min="2" required <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Неверно заполнено поле "Имя Фамилия"!
            </div>
        </div>
        <div class="col-xl-4 position-relative">
            <label for="last_name" class="form-label">Контактный номер</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
" placeholder="+### ## ###-##-##" min="2" required <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Неверно заполнено поле "Контактный номер"!
            </div>
        </div>
        <div class="col-xl-4 position-relative">
            <label for="email" class="form-label">Адрес электронной почты</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="validationTooltipEmail">@</span>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" aria-describedby="validationTooltipEmail emailHelp" required <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Неверно заполнено поле "Email"!
                </div>
            </div>
        </div>
        <div id="emailHelp" class="form-text"> Зарегистрированные клиенты могут изменять свои данные (доп.поля,регион,адрес) при оформлении заказа. Эти данные будут изменены и в <a class="alert-link" href="index.php?contact_info=yes"> <i class="bi bi-person"></i> Личном кабинете</a></div>
    </fieldset>
    <fieldset class="row g-3 mb-3 p-2" id="offerta">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="public_offer" name="public_offer" onclick="apply_public_offer(1);" value=1 required checked>
            <label class="form-check-label" for="public_offer"> Я соглашаюсь с условиями
                <a href="page_2.html" target="_blank" class="alert-link">договора публичной оферты и политикой в отношении персональных данных</a></label>
            <div class="valid-feedback" id="ok_offer">
                Looks good!
            </div>
            <div class="invalid-feedback" id="error_offer">
                Согласитесь с условиями договора публичной оферты и политикой в отношении персональных данных для оформления заказа
            </div>
        </div>
    </fieldset>
    <fieldset class="row g-3 mb-3" id="zone_and_adress">
        <label class="h4" for="zone_and_adress">Адрес</label>
        <?php if ((defined('CONF_ADDRESSFORM_STATE') ? constant('CONF_ADDRESSFORM_STATE') : null) == 2) {?>
        <input name="zoneID" id="zoneID" type="hidden" value="0">
        <?php }?>
        <?php if ((defined('CONF_ADDRESSFORM_ADDRESS') ? constant('CONF_ADDRESSFORM_ADDRESS') : null) < 2) {?> <input type="hidden" name="addressID" id="addressID" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['addressID'];?>
">
            <div class="col-xl-4 position-relative">
                <label class="form-label" for="zoneID">Регион доставки</label>
                <select id="zoneID" name="zoneID" class="form-select" onchange="region_changed()" <?php if ((defined('CONF_ADDRESSFORM_STATE') ? constant('CONF_ADDRESSFORM_STATE') : null) == 0) {?> required<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                    <option <?php if ($_smarty_tpl->tpl_vars['region']->value['zoneID'] != $_smarty_tpl->tpl_vars['address']->value['zoneID']) {?> selected<?php }?> disabled value="0">Выберите Ваш регион</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regions']->value, 'region');
$_smarty_tpl->tpl_vars['region']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['region']->value['zoneID'] == $_smarty_tpl->tpl_vars['address']->value['zoneID']) {
$_smarty_tpl->_assignInScope('zoneIDpreselected', $_smarty_tpl->tpl_vars['region']->value['zoneID']);
}?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['zoneID'];?>
" <?php if ($_smarty_tpl->tpl_vars['region']->value['zoneID'] == $_smarty_tpl->tpl_vars['zoneIDpreselected']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['region']->value['zone_name'];?>
 </option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select> <div class="valid-feedback">
                        Looks good!
            </div>
            <?php if (!((defined('CONF_ADDRESSFORM_CITY') ? constant('CONF_ADDRESSFORM_CITY') : null) < 2)) {?></div><?php }?> <?php }?> <?php if ((defined('CONF_ADDRESSFORM_CITY') ? constant('CONF_ADDRESSFORM_CITY') : null) < 2) {?> <input type="hidden" id="CONF_ADDRESSFORM_STATE_eq_0" value="1">
                <?php if (!((defined('CONF_ADDRESSFORM_ADDRESS') ? constant('CONF_ADDRESSFORM_ADDRESS') : null) < 2)) {?><div class="col-xl-4 position-relative"><?php }?>
                    <label class="form-label" for="city">Населенный пункт</label>
                    <input id="city" name="city" class="form-control" type="search" value="<?php if ($_smarty_tpl->tpl_vars['address']->value['city'] != '') {
echo $_smarty_tpl->tpl_vars['address']->value['city'];
} else { ?>Минск<?php }?>" placeholder="Название населенного пункта" <?php if ((defined('CONF_ADDRESSFORM_CITY') ? constant('CONF_ADDRESSFORM_CITY') : null) == 0) {?> required<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <?php }?>
                    </div>
                    <?php if ((defined('CONF_ADDRESSFORM_ADDRESS') ? constant('CONF_ADDRESSFORM_ADDRESS') : null) < 2) {?> <div class="col-xl-6 position-relative">
                        <label for="address" class="form-label">Ваш Адрес</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Введите адрес доставки" <?php if ((defined('CONF_ADDRESSFORM_ADDRESS') ? constant('CONF_ADDRESSFORM_ADDRESS') : null) == 0) {?> required<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 style="resize: none;min-height:6.5rem;"><?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        </div>
                        <?php }?>
    </fieldset>
        <fieldset class="row g-3 mb-3" id="delivery_and_payment">
        <div class="col-md-6 position-relative">
            <label class="h4" for="shipping_method_select">Способ доставки</label>
            <div id="shipping_method_html">
                <?php echo $_smarty_tpl->tpl_vars['ShippingSelector']->value;?>

            </div>

        </div>
        <div class="col-md-6 position-relative ">
            <label class="h4" for="payment_method_select">Способ оплаты</label>
            <div id="payment_method_html">
                <?php echo $_smarty_tpl->tpl_vars['PaymentSelector']->value;?>

            </div>

        </div>
    </fieldset>

<input type="hidden" class="border-0" id="last_order_companyID" name="last_order_companyID" form="formCart" value="<?php echo $_smarty_tpl->tpl_vars['last_order_companyID']->value;?>
">

</form>
</div>

<div class="bg-body border border-3 shadow shadow-lg" id="payment_addon_html"></div>

<?php }
}
}
