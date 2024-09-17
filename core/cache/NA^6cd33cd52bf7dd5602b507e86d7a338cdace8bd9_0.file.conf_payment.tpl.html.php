<?php
/* Smarty version 4.2.1, created on 2024-02-07 09:01:01
  from 'W:\domains\nixminsk.os\core\tpl\admin\conf_payment.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65c31c9d58ebd4_11638686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd33cd52bf7dd5602b507e86d7a338cdace8bd9' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\conf_payment.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c31c9d58ebd4_11638686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<form action="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
" method="post" name="payform" id="payform">
    <?php if ($_smarty_tpl->tpl_vars['payment_types']->value) {?>
    <div class="my-3 table-responsive">
        <table class="table align-middle">
            <caption>Варианты оплаты</caption>
            <thead>
                <tr>
                    <td class="text-center"><?php echo (defined('ADMIN_ON2') ? constant('ADMIN_ON2') : null);?>
</td>
                    <td class="text-start" width="100%"><?php echo (defined('STRING_NAME') ? constant('STRING_NAME') : null);?>
 : <?php echo (defined('STRING_MODULE_NAME') ? constant('STRING_MODULE_NAME') : null);?>
</td>
                    <td class="text-start"><?php echo (defined('STRING_DESCRIPTION') ? constant('STRING_DESCRIPTION') : null);?>
</td>
                    <td class="text-start"><?php echo (defined('STRING_MODULE_EMAIL_COMMENTS') ? constant('STRING_MODULE_EMAIL_COMMENTS') : null);?>
 <small class="text-muted">Текст почтового сообщения</small></td>
                                                            <th class="text-center fs-5"><i class="bi bi-terminal-x"></i></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['payment_types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr class="table-group-divider">
                    <td class="text-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Enabled_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" <?php if ($_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Enabled']) {?> checked<?php }?> id="Enabled_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
">
                            <label class="form-check-label" for="Enabled_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
">
                                Вкл
                            </label>
                        </div>
                    </td>
                    <td class="text-start">
                        <label for="name_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" class="form-label"><?php echo (defined('STRING_NAME') ? constant('STRING_NAME') : null);?>
 <sub class="text-muted">PID:<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
</sub></label>
                        <input type="text" name="name_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" id="name_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Name'],'"',' &quot;');?>
" class="form-control font-monospace text-start mb-3">
                        <label for="module_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" class="form-label"><?php echo (defined('STRING_MODULE_NAME') ? constant('STRING_MODULE_NAME') : null);?>
</label>
                        <select class="form-select" name='module_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
' id='module_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
'>
                            <option value='null'> -- </option>
                            <?php
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['payment_modules']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total !== 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                            <option value='<?php echo $_smarty_tpl->tpl_vars['payment_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]->get_id();?>
' <?php if ($_smarty_tpl->tpl_vars['payment_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]->get_id() == $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['module_id']) {?> selected <?php }?> > <?php echo $_smarty_tpl->tpl_vars['payment_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]->title;?>
 </option>
                            <?php
}
}
?>
                        </select>
                    </td>
                    <td class="text-start">
                        <textarea class="form-control" style="height: 10em; width:20rem" name="description_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'],'"','&quot;');?>
</textarea>
                    </td>
                    <td class="text-start">
                        <textarea class="form-control" style="height: 10em; width:20rem" name="email_comments_text_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_comments_text'],'"','&quot;');?>
</textarea>
                    </td>
                    <td class="text-center">
                        <label for="sort_order_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" class="form-label"><?php echo (defined('ADMIN_SORT_ORDER') ? constant('ADMIN_SORT_ORDER') : null);?>
</label>
                        <input type="text" name="sort_order_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" id="sort_order_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sort_order'],'"',' &quot;');?>
" class="form-control font-monospace text-start mb-4">
                        <button class="btn btn-outline-danger" role="button" onclick="confirmDelete(<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
,'<?php echo (defined('QUESTION_DELETE_CONFIRMATION') ? constant('QUESTION_DELETE_CONFIRMATION') : null);?>
','<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=conf&amp;sub=payment&amp;delete=');return false"><i class="bi bi-x-lg"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-nowrap"></td>
                    <td colspan=4>
                        Доступные варианты доставки :
                        <?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ShippingMethodsToAllow']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id='ShippingMethodsToAllow_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ShippingMethodsToAllow'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['SID'];?>
' name='ShippingMethodsToAllow_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ShippingMethodsToAllow'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['SID'];?>
' <?php if ($_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ShippingMethodsToAllow'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['allow'] == 1) {?> checked<?php }?>> <label class="form-check-label" for='ShippingMethodsToAllow_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ShippingMethodsToAllow'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['SID'];?>
'><?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ShippingMethodsToAllow'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['name'];?>
</label>
                        </div>
                        <?php
}
}
?>
                    </td>
                </tr>
                <?php
}
}
?>
            </tbody>
        </table>
    </div>
    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="#" onclick="document.getElementById('payform').submit(); return false" class="btn btn-success btn-lg text-nowrap"><?php echo (defined('SAVE_BUTTON') ? constant('SAVE_BUTTON') : null);?>
</a>
    </div>
    <?php }?>
    <hr>
    <div class="table-responsive-md">
        <table class="mt-3 table table-sm table-borderless table-light align-middle">
            <caption>Добавление нового варианта доставки</caption>
            <thead>
                <tr>
                    <td class="text-center"><?php echo (defined('ADMIN_ON2') ? constant('ADMIN_ON2') : null);?>
</td>
                    <td class="text-start" width="100%"><?php echo (defined('STRING_NAME') ? constant('STRING_NAME') : null);?>
</td>
                    <td class="text-start"><?php echo (defined('STRING_DESCRIPTION') ? constant('STRING_DESCRIPTION') : null);?>
</td>
                    <td class="text-start"><?php echo (defined('STRING_MODULE_EMAIL_COMMENTS') ? constant('STRING_MODULE_EMAIL_COMMENTS') : null);?>
 <small class="text-muted">Текст почтового сообщения</small></td>
                                        <th class="text-center fs-5"><i class="bi bi-plus-lg"></i></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td class="text-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="new_Enabled" checked id="new_Enabled">
                            <label class="form-check-label" for="new_Enabled">
                                Вкл
                            </label>
                        </div>
                    </td>
                    <td class="text-start">
                        <label for="new_name" class="form-label"><?php echo (defined('STRING_NAME') ? constant('STRING_NAME') : null);?>
</label>
                        <input type="text" name="new_name" id="new_name" class="form-control font-monospace text-start">
                        <label for="new_module" class="form-label"><?php echo (defined('STRING_MODULE_NAME') ? constant('STRING_MODULE_NAME') : null);?>
</label>
                        <select class="form-select" name='new_module' id='new_module'>
                            <option value='null'> -- </option>
                            <?php
$__section_j_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['payment_modules']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_4_total = $__section_j_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_4_total !== 0) {
for ($__section_j_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_4_iteration <= $__section_j_4_total; $__section_j_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                            <option value='<?php echo $_smarty_tpl->tpl_vars['payment_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]->get_id();?>
'> <?php echo $_smarty_tpl->tpl_vars['payment_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]->title;?>
 </option>
                            <?php
}
}
?>
                        </select>
                    </td>
                    <td class="text-start"><textarea class="form-control" style="height: 10em; width:20rem" name="new_description"></textarea></td>
                    <td class="text-start"><textarea class="form-control" style="height: 10em; width:20rem" name="new_email_comments_text"></textarea></td>
                    <td>
                        <label for="sort_order_<?php echo $_smarty_tpl->tpl_vars['payment_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" class="form-label"><?php echo (defined('ADMIN_SORT_ORDER') ? constant('ADMIN_SORT_ORDER') : null);?>
</label>
                        <input type="text" name="new_sort_order" id="new_sort_order" value="100" class="form-control font-monospace text-start mb-4">
                        <button class="btn btn-outline-primary btn-sm text-nowrap" onclick="document.getElementById('payform').submit(); return false"><?php echo (defined('ADD_BUTTON') ? constant('ADD_BUTTON') : null);?>
 <i class="bi bi-plus-lg"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <input type="hidden" name="dpt" value="conf">
    <input type="hidden" name="sub" value="payment">
    <input type="hidden" name="save_payment" value="yes">
</form>

<div class="my-5 alert alert-success alert-dismissible fade show" role="alert">
    <span class="fw-bold"><?php echo (defined('USEFUL_FOR_YOU') ? constant('USEFUL_FOR_YOU') : null);?>
</span><br><?php echo (defined('ADMIN_DS2') ? constant('ADMIN_DS2') : null);?>
<br>Комментарий отправляется покупателю в уведомлении о заказе на E-mail.<br><br>
    Rem: <var>вариант оплаты</var> зависят от <var>варианта доставки</var>, который в свою очередь зависит(обычно) от <var>адреса клиента</var>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><?php }
}
