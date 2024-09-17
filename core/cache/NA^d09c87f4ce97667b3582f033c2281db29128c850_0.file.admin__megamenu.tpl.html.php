<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:08:56
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\admin__megamenu.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ed588f1c97_15996019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09c87f4ce97667b3582f033c2281db29128c850' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\admin__megamenu.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/custord_orders_filter_form.tpl.html' => 1,
  ),
),false)) {
function content_6604ed588f1c97_15996019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="mt-2 mb-0 d-grid gap-1 col-12 mx-auto">




    <a class="btn btn-secondary btn-sm" aria-current="page" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
"><i class="bi bi-gear"></i> Admin </a>

<?php if ($_smarty_tpl->tpl_vars['admin_sub_dpt']->value == "custord_custlist.tpl.html") {?>
<div class="p-3 mb-4 rounded border border-secondary bg-body bg-opacity-50">
    <form name="custlistLeftForm" method="GET" id="custlistLeftForm" action="" role="form">
        <input type="hidden" name="dpt" value="custord">
        <input type="hidden" name="sub" value="custlist">
        <input type="hidden" name="search" value="1">
        <h5>Фильтр <?php echo (defined('ADMIN_CUSTOMERS') ? constant('ADMIN_CUSTOMERS') : null);?>
</h5>
        <div class="mb-4">
            <label class="form-label" for="customer_aka">Customer ID|aka</label>
            <input type="text" name="customer_aka" value='<?php echo $_smarty_tpl->tpl_vars['customer_aka']->value;?>
' class="form-control">
        </div>
        <div class="mb-4">
            <label class="form-label" for="login"><?php echo (defined('ADMIN_CUSTOMER_LOGIN') ? constant('ADMIN_CUSTOMER_LOGIN') : null);?>
</label>
            <input type="text" name="login" value='<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
' class="form-control">
        </div>
        <div class="mb-4">
            <label class="form-label" for="first_name"><?php echo (defined('ADMIN_CUSTOMER_FIRST_NAME') ? constant('ADMIN_CUSTOMER_FIRST_NAME') : null);?>
</label>
            <input type="text" name="first_name" value='<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
' class="form-control input-sm" size="25">
        </div>
        <div class="mb-4">
            <label class="form-label" for="last_name"><?php echo (defined('ADMIN_CUSTOMER_LAST_NAME') ? constant('ADMIN_CUSTOMER_LAST_NAME') : null);?>
</label>
            <input type="text" name="last_name" value='<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
' class="form-control input-sm" size="25">
        </div>
        <div class="mb-4">
            <label class="form-label" for="email"><?php echo (defined('ADMIN_CUSTOMER_EMAIL') ? constant('ADMIN_CUSTOMER_EMAIL') : null);?>
</label>
            <input type="text" name="email" value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
' class="form-control input-sm" size="25" placeholder="Email">
        </div>
        <div class="mb-4">
            <label class="form-label" for="groupID"><?php echo (defined('ADMIN_CUSTOMER_GROUP_NAME') ? constant('ADMIN_CUSTOMER_GROUP_NAME') : null);?>
</label>
            <select name="groupID" class="form-select">
                <option value='0'>
                    <?php echo (defined('STRING_ANY') ? constant('STRING_ANY') : null);?>

                </option>
                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['customer_groups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['customer_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['custgroupID'];?>
' <?php if ($_smarty_tpl->tpl_vars['groupID']->value == $_smarty_tpl->tpl_vars['customer_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['custgroupID']) {?> selected <?php }?>> <?php echo $_smarty_tpl->tpl_vars['customer_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['custgroup_name'];?>
 </option> <?php
}
}
?>
            </select>
        </div>

        <div class="mb-3">
                    <label class="form-label" for="fActState"><?php echo (defined('STRING_MODULE_STATUS') ? constant('STRING_MODULE_STATUS') : null);?>
</label>
                    <select name="fActState" class="form-select">
                        <option value='-1' <?php if ($_smarty_tpl->tpl_vars['ActState']->value == -1) {?> selected="selected" <?php }?>> <?php echo (defined('STRING_ANY_M') ? constant('STRING_ANY_M') : null);?>
 </option> <option value='1' <?php if ($_smarty_tpl->tpl_vars['ActState']->value == 1) {?> selected="selected" <?php }?>> <?php echo (defined('STR_ACTIVATED') ? constant('STR_ACTIVATED') : null);?>
 </option> <option value='0' <?php if ($_smarty_tpl->tpl_vars['ActState']->value == 0 && $_smarty_tpl->tpl_vars['ActState']->value != '') {?> selected="selected" <?php }?>> <?php echo (defined('STR_NOTACTIVATED') ? constant('STR_NOTACTIVATED') : null);?>
 </option>
                    </select>
        </div>


         <div class="mt-3 mb-1 d-grid gap-2 d-md-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg" onclick="document.getElementById('custlistLeftForm').submit();return false;">Поиск</button>
        </div>

    </form>
</div>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['admin_sub_dpt']->value == "custord_orders.tpl.html") {?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/custord_orders_filter_form.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?> 


</div>










<div class="accordion accordion-flush" id="antMenuAccordeon">
    <?php
$__section_dpt_index_1_loop = (is_array(@$_loop=smarty_modifier_count($_smarty_tpl->tpl_vars['antMenu']->value)) ? count($_loop) : max(0, (int) $_loop));
$__section_dpt_index_1_total = $__section_dpt_index_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_dpt_index'] = new Smarty_Variable(array());
if ($__section_dpt_index_1_total !== 0) {
for ($__section_dpt_index_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index'] = 0; $__section_dpt_index_1_iteration <= $__section_dpt_index_1_total; $__section_dpt_index_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index']++){
?>
    <?php $_smarty_tpl->_assignInScope('myMenu', $_smarty_tpl->tpl_vars['antMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index'] : null)]);?>
    <div class="accordion-item mt-2">
        <h2 class="accordion-header" id="heading_<?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
