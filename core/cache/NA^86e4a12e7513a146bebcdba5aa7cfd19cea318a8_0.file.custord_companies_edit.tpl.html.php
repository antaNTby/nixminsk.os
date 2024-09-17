<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:05:13
  from 'W:\domains\nixminsk.os\core\tpl\admin\custord_companies_edit.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97e89476669_29619222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e4a12e7513a146bebcdba5aa7cfd19cea318a8' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_companies_edit.tpl.html',
      1 => 1711088687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97e89476669_29619222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<input type="hidden" id="thisCompanyID" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
">
<input type="hidden" id="thisUNP" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
">
<span class="text-small text-secondary p-2 float-end" id="update_time"><i class="bi bi-stopwatch"></i> <?php echo $_smarty_tpl->tpl_vars['c']->value['update_time'];?>
</span>
<h3 id="page-title" class="h4<?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?> text-muted<?php } else { ?> text-dark<?php }?>">
    <span class="badge text-bg-warning"><?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
</span>
    <?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
 / УНП<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
<br>от <i class="bi bi-clock-history"></i> <?php echo $_smarty_tpl->tpl_vars['c']->value['creation_time'];?>

</h3>
<div class="p-2 bg-light shadow-lg border border-2 mb-2">
    <div class="row g-2 row-cols-lg-auto align-items-center justify-content-between">
        <div class="col-md-3">
            <button type="button" id="btn_LinkCompany" name="btn_LinkCompany" class="btn btn-primary btn-lg me-3<?php if ($_smarty_tpl->tpl_vars['toOrderID']->value == 0) {?> visually-hidden<?php }?>" title="Выбрать эту Компанию'" data-app="AdminCompany" data-operation="LinkCompany"><i class="bi bi-check"></i> Выбрать для счета #<?php echo $_smarty_tpl->tpl_vars['toOrderID']->value;?>
</button>
            <button type="button" id="btn_AddCompany" name="btn_AddCompany" class="btn btn-outline-secondary" title="Добавить Новую организацию " data-app="AdminCompany" data-operation="AddCompany"><i class="bi bi-plus"></i> Добавить реквизиты новой компании</button>
        </div>
                <div class="dropdown">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                Импорт\Экспорт реквизитов
            </button>
            <form class="dropdown-menu p-3" action='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=companies&app=app_admincompanies&file_upload=1' method="post" name="form_upload" id="form_upload" enctype="multipart/form-data">
                <div class="mb-0 d-grid gap-2 col mx-auto">
                    <button type="button" id="btn_ExportCompany" name="btn_ExportCompany" class="btn btn-outline-secondary" title="Экспорт реквизитов в файл" data-app="AdminCompany" data-operation="ExportCompany" data-export_id="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
"><i class="bi bi-file-arrow-down"></i> Экспорт реквизитов</button>
                </div>
                <div class="mb-1">
                    <hr>
                </div>
                <div class="mb-3 d-grid gap-2 col mx-auto">
                    <a class="btn btn-outline-secondary" id="btn_SelectFile" title="Выбрать файл на сервере" target="_self" href="\lib\tfm\tfm.php?p=uploads&sub=companies&company_detailed=<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
&companyID=<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
" title=" Выбрать файл на сервере"><i class="bi bi-pin-angle" id="pinIcon"></i> Выбрать файл на сервере</a>
                </div>
                <div class="mb-3">
                    <hr>
                </div>
                <div class="mb-3">
                    <label for="fileToUpload" class="form-label text-primary">Загрузить c компьютера</label>
                    <div class="input-group">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control input-sm" aria-describedby="fileToUpload" aria-label="Upload" accept=".json" size="2">
                        <button type="submit" class="btn btn-outline-primary btn-sm" name="submit" title="загрузить c компьютера"><i class="bi bi-upload"></i></button>
                    </div>
                </div>
                <div class="mb-3">
                    <hr>
                </div>
                <div class="mb-3 d-grid gap-2 col mx-auto">
                    <button type="button" id="btn_ImportCompany" name="btn_ImportCompany" class="btn btn-primary disabled" title="Импорт реквизитов из выбранного файла" data-app="AdminCompany" data-operation="ImportCompany" data-import_id="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
