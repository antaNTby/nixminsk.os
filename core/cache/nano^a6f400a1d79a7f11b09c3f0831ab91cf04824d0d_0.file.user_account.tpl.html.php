<?php
/* Smarty version 4.2.1, created on 2024-09-04 13:45:14
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\user_account.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66d83a3a95c457_03172593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f400a1d79a7f11b09c3f0831ab91cf04824d0d' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\user_account.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d83a3a95c457_03172593 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="m-3">
    <!-- Example Code -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100">
                                <div class="card-body">
                    <h5 class="card-title"><?php echo (defined('STRING_CONTACT_INFORMATION_DOWN_CASE') ? constant('STRING_CONTACT_INFORMATION_DOWN_CASE') : null);?>
</h5>
                    <p class="card-text">
                        <?php echo (defined('CUSTOMER_FIRST_NAME') ? constant('CUSTOMER_FIRST_NAME') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
</b><br>
                        <?php echo (defined('CUSTOMER_LAST_NAME') ? constant('CUSTOMER_LAST_NAME') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
</b><br>
                        <?php echo (defined('CUSTOMER_EMAIL') ? constant('CUSTOMER_EMAIL') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
</b><br>
                        <?php echo (defined('CUSTOMER_LOGIN') ? constant('CUSTOMER_LOGIN') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</b><br>
                        <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['additional_field_values']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php echo $_smarty_tpl->tpl_vars['additional_field_values']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_name'];?>
: <b><?php echo $_smarty_tpl->tpl_vars['additional_field_values']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_value'];?>
</b><br>
                        <?php
}
}
?>
                        <?php if ($_smarty_tpl->tpl_vars['custgroup_name']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['discount']->value) {
echo (defined('STRING_DISCOUNT') ? constant('STRING_DISCOUNT') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
%</b><br><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['min_discount']->value) {
echo (defined('STRING_MIN_DISCOUNT') ? constant('STRING_MIN_DISCOUNT') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['min_discount']->value;?>
%</b><br><?php }?>
                        <?php }?>
                    </p>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="index.php?contact_info=yes" class="card-link"><?php echo (defined('EDIT_BUTTON') ? constant('EDIT_BUTTON') : null);?>
</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                                <div class="card-body">
                    <h5 class="card-title"><?php echo (defined('STRING_ADDRESS_BOOK') ? constant('STRING_ADDRESS_BOOK') : null);?>
</h5>
                    <p class="card-text">
                        <?php if ($_smarty_tpl->tpl_vars['addressStr']->value) {?><div><?php echo (defined('STRING_DEFAULT_ADDRESS') ? constant('STRING_DEFAULT_ADDRESS') : null);?>
:<br><br><b><?php echo $_smarty_tpl->tpl_vars['addressStr']->value;?>
</b></div><?php }?>
                    </p>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="index.php?address_book=yes" class="card-link"><?php echo (defined('EDIT_BUTTON') ? constant('EDIT_BUTTON') : null);?>
</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                                <div class="card-body">
                    <h5 class="card-title"><?php echo (defined('STRING_ORDER_HISTORY') ? constant('STRING_ORDER_HISTORY') : null);?>
</h5>
                    <p class="card-text">
                        <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['status_distribution']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['status_distribution']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'] != 0) {?>
                        <div><?php echo $_smarty_tpl->tpl_vars['status_distribution']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
 <?php echo (defined('STRING_COUNT_ORDER_IN_STATUS') ? constant('STRING_COUNT_ORDER_IN_STATUS') : null);?>
 <b>&quot;<?php echo $_smarty_tpl->tpl_vars['status_distribution']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_name'];?>
&quot;</b></div>
                        <?php }?>
                        <?php }} else {
 ?>
                        <?php echo (defined('STRING_NO_ORDERS') ? constant('STRING_NO_ORDERS') : null);?>

                        <?php
}
?>
                    </p>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="index.php?order_history=yes" class="card-link"><?php echo (defined('STRING_SHOPPING_HISTORY') ? constant('STRING_SHOPPING_HISTORY') : null);?>
</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 mb-3">
                                <div class="card-body">
                    <h5 class="card-title"><?php echo (defined('STRING_VISIT_LOG') ? constant('STRING_VISIT_LOG') : null);?>
</h5>
                    <p class="card-text">
                        <div><?php echo $_smarty_tpl->tpl_vars['visits_count']->value;?>
 <?php echo (defined('STRING_RECORDS') ? constant('STRING_RECORDS') : null);?>
</div>
                    </p>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="index.php?visit_history=yes" class="card-link"><?php echo (defined('STRING_VISIT_LOG') ? constant('STRING_VISIT_LOG') : null);?>
</a>
                </div>
            </div>
        <?php if ((defined('CONF_AFFILIATE_PROGRAM_ENABLED') ? constant('CONF_AFFILIATE_PROGRAM_ENABLED') : null) == 1) {?>
                    <div class="card h-100">
                                <div class="card-body">
                    <h5 class="card-title"><?php echo (defined('STRING_AFFILIATE_PROGRAM') ? constant('STRING_AFFILIATE_PROGRAM') : null);?>
</h5>
                    <p class="card-text">
                        <?php if ($_smarty_tpl->tpl_vars['affiliate_customers']->value) {
echo (defined('STRING_AFFILIATE_CUSTOMERS') ? constant('STRING_AFFILIATE_CUSTOMERS') : null);?>
: <b><?php echo $_smarty_tpl->tpl_vars['affiliate_customers']->value;?>
</b><br><?php } else {
echo (defined('STRING_AFFILIATE_NO_CUSTOMERS') ? constant('STRING_AFFILIATE_NO_CUSTOMERS') : null);?>
<br><?php }?>
                        <div class="d-flex justify-content-center py-3">

                        </div>
                    </p>
                </div>
                <div class="card-footer justify-content-center">
                            <a href="index.php?affiliate=yes&amp;sub=balance" class="card-link"><?php echo (defined('AFFP_USER_BALANCE') ? constant('AFFP_USER_BALANCE') : null);?>
</a>
                            <a href="index.php?affiliate=yes&amp;sub=payments_history" class="card-link"><?php echo (defined('AFFP_PAYMENTS_HISTORY') ? constant('AFFP_PAYMENTS_HISTORY') : null);?>
</a>
                            <a href="index.php?affiliate=yes&amp;sub=attract_guide" class="card-link">?</a>
                            <?php if ((defined('CONF_AFFILIATE_EMAIL_NEW_COMMISSION') ? constant('CONF_AFFILIATE_EMAIL_NEW_COMMISSION') : null) || (defined('CONF_AFFILIATE_EMAIL_NEW_PAYMENT') ? constant('CONF_AFFILIATE_EMAIL_NEW_PAYMENT') : null)) {?>
                            <a href="index.php?affiliate=yes&amp;sub=settings" class="card-link"><?php echo (defined('STRING_MODULE_SETTING') ? constant('STRING_MODULE_SETTING') : null);?>
</a>
                            <?php }?>
                </div>
            </div>
                </div>
        <?php }?>
    </div>
    <!-- End Example Code -->
</div><?php }
}