">
            <button class="accordion-button fs-4 text-light fw-lighter text-uppercase bg-dark bg-gradient bg-opacity-75" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['current_dpt']->value == $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id']) {?>true<?php } else { ?>false<?php }?>" aria-controls="collapse_<?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_name'];?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
</sub>
            </button>
        </h2>
        <div id="collapse_<?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
" class="accordion-collapse collapse<?php if ($_smarty_tpl->tpl_vars['current_dpt']->value == $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id']) {?> show<?php }?>" aria-labelledby="heading_<?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
" data-bs-parent="#antMenuAccordeon">
            <div class="accordion-body">
                <div class="d-grid gap-1 col-12 mx-auto">
                    <?php $_smarty_tpl->_assignInScope('mySubMenu', $_smarty_tpl->tpl_vars['myMenu']->value);?>
                    <?php
$__section_sub_index_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['mySubMenu']->value['sub_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_sub_index_2_total = $__section_sub_index_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sub_index'] = new Smarty_Variable(array());
if ($__section_sub_index_2_total !== 0) {
for ($__section_sub_index_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] = 0; $__section_sub_index_2_iteration <= $__section_sub_index_2_total; $__section_sub_index_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']++){
?>

<?php if ($_smarty_tpl->tpl_vars['mySubMenu']->value['sub_id'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)] == "custlist") {
$_smarty_tpl->_assignInScope('myHrefMod', "&groupID=0&fActState=-1&search=1");
} else {
$_smarty_tpl->_assignInScope('myHrefMod', '');
}?>
                    <?php if ($_smarty_tpl->tpl_vars['current_sub']->value == $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_id'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)]) {?>
                    <a class="btn btn-danger text-wrap text-start text-xl-center" href="<?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_href'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];
echo $_smarty_tpl->tpl_vars['myHrefMod']->value;?>
" role="button"><?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_name'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_id'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
</sub></a>
                    <?php } else { ?>
                    <a class="btn btn-light text-wrap text-start text-xl-center" href="<?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_href'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];
echo $_smarty_tpl->tpl_vars['myHrefMod']->value;?>
" role="button"><?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_name'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_id'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
</sub></a>
                    <?php }?>
                    <?php
}
}
?></div>
            </div>
        </div>
    </div>
    <?php
}
}
?>
</div><?php }
}
