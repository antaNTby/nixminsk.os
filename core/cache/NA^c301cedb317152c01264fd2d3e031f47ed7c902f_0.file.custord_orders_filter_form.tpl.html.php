<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\custord_orders_filter_form.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f975dbe08_06753767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c301cedb317152c01264fd2d3e031f47ed7c902f' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\custord_orders_filter_form.tpl.html',
      1 => 1698663856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f975dbe08_06753767 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-2 mb-3 rounded bg-body shadow-lg">
    <form method=GET action="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
" name="MainForm" id="MainForm">
        <input type="hidden" name="dpt" value="custord">
        <input type="hidden" name="sub" value="orders">
        <input type="hidden" name="search" value="1">
        <div class="row row-cols-md-2 g-1 g-lg-2 align-items-center">
            <div class="col align-self-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="order_search_type" value="SearchByOrderID" id="order_search_type1" <?php if ($_smarty_tpl->tpl_vars['order_search_type']->value == 'SearchByOrderID' || $_smarty_tpl->tpl_vars['order_search_type']->value == null) {?> checked<?php }?>> <label class="form-check-label text-primary fw-lighter" for="order_search_type1">
                    Поиск заказа по номеру
                    </label>
                    <div class="m-1 p-3">
                        <div class="input-group flex-nowrap mb-0">
                            <input type="number" step=1 min=1 max=99999 name="orderID_textbox" id="orderID_textbox" value="<?php if ($_smarty_tpl->tpl_vars['order']->value['orderID']) {
echo $_smarty_tpl->tpl_vars['order']->value['orderID'];
} else {
}?>" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
" class="form-control col-8">
                                                        <a class="btn btn-outline-secondary btn-lg col-4" id-="doEdit" onclick="var newID = document.getElementById('orderID_textbox').value; var link='/<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=orders&orders_detailed=yes&orderID=' + newID; console.log(link);window.location = link; "> <i class="bi bi-arrow-return-left"></i> </a>
                                                    </div>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="order_search_type" value="SearchByStatusID" id="order_search_type2" <?php if ($_smarty_tpl->tpl_vars['order_search_type']->value == 'SearchByStatusID') {?> checked<?php }?>> <label class="form-check-label text-primary fw-lighter" for="order_search_type2">
                    Поиск заказов по статусу
                    </label>
                    <div class="m-1 p-3 border border-secondary border-opacity-25" id="status_chks">
                        <?php if ($_smarty_tpl->tpl_vars['order_statuses']->value) {?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="id_checkall" name="chk" value="">
                            <label class="form-check-label text-secondary fw-bold" for="id_checkall">
                                Выбрать все статусы
                            </label>
                        </div>
                        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order_statuses']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div class="form-check form-check-inline">
                            <input type=checkbox class="form-check-input" name=checkbox_order_status_<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
 id="checkbox_order_status_<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
" <?php if ($_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['selected'] == 1) {?> checked<?php }?> value='1' data-statusID="<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
">
                            <label class="form-check-label" for="checkbox_order_status_<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
" data-statusID="<?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_name'];?>
<sub class="text-muted"><?php echo $_smarty_tpl->tpl_vars['order_statuses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['statusID'];?>
</sub>
                            </label>
                        </div>
                        <?php
}
}
?>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col align-self-center">
                <div class="my-3 d-grid gap-2 d-md-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-lg" onclick="document.getElementById('MainForm').submit();return false;"><i class="bi bi-search"></i><?php echo (defined('FIND_BUTTON') ? constant('FIND_BUTTON') : null);?>
</button>
                </div>
                <div class="my-3 d-grid gap-1">
                    <button class="btn btn-light" role="button" onclick="var link = window.location.href;window.location = link;" title="Перегрузить страницу">Обновить&nbsp;<i class="bi bi-arrow-clockwise"></i></i></button>
                    <?php if ($_smarty_tpl->tpl_vars['order_detailed']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['urlToReturn']->value) {?>
                    <a href='<?php echo $_smarty_tpl->tpl_vars['urlToReturn']->value;?>
' class="btn btn-light" role="button" title="<?php echo (defined('ADMIN_ORDER_LIST_GO_BACK') ? constant('ADMIN_ORDER_LIST_GO_BACK') : null);?>
"><?php echo (defined('ADMIN_ORDER_LIST_GO_BACK') ? constant('ADMIN_ORDER_LIST_GO_BACK') : null);?>
&nbsp;<i class="bi bi-arrow-return-left"></i></a>
                    <?php } else { ?>
                    <a href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=orders&search=1&orderID_textbox=&order_search_type=SearchByStatusID&checkbox_order_status_2=1&checkbox_order_status_3=1' class="btn btn-outliner-dark" role="button" title="<?php echo (defined('ADMIN_ORDER_LIST_GO_BACK') ? constant('ADMIN_ORDER_LIST_GO_BACK') : null);?>
"><?php echo (defined('ADMIN_ORDER_LIST_GO_BACK') ? constant('ADMIN_ORDER_LIST_GO_BACK') : null);?>
&nbsp;<i class="bi bi-arrow-return-left"></i></a>
                    <?php }?>
                    <button class="btn btn-light" role="button" onclick="open_window('<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?app=app_invoice&orderID=<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
',756,500);return false;" title="<?php echo (defined('STRING_INVOICE_OPEN') ? constant('STRING_INVOICE_OPEN') : null);?>
"><?php echo (defined('STRING_INVOICE_OPEN') ? constant('STRING_INVOICE_OPEN') : null);?>
&nbsp;<i class="bi bi-printer"></i></button>
                    <?php if (($_smarty_tpl->tpl_vars['order']->value['statusID'] == $_smarty_tpl->tpl_vars['cancledOrderStatus']->value)) {?>
                    <button class="btn btn-danger" onclick="document.getElementById('resultat').name = 'delete_order'; confirmDelete( '<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
', '<?php echo (defined('QUESTION_DELETE_CONFIRMATION') ? constant('QUESTION_DELETE_CONFIRMATION') : null);?>
', '<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=custord&sub=orders&orders_detailed=yes&urlToReturn=<?php echo $_smarty_tpl->tpl_vars['encodedUrlToReturn']->value;?>
&delete=yes&orderID='); return false;" title="<?php echo (defined('DELETE_BUTTON') ? constant('DELETE_BUTTON') : null);?>
"><?php echo (defined('DELETE_BUTTON') ? constant('DELETE_BUTTON') : null);?>
 &nbsp;<i class="bi bi-trash"></i></button>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>
        <input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
        <input type="hidden" name="show_all" value="<?php echo $_smarty_tpl->tpl_vars['show_all']->value;?>
">
        <?php }?>
    </form>
</div>
<?php }
}
