<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:12:32
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\custord_companies_table.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ee3085e525_20243667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806e8f903a15932e250c4e9145dae285381eddd5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_companies_table.tpl.html',
      1 => 1697378627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ee3085e525_20243667 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-12 p-3 mb-3 bg-light shadow-lg border border-2">
    <div class="row row-cols-lg-auto mb-3 g-3 align-items-center btn-toolbar justify-content-between">
                <div class="col-md">
            <div class="btn-group" role="group">
                <button type="button" id="btn_AddCompany" name="btn_AddCompany" class="btn btn-outline-secondary" title="Добавить Новую организацию " data-app="AdminCompany" data-operation="AddCompany">
                    <i class="bi bi-plus"></i> Добавить реквизиты новой компании
                </button>
            </div>
        </div>
                <div class="col-md">
            <label class="form-text" for="showDT">Поиск (слова в любом порядке)</label>
            <div class="btn-group" role="group">
                <div class="input-group">
                    <button class="btn btn-outline-danger" type="button" role="button" onclick="onClearClick('input#app_searchstring')"><i class="bi bi-x-lg"></i></button>
                    <input type="text" class="form-control" id="app_searchstring" placeholder="Искать в реквизитах" style="min-width: 40rem">
                    <div class="input-group-text" title="волшебный поиск по всем полям">
                        <input class="form-check-input mt-0" type="checkbox" id="isFullTextSearch" value="0" aria-label="Checkbox for following text input">
                        <label for="isFullTextSearch" class="form-check-label px-1"> <i class="bi bi-magic"></i> </label>
                    </div>
                    <button class="btn btn-success" id="btn_search"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
                <div class="col-md">
        </div>
    </div>
            <table id="CompaniesDataTable" class="table table-light table-sm table-striped" style="width:100%">
        <thead class="table-dark">
            <tr class="text-center">
                <th width="1%" data-orderable=false>#</th>
                <th width="1%">id</th>
                <th width="10%">Описание</th>
                                <th>УНП</th>
                <th width="60%">Реквизиты для договора</th>
                                                                                                                                                                                                <th width="1%" class="px-3 align-middle text-nowrap text-center"><i class="bi bi-lock-fill"></i>/<i class="bi bi-unlock-fill"></i> &nbsp; </th>
                <th width="1%" class="px-3 align-middle text-nowrap text-primary text-center"><i class="bi bi-pencil-square"></i> &nbsp; </th>
                <th width="1%" class="px-3 align-middle text-nowrap text-warning text-center" id="tdFilterUNP"><i class="bi bi-funnel"></i>УНП &nbsp;<button class="btn btn-secondary btn-sm visually-hidden" id="btn_resetFilterUNP"><i class="bi bi-x"></i></button></th>
                <th width="1%" class="px-3 align-middle text-nowrap text-success"><i class="bi bi-cart-plus"></i> &nbsp; </th>
                <th width="1%" class="px-3 align-middle text-nowrap text-center"><i class="bi bi-clock-history"></i> Добавлен.&nbsp; </th>
                <th width="1%" class="px-3 align-middle text-nowrap text-center"><i class="bi bi-stopwatch"></i> Изменен.&nbsp; </th>
                <th width="1%" class="px-3 align-middle text-nowrap text-bg-danger text-center"><i class="bi bi-trash3-fill"></i> &nbsp; </th>
                                                            </tr>
        </thead>
        <tbody class="table-light"></tbody>
    </table>
</div>
<?php echo '<script'; ?>
 src="./core/tpl/admin/apps/AdminCompanies/appAdminCompaniesTable.js" type="module"><?php echo '</script'; ?>
><?php }
}