"><i class="bi bi-file-arrow-up"></i> Импорт </button>
                    <div class="text-muted" id="selectedFileName"></div>
                </div>
                <div class="mb-3">
                    <hr>
                </div>
                <div class="mb-0 d-grid gap-0 col mx-auto">
                    <button type="button" class="btn btn-outline-danger" id="resetLS" title="очистить"><i class="bi bi-x-lg"></i> Очистить</button>
                </div>
            </form>
        </div>
                <div class="col-md">
            <a type="button" class="btn btn-secondary" id="btn_clone"><i class="bi bi-copy"></i> Клонировать</a>
            <a type="button" class="btn btn-success bnt-lg<?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?> visually-hidden<?php }?>" id="btn_save"><i class="bi bi-save"></i> Сохранить</a>
        </div>
        <div class="col-md">
            <a class="btn btn-outline-secondary" href="admin.php?dpt=custord&sub=companies"><i class="bi bi-table"></i> Таблица реквизитов</a>
            <a class="btn btn-outline-secondary" href="admin.php?dpt=custord&sub=orders"><i class="bi bi-cart-plus"></i> Таблица заказов</a>
        </div>
    </div>
</div>
<div class="row row-cols-lg-auto g-3 align-items-center btn-toolbar justify-content-end mb-2">
    <div class="col-md-9 btn-group<?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?> visually-hidden diasbled<?php }?> me-2" id="formDataToolbar">
        <a type="button" class="btn btn-light btn-sm text-danger" id="btn_clearAll" form="mainForm" title="Очистить все поля с данными"><i class="bi bi-eraser-fill"></i> Очистить данные</a>
        <a type="button" class="btn btn-light btn-sm text-secondary" id="btn_cancel" form="mainForm" title="Отменить изменения"><i class="bi bi-arrow-counterclockwise"></i> Отменить изменения</a>
        <a type="button" class="btn btn-light btn-sm text-secondary" id="btn_setDumpData" form="mainForm" title="Заполнить все поля случайными данными"><i class="bi bi-robot"></i> Пример заполнения</a>
        <a type="button" class="btn btn-light btn-sm text-dark" id="btn_setUserData" form="mainForm" title="Сгенерировать реквизиты"><i class="bi bi-building-fill-check"></i> Сгенерировать Реквизиты</a>
        <a type="button" class="btn btn-success btn-sm" id="btn_validate" form="mainForm" title="Проверить правильность заполнения"><i class="bi bi-check-all"></i></i> Проверить данные</a>
    </div>
    <div class="col-md-3 text-bg-dark rounded px-2 py-1 me-2">
        <div class="form-check form-switch" id="readonly_switch_container">
            <input class="form-check-input" type="checkbox" role="switch" id="readonly_switch" <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?> checked="checked" <?php }?> autocomplete="off"> <label class="form-check-label" for="readonly_switch" title="Защита от редактирования"><?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?><i class="bi bi-lock-fill text-dark"></i> Защита от записи<?php } else { ?><i class="bi bi-unlock-fill text-muted"></i> Не защищено<?php }?></label>
        </div>
    </div>
</div>
<div class="alert alert-light alert-dismissible fade show visually-hidden" id="corsContainer" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<form class="needs-validation p-2 shadow-lg" id="mainForm" name="mainForm" title="Реквизиты заказчика и данные для заказа">
    <div class="form-floating mb-2">
        <textarea class="form-control input-sm pm-control" name="pm_title" id="pm_title" placeholder="Примечание" style="min-height:calc(5rem + 2px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_title'];?>
</textarea>
        <label for="pm_title">Описание/Примечание</label>
    </div>
    <fieldset class="row g-2 mb-3" id="pm_fieldset" <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?> disabled<?php }?>> <div class="col-md">
        <div class="form-floating mb-2">
            <textarea class="form-control input-sm pm-control" name="pm_name" id="pm_name" placeholder="Полное Название организации" autofocus required style="min-height:calc(5rem + 2px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
</textarea>
            <label for="pm_name">Краткое/Полное Название организации<sup>1</sup></label>
        </div>
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating mb-2">
                    <input class="form-control input-sm pm-control" type="text" name="pm_unp" id="pm_unp" placeholder="123456789" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
" pattern="((\d{3} \d{3} \d{3})|(\d{9}))" maxlength="11" required title="9-тизначный цифровой код">
                    <label for="pm_unp">УНП</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-2">
                    <input class="form-control input-sm pm-control" type="text" name="pm_okpo" id="pm_okpo" placeholder="123456789012" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_okpo'];?>
" pattern="((\d{8})|(\d{12}))" title="8-ми или 12-ти значный цифровой код">
                    <label for="pm_okpo">ОКПО</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-2">
            <textarea class="form-control input-sm pm-control" name="pm_adress" id="pm_adress" placeholder="Адреса организации" required style="min-height:calc(7rem + 11px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_adress'];?>
