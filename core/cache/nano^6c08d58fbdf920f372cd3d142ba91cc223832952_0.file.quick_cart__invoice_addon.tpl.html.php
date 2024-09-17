<?php
/* Smarty version 4.2.1, created on 2023-12-07 15:33:50
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\quick_cart__invoice_addon.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6571bbae90a854_47257877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c08d58fbdf920f372cd3d142ba91cc223832952' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\quick_cart__invoice_addon.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6571bbae90a854_47257877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if (($_smarty_tpl->tpl_vars['isadmin']->value == "yes") || $_smarty_tpl->tpl_vars['AllowedCompanies']->value) {?> <input type="hidden" id="yes_selest" value=1><?php }?>
<input type="hidden" id="isNewCompany" name="isNewCompany" value="1" form="form#formCompany_Fields">

<div class="row m-5 p-5">
<div class="col">
    <div class="h4 position-relative text-primary">Организация, для которой выставляется счёт:<span id="mySpinner"></span>
        <div class="position-absolute top-0 end-0">
            <div class="btn-group me-3" role="group" aria-label="save-reload-erase">
                <div class="form-check form-switch mx-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="readonly_switch" style="background-color: var(--bs-red); border-color: var(--bs-red);">                    <label class="form-check-label form-text" for="readonly_switch" title="Защита от редактирования"><i class="bi bi-shield-lock-fill"></i></label>
                </div>
            </div>
        </div>
    </div>

    <h3 class="text-center my-1" id="titleNewCompany">Новая организация </h3>



    <fieldset class="row g-2 mb-3" id="companyVariants" form="formCart">
            <div class="mt-3 mb-2" id="DivCompanyVariants"></div>

    </fieldset>


    <nav class="my-3">
        <div class="nav nav-tabs flex-column flex-sm-row" id="myTabNav" role="tablist">
            <button class="flex-sm-fill text-sm-center nav-link active" id="btn_fields_tab" data-bs-toggle="tab" data-bs-target="#fields_tab" type="button" role="tab" aria-controls="fields_tab" aria-selected="true">Заполнить все поля</button>
            <button class="flex-sm-fill text-sm-center nav-link" id="btn_text_tab" data-bs-toggle="tab" data-bs-target="#text_tab" type="button" role="tab" aria-controls="text_tab" aria-selected="false">Вставить
                реквизиты</button>
                                    <?php $_smarty_tpl->_assignInScope('allCompaniesCount', smarty_modifier_count($_smarty_tpl->tpl_vars['AllowedCompanies']->value));?>
            <?php if ($_smarty_tpl->tpl_vars['allCompaniesCount']->value > 0) {?>
            <button class="flex-sm-fill text-sm-center nav-link" id="btn_select_tab" data-bs-toggle="tab" data-bs-target="#select_tab" type="button" role="tab" aria-controls="select_tab" aria-selected="false">Выбрать из <strong><?php echo $_smarty_tpl->tpl_vars['allCompaniesCount']->value;?>
</strong> <?php echo say_to_russian($_smarty_tpl->tpl_vars['allCompaniesCount']->value,'доступной организации','доступных организаций','доступных организаций');?>
 </button>
            <?php }?>
                                </div>
    </nav>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="fields_tab" role="tabpanel" aria-labelledby="nav-fields-tab">
            <form class="needs-validation" id="formCompany_Fields" name="formCompany_Fields"  title="Реквизиты заказчика и данные для заказа">
                <div class="form-text my-2">Заполните реквизиты Вашей Организации НАЗВАНИЕ, УНП, Юр.Адрес, р/с, Банк, код
                    банка и тд.</div>
                <fieldset class="row g-2 mb-3" id="userdata_fields">
                    <div class="col-md">
                        <div class="form-floating mb-2">
                            <textarea class="form-control input-sm pm-control" name="pm_name" id="pm_name" placeholder="Полное Название организации" autofocus required style="min-height:calc(5rem + 2px);"></textarea>
                            <label for="pm_name">Полное Название организации*:</label>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
                                <div class="input-group input-group-lg mb-3">
                                    <label class="form-label" for="pm_unp">УНП*:</label>
                                    <div class="input-group has-validation">
                                        <input class="form-control input-lg pm-control" type="text" name="pm_unp" id="pm_unp" placeholder="123456789" value="" pattern="((\d{3} \d{3} \d{3})|(\d{9}))" maxlength="11" required title="9-тизначный цифровой код">
                                        <a class="btn btn-outline-danger" id="pm_cors_unp"><i class="bi bi-bug"></i></a>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="form-floating mb-2">
                                    <input class="form-control input-sm pm-control" type="text" name="pm_unp" id="pm_unp" placeholder="123456789" value="" pattern="((\d{3} \d{3} \d{3})|(\d{9}))" maxlength="11" required title="9-тизначный цифровой код">
                                    <label for="pm_unp">УНП*:</label>
                                </div>
                                <?php }?>
                            </div>
                            <div class="col-md">
                                <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
                                <div class="mb-2">
                                    <label class="form-label" for="pm_okpo">ОКПО:</label>
                                    <input class="form-control input-sm pm-control" type="text" name="pm_okpo" id="pm_okpo" value="" pattern="((\d{8})|(\d{12}))*" title="(8-ми или 12-ти)значный цифровой код">
                                </div>
                                <?php } else { ?>
                                <div class="form-floating mb-2">
                                    <input class="form-control input-sm pm-control" type="text" name="pm_okpo" id="pm_okpo" value="" pattern="((\d{8})|(\d{12}))*" title="(8-ми или 12-ти)значный цифровой код">
                                    <label for="pm_okpo">ОКПО:</label>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-floating mb-2">
                            <textarea class="form-control input-sm pm-control" name="pm_adress" id="pm_adress" placeholder="Юридический адрес организации" required style="min-height:calc(7rem + 11px);"></textarea>
                            <label for="pm_adress">Юр.адрес:</label>
                        </div>
                        <div class="form-floating mb-2">
                            <textarea class="form-control input-sm pm-control" name="pm_bank" id="pm_bank" placeholder=" р/с, Банк, код банка организации" style="min-height:calc(7rem + 11px);"></textarea>
                            <label for="pm_bank">р/с, Банк, код банка:</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-2">
                            <textarea class="form-control input-sm pm-control" name="pm_contacts" id="pm_contacts" placeholder="Заполните контактные номера организации" style="min-height:calc(9rem + 4px);;"></textarea>
                            <label for="pm_contacts">Контакты организации [телефон, e-mail, viber и т.д.]</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input class="form-control input-sm pm-control" type="text" name="pm_director_nominative" id="pm_director_nominative" placeholder="Директор Иванов А.Г." value="">
                            <label for="pm_director_nominative">Руководитель</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input class="form-control input-sm pm-control" type="text" name="pm_director_genitive" id="pm_director_genitive" placeholder="Директора Иванова А.Г." value="">
                            <label for="pm_director_genitive">Договор заключается в лице</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input class="form-control input-sm pm-control" type="text" name="pm_director_reason" id="pm_director_reason" placeholder="Устава" value="">
                            <label for="pm_director_reason">Действующего на основании</label>
                        </div>
                    </div>
                </fieldset>
                <div class="form-floating mb-2">
                    <textarea class="form-control input-sm pm-control" name="pm_title" id="pm_title" placeholder="Примечание" style="min-height:calc(5rem + 2px);"></textarea>
                    <label for="pm_title">Примечание</label>
                </div>
            </form>
        </div>


        <div class="tab-pane fade" id="text_tab" role="tabpanel" aria-labelledby="nav-text-tab">
            <form class="" id="formCompany_TextArea" name="formCompany_TextArea" novalidate>
                <fieldset class="row g-2 mb-3 justify-content-md-center" id="userdata_text">
                    <div class="col-md-10 form-text my-2">Вставьте здесь реквизиты Вашей Организации НАЗВАНИЕ, УНП,
                        Юр.Адрес, р/с, Банк, код банка и тд. или заполните поля по отдельности</div>
                    <div class="col-md-8 form-floating mb-2">
                        <textarea class="form-control pm-control" name="pm_userdata" id="pm_userdata" autofocus placeholder="НАЗВАНИЕ, УНП,
                    Юр.Адрес, р/с, Банк, код банка " style="min-height:calc(8rem + 2px);" required></textarea>
                        <label for="pm_userdata">Реквизиты</label>
                        <div class="form-text">НАЗВАНИЕ, УНП, Юр.Адрес, р/с, Банк, код банка</div>
                    </div>
                </fieldset>
            </form>
        </div>


        <?php if (($_smarty_tpl->tpl_vars['isadmin']->value == "yes") || $_smarty_tpl->tpl_vars['AllowedCompanies']->value) {?>
        <div class="tab-pane fade" id="select_tab" role="tabpanel" aria-labelledby="nav-text-tab">
            <form id="formSelectCompany" name="formSelectCompany" novalidate>
                <fieldset class="row justify-content-center mb-3" id="select_company_fieldset">
                    <div class="col position-relative">
                        <label class="form-label" for="selectCompany2">Выбрать организацию (поиск по названию, УНП, адресу и
                            банковским реквизитам )</label>
                        <select class="form-control selectpicker show-tick"
                                                  title="Выберите компанию"
                         id="selectCompany2" name="selectCompany2"
                         data-style="btn-outline-secondary"
                         data-live-search="true" data-size="8" data-width="99%"
                                                  />



                            <option value="0" title="Добавить новые реквизиты" />Добавить новые реквизиты</div>
                            <option data-divider="true"></option>
                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['AllowedCompanies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                            <option <?php if ($_smarty_tpl->tpl_vars['AllowedCompanies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['selected']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['AllowedCompanies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['value'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['AllowedCompanies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" data-tokens="<?php echo $_smarty_tpl->tpl_vars['AllowedCompanies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tokens'];?>
" data-subtext="<?php echo $_smarty_tpl->tpl_vars['AllowedCompanies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subtext'];?>
" />
                            <?php echo $_smarty_tpl->tpl_vars['AllowedCompanies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>

                            </option>                             <?php
}
}
?>

                        </select>
                    </div>
                    <div class="my-2 px-2" id="companyPeview" name="companyPeview"></div>
                </fieldset>
            </form>
        </div>
        <?php }?>
    </div>

        <hr>

<div class="row g-2 mb-3">
    <div class="col-sm-12 px-3 bg-secondary bg-gradient bg-opacity-10">
        <div class="my-3 btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group bg-body" role="group" id="companyToolbar">
                <a type="button" class="btn btn-outline-dark text-success" id="pm_save" title="Сохранить"><i class="bi bi-save"></i> Сохранить</a>
                <a type="button" class="btn btn-outline-dark" id="pm_reload" title="Перезагрузить"><i class="bi bi-bootstrap-reboot"></i> Перезагрузить</a>
                <a type="button" class="btn btn-outline-dark text-danger" id="pm_clear" title="Очистить"><i class="bi bi-eraser-fill"></i> Очистить поля</a>
            </div>
            <div class="btn-group bg-body" role="group" id="companyToolbar">
                <a type="button" class="btn btn-outline-primary" id="pm_newcompany" title="Добавить"><i class="bi bi-plus"></i> Добавить Организацию </a>
            </div>
        </div>
    </div>
</div>


    <fieldset class="row g-2 mb-3" id="purpose_and_funding" form="formCart">
        <hr>
        <label class="h4">Желаемые условия договора</label>
        <div class="col-md">
            <div class="form-floating mb-2">
                <select class="form-select" id="pm_purpose" name="pm_purpose" id="pm_purpose" aria-label="Цель приобретения" form="formCart">
                    <option value="0" selected>Для собственного потребления/производства.</option>
                    <option value="1">Для оптовой/розничной торговли.</option>
                    <option value="2">_______________________________</option>
                </select>
                <label for="pm_purpose">Цель приобретения</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-2">
                <select class="form-select" id="pm_funding" name="pm_funding" id="pm_funding" aria-label="Источник финансирования" form="formCart">
                    <option value="0">Собственные средства</option>
                    <option value="1">Республиканский бюджет</option>
                    <option value="2">_______________________________</option>
                    <option value="3">Казначейство РБ</option>
                    <option value="4">Спонсорская помощь</option>
                    <option value="5">Неизвестный источник</option>
                </select>
                <label for="pm_funding">Источник финансирования</label>
            </div>
        </div>
    </fieldset>
</div>


<input type="hidden" id="isCompanyChanged" name="isCompanyChanged" form="formCart" value="0">
<input type="hidden" id="companyFieldsChanged" name="companyFieldsChanged" form="formCart" value="<?php echo $_smarty_tpl->tpl_vars['companyFieldsChanged']->value;?>
">

<input type="hidden" class="border-0" id="idInvoiceCompany" name="idInvoiceCompany" form="formCart" value="0"> </div>

<?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {
echo '<script'; ?>
>
<!--






    //-->
<?php echo '</script'; ?>
>
<?php } else {
echo '<script'; ?>
>
<!--





    //-->
<?php echo '</script'; ?>
>
<?php }?>


<?php }
}
