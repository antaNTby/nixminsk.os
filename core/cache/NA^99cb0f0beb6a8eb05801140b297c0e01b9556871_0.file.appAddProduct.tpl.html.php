<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\apps\OrderContent\appAddProduct.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f97664a50_92405826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99cb0f0beb6a8eb05801140b297c0e01b9556871' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\apps\\OrderContent\\appAddProduct.tpl.html',
      1 => 1698046873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f97664a50_92405826 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row row-cols-lg-auto g-3 align-items-center btn-toolbar justify-content-between">
                <div class="col-auto">
            <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-danger<?php } else { ?> btn-outline-secondary<?php }?>" <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> data-app="OrderContent" data-operation="KillThemAll" data-action="Delete" data-itemid="-1" <?php }?> data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" title="Удалить всё"><i class="bi bi-x-lg"></i>&nbsp;Удалить всё</button>
        </div>
                <div class="col-auto">
            <label class="form-text" for="showDT">Добавить товар</label>
            <div class="btn-group" role="group">
                <button type="button" id="btn_AddFiveItems" name="btn_AddFiveItems" class="btn btn-outline-secondary" title="Добавить пять пустых строк " data-app="OrderContent" data-operation="AddFiveItems" data-action="AddNewItems" data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
">
                    <i class="bi bi-dice-5"></i>
                </button>
                <div class="input-group">
                    <select class="form-select" name="selectItemSource" id="selectItemSource">
                        <option value="0" selected>Прошлые заказы</option>
                        <option value="1">Товары на сайте</option>
                    </select>
                    <button class="btn btn-secondary" id="showDT" data-bs-toggle="collapse" data-bs-target=".datatable-collapse"><i class="bi bi-filter"></i></button>
                </div>
            </div>
            <div class="btn-group" role="group">
                <div class="input-group">
                    <button class="btn btn-outline-danger" type="button" role="button" onclick="onClearClick('input#app_searchstring')"><i class="bi bi-x-lg"></i></button>
                    <input type="text" class="form-control" id="app_searchstring" placeholder="Искать товар в заданной таблице" style="min-width: 30rem">
                    <button class="btn btn-success" id="refreshDT"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
                <div class="col-auto">
            <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-success<?php } else { ?> btn-outline-secondary<?php }?>" title="Сохранить цены" <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?>  data-action="Save" data-app="OrderContent" data-operation="SaveSimplePrices" <?php }?> data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] != 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] != 3) {?> disabled<?php }?>> <i class="bi bi-save2"></i>&nbsp;Сохранить, учитывая скидки</button>
            <button class="btn<?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> btn-success<?php } else { ?> btn-outline-secondary<?php }?>" title="Сохранить всё" <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] == 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] == 3) {?> data-action="Save" data-app="OrderContent" data-operation="SavePrices" <?php }?> data-orderid="<?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['orderID'];?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value['statusID'] != 2 || $_smarty_tpl->tpl_vars['order']->value['statusID'] != 3) {?> disabled<?php }?>> <i class="bi bi-save"></i>&nbsp;Сохранить всё</button>
        </div>
</div>
        <div class="row collapse datatable-collapse" id="dataTableContainer">
    <div class="col-12 table-responsive">
        <table id="AdminProductDataTable" class="table table-light table-sm table-striped" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th width="1%" data-orderable=false>#</th>
                    <th style="min-width: 50rem">Name</th>
                    <th>Price</th>
                    <th>Цена, <span class="BYN"><?php echo $_smarty_tpl->tpl_vars['MyOrderContent']->value['targetCurrencyCode'];?>
</span></th>
                    <th>Category</th>
                    <th>id</th>
                    <th>from </th>
                    <th>Артикул </th>
                    <th><i class="bi bi-terminal-fill"></i></th>
                </tr>
            </thead>
            <tbody class="table-secondary"></tbody>
        </table>
    </div>
</div>
<?php }
}