</textarea>
            <label for="pm_adress">Адреса организации<sup>3</sup></label>
        </div>
        <div class="form-floating mb-2">
            <textarea class="form-control input-sm pm-control" name="pm_bank" id="pm_bank" placeholder=" р/с, Банк, код банка организации" style="min-height:calc(7rem + 11px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_bank'];?>
</textarea>
            <label for="pm_bank">Банк<sup>4</sup></label>
        </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-2">
                <textarea class="form-control input-sm pm-control" name="pm_contacts" id="pm_contacts" placeholder="Заполните контактные номера организации" style="min-height:calc(9rem + 4px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_contacts'];?>
</textarea>
                <label for="pm_contacts">Контакты организации [телефон, e-mail, viber и т.д.]</label>
            </div>
            <div class="form-floating mb-2">
                <input class="form-control input-sm pm-control" type="text" name="pm_email" id="pm_email" placeholder="sendme@domainname.by" required value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_email'];?>
">
                <label for="pm_contacts">e-mail для выставления счета</label>
            </div>
            <div class="form-floating mb-2">
                <input class="form-control input-sm pm-control" type="text" name="pm_director_nominative" id="pm_director_nominative" placeholder="Директор Иванов А.Г." value="<?php echo $_smarty_tpl->tpl_vars['c']->value['director_nominative'];?>
">
                <label for="pm_director_nominative">Руководитель в именительном падеже</label>
            </div>
            <div class="form-floating mb-2">
                <input class="form-control input-sm pm-control" type="text" name="pm_director_genitive" id="pm_director_genitive" placeholder="Директора Иванова А.Г." value="<?php echo $_smarty_tpl->tpl_vars['c']->value['director_genitive'];?>
">
                <label for="pm_director_genitive">Договор заключается в лице</label>
            </div>
            <div class="form-floating mb-2">
                <input class="form-control input-sm pm-control" type="text" name="pm_director_reason" id="pm_director_reason" placeholder="Устава" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['director_reason'];?>
">
                <label for="pm_director_reason">Действующего на основании</label>
            </div>
        </div>
    </fieldset>
    <fieldset class="row g-2 mb-3" id="data_fieldset" <?php if ($_smarty_tpl->tpl_vars['c']->value['read_only']) {?> disabled<?php }?>> <div class="col-md">
        <div class="form-floating mb-2">
            <textarea class="form-control input-sm pm-control" name="pm_userdata" id="pm_userdata" placeholder="User Data" style="min-height:calc(15rem + 2px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_data'];?>
</textarea>
            <label for="pm_userdata">User Data</label>
        </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-2">
                <textarea class="form-control input-sm pm-control" name="pm_admindata" id="pm_admindata" placeholder="Admin Data" style="min-height:calc(15rem + 2px);"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_admin'];?>
</textarea>
                <label for="pm_admindata">Admin Data</label>
            </div>
        </div>
    </fieldset>
</form>
<div class="row row-cols-lg-auto mt-0 mb-2 g-1 align-items-center btn-toolbar justify-content-end" id="formDataToolbar2">
    <div class="col-md btn-group">
        <button type="button" id="btn_cors" id="btn_cors" class="btn btn-light btn-sm" title="Сделать запрос на сайт налоговой(grp.nalog.gov.by) для уточнения реквизитов" data-app="AdminCompany" data-operation="CorsCompany"><i class="bi bi-r-square-fill"></i> Получить данные из налоговой</button>
        <a class="btn btn-light btn-sm" target="_blank" href="https://egr.gov.by/egrmobile/providing-information/find"><i class="bi bi-file-text-fill"></i> Поиск в базе данных ЕГР РБ</a>
        <?php if ($_smarty_tpl->tpl_vars['c']->value['company_unp'] > 0) {?>
        <a class="btn btn-light btn-sm" name="bt_egr" target="_blank" href="https://egr.gov.by/egrmobile/information?pan=<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
"><i class="bi bi-filetype-doc"></i> Выписка из базы данных ЕГР</a>
        <?php }?>
    </div>
</div>
<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['c']->value['variants']) > 1) {?>
<div class="p-2 mt-5 mb-3 border border-1 rounded rounded-2 bg-white" id="htmlCompanyVariants">
    <h5>Для УНП <strong><?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
</strong> есть <span class="badge bg-danger"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['c']->value['variants']);?>
</span><?php echo say_to_russian(smarty_modifier_count($_smarty_tpl->tpl_vars['c']->value['variants']),'вариант реквизитов','варианта реквизитов','вариантов реквизитов');?>
</h5>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value['variants'], 'foo', false, NULL, 'variants', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_variants']->value['index']++;
?>
    <?php if ($_smarty_tpl->tpl_vars['foo']->value['companyID'] == $_smarty_tpl->tpl_vars['c']->value['companyID']) {?>
    <?php $_smarty_tpl->_assignInScope('isSelectedClass', "list-group-item list-group-item-action list-group-item-dark");?>
    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('isSelectedClass', "list-group-item list-group-item-action");?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('itemIndex', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_variants']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_variants']->value['index'] : null)+1);?>
    <ul class="mb-1 list-group list-group-horizontal">
        <li class="list-group-item text-nowrap text-end text-danger" style="width: 3em!important;"><?php echo zeroFill($_smarty_tpl->tpl_vars['itemIndex']->value,2);?>
</li>
        <li class="list-group-item" style="width: 24em!important;">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Sample" id="radioSample_<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
">
                <label class="form-check-label text-nowrap" for="radioSample_<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
">
                    Выбрать как правильный
                </label>
            </div>
        </li>
                <a class="<?php echo $_smarty_tpl->tpl_vars['isSelectedClass']->value;?>
" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=companies&company_detailed=<?php echo $_smarty_tpl->tpl_vars['c']->value['company_unp'];?>
&companyID=<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];
if ($_smarty_tpl->tpl_vars['toOrderID']->value) {?>&toOrderID=<?php echo $_smarty_tpl->tpl_vars['toOrderID']->value;
}?>" title="<?php echo $_smarty_tpl->tpl_vars['foo']->value['company_title'];?>
"> Вариант <span class="badge text-bg-warning"><?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
</span> от <?php echo $_smarty_tpl->tpl_vars['foo']->value['creation_time'];?>
 &nbsp; <em class="bg-light lh-1 px-2"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['foo']->value['company_title'],50);?>
</em></a>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['orders_count'] == 0 && $_smarty_tpl->tpl_vars['foo']->value['sellers_count'] == 0 && $_smarty_tpl->tpl_vars['foo']->value['buyers_count'] == 0 && $_smarty_tpl->tpl_vars['foo']->value['old_sellers_count'] == 0 && $_smarty_tpl->tpl_vars['foo']->value['old_buyers_count'] == 0) {?>
        <li class="list-group-item">
            <button class="btn btn-danger btn-sm" name="btn_KillCompany" title="Удалить компанию" data-kill_id="<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
" data-app="AdminCompany" data-operation="KillCompany" style="width: 8em!important;">МОЖНО УДАЛИТЬ</button>
        </li>
        <?php } else { ?>
        <li class="list-group-item" style="width: 14em!important;">
            <table class="float-end">
                <tr>
                    <td class='px-1 text-nowrap text-small text-center text-bg-primary' title="количество заказов"><i class="bi bi-cart4"></i></td>
                    <td class='px-1 text-nowrap text-small text-center' title="количество счетов как продавец"><i class="bi bi-file-earmark-pdf"></i></td>
                    <td class='px-1 text-nowrap text-small text-center text-bg-danger' title="количество счетов как покупатель"><i class="bi bi-file-earmark-pdf"></i></td>
                    <td class='px-1 text-nowrap text-small text-center text-secondary' title="количество СТАРЫХ счетов как продавец"><i class="bi bi-file-earmark-pdf"></i></td>
                    <td class='px-1 text-nowrap text-small text-center text-bg-secondary' title="количество СТАРЫХ счетов как покупатель"><i class="bi bi-file-earmark-pdf"></i></td>
                </tr>
                <tr>
                    <td class='px-1 text-nowrap text-small text-center text-bg-primary' title="количество заказов"><?php echo $_smarty_tpl->tpl_vars['foo']->value['orders_count'];?>
</td>
                    <td class='px-1 text-nowrap text-small text-center' title="количество счетов как продавец"><?php echo $_smarty_tpl->tpl_vars['foo']->value['sellers_count'];?>
</td>
                    <td class='px-1 text-nowrap text-small text-center text-bg-danger' title="количество счетов как покупатель"><?php echo $_smarty_tpl->tpl_vars['foo']->value['buyers_count'];?>
</td>
                    <td class='px-1 text-nowrap text-small text-center text-secondary' title="количество СТАРЫХ счетов как продавец"><?php echo $_smarty_tpl->tpl_vars['foo']->value['old_sellers_count'];?>
</td>
                    <td class='px-1 text-nowrap text-small text-center text-bg-secondary' title="количество СТАРЫХ счетов как покупатель"><?php echo $_smarty_tpl->tpl_vars['foo']->value['old_buyers_count'];?>
</td>
                </tr>
            </table>
        </li>
        <?php }?>
        <li class="list-group-item" style="width: 20em!important;">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
" name="DeadMan" id="checkAsDeadMan_<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value['read_only']) {?>disabled<?php }?>> <label class="form-check-label text-nowrap" for="checkAsDeadMan_<?php echo $_smarty_tpl->tpl_vars['foo']->value['companyID'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['read_only']) {?> Защита от записи<?php } else { ?>Пометить на слияние<?php }?>
                </label>
            </div>
        </li>
    </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class=" mt-3 g-3 align-items-center btn-toolbar justify-content-between">
        <button type="button" id="btn_UniteCompanies" name="btn_UniteCompanies" class="btn btn-warning" title="Выполнить слияние | Заменить выбраные компании" data-app="AdminCompany" data-operation="UniteCompanies">
            <i class="bi bi-union"></i> Выполнить слияние
        </button>
        <button type="button" id="btn_CancelUnite" name="btn_CancelUnite" class="btn btn-outline-danger" title="Отменить" data-app="AdminCompany" data-operation="CancelUnite">
            <i class="bi bi-x-lg"></i> Отменить
        </button>
    </div>
</div>
<?php }?>
<div class="p-2 border border-1 rounded rounded-2 bg-white" id="htmlCompanyStat">
    <h5> Статистика </h5>
        <?php if ($_smarty_tpl->tpl_vars['c']->value['orders_count'] == 0 && $_smarty_tpl->tpl_vars['c']->value['sellers_count'] == 0 && $_smarty_tpl->tpl_vars['c']->value['buyers_count'] == 0 && $_smarty_tpl->tpl_vars['c']->value['old_sellers_count'] == 0 && $_smarty_tpl->tpl_vars['c']->value['old_buyers_count'] == 0) {?>
    <div class="m-5 p-5 text-bg-secondary">
        <h2>Нет заказов и/или выставленных счетов для этой компанией</h2>
        <button class="btn btn-danger btn-sm" name="btn_KillCompany" title="Удалить компанию" data-kill_id="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyID'];?>
" data-app="AdminCompany" data-operation="KillCompany">МОЖНО УДАЛИТЬ ЭТУ КОМПАНИЮ</button>
    </div>
    <?php } else { ?>
    <table class="table table-info">
        <tr>
            <td class='px-1 text-nowrap text-small text-center text-bg-primary' title="количество заказов"><i class="bi bi-cart4"></i> Количество заказов</td>
            <td class='px-1 text-nowrap text-small text-center' title="количество счетов как продавец"><i class="bi bi-file-earmark-pdf"></i> Количество счетов как продавец</td>
            <td class='px-1 text-nowrap text-small text-center text-bg-danger' title="количество счетов как покупатель"><i class="bi bi-file-earmark-pdf"></i> Количество счетов как покупатель</td>
            <td class='px-1 text-nowrap text-small text-center text-secondary' title="количество СТАРЫХ счетов как продавец"><i class="bi bi-file-earmark-pdf"></i> Количество СТАРЫХ счетов как продавец</td>
            <td class='px-1 text-nowrap text-small text-center text-bg-secondary' title="количество СТАРЫХ счетов как покупатель"><i class="bi bi-file-earmark-pdf"></i> Количество СТАРЫХ счетов как покупатель</td>
        </tr>
        <tr>
            <td class='px-1 text-nowrap text-small text-center text-bg-primary' title="количество заказов"><?php echo $_smarty_tpl->tpl_vars['c']->value['orders_count'];?>
</td>
            <td class='px-1 text-nowrap text-small text-center' title="количество счетов как продавец"><?php echo $_smarty_tpl->tpl_vars['c']->value['sellers_count'];?>
</td>
            <td class='px-1 text-nowrap text-small text-center text-bg-danger' title="количество счетов как покупатель"><?php echo $_smarty_tpl->tpl_vars['c']->value['buyers_count'];?>
</td>
            <td class='px-1 text-nowrap text-small text-center text-secondary' title="количество СТАРЫХ счетов как продавец"><?php echo $_smarty_tpl->tpl_vars['c']->value['old_sellers_count'];?>
</td>
            <td class='px-1 text-nowrap text-small text-center text-bg-secondary' title="количество СТАРЫХ счетов как покупатель"><?php echo $_smarty_tpl->tpl_vars['c']->value['old_buyers_count'];?>
</td>
        </tr>
    </table>
    <?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['antSUB']->value == "companies" && $_smarty_tpl->tpl_vars['company_detailed']->value) {
echo '<script'; ?>
 src="./core/tpl/admin/apps/AdminCompanies/appAdminCompanyEdit.js" type="module"><?php echo '</script'; ?>
>
<?php }
}
}
