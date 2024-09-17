<?php
/* Smarty version 4.2.1, created on 2023-12-07 15:40:54
  from 'W:\domains\nixminsk.os\core\tpl\email\customer_order_notification.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6571bd56cc4c10_76364096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66069faec4334791c84390bddbac95b19077f610' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\email\\customer_order_notification.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6571bd56cc4c10_76364096 (Smarty_Internal_Template $_smarty_tpl) {
echo (defined('CUSTOMER_ACTIVATE_6') ? constant('CUSTOMER_ACTIVATE_6') : null);?>
, <?php echo $_smarty_tpl->tpl_vars['customer_firstname']->value;?>
,<br>
<?php echo (defined('CUSTOMER_ACTIVATE_7') ? constant('CUSTOMER_ACTIVATE_7') : null);?>
<br><br>
<?php echo (defined('EMAIL_OUR_MANAGER_WILL_CONTACT_YOU') ? constant('EMAIL_OUR_MANAGER_WILL_CONTACT_YOU') : null);?>
<br><br>
<b><?php echo (defined('STRING_ORDER') ? constant('STRING_ORDER') : null);?>
 # <?php echo $_smarty_tpl->tpl_vars['orderID']->value;?>
 от <?php echo $_smarty_tpl->tpl_vars['order_time']->value;?>
</b><br>
---------------------------------------------------------------------------<br>
<?php echo (defined('CUSTOMER_FIRST_NAME') ? constant('CUSTOMER_FIRST_NAME') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['customer_firstname']->value;?>
<br>
<?php echo (defined('CUSTOMER_LAST_NAME') ? constant('CUSTOMER_LAST_NAME') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['customer_lastname']->value;?>
<br>
<?php if ($_smarty_tpl->tpl_vars['customer_email']->value != '') {
echo (defined('CUSTOMER_EMAIL') ? constant('CUSTOMER_EMAIL') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['customer_email']->value;?>
<br><?php }
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['customer_add_fields']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
echo $_smarty_tpl->tpl_vars['customer_add_fields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['customer_add_fields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_value'];?>
<br>
<?php
}
}
echo (defined('CUSTOMER_ADRESL') ? constant('CUSTOMER_ADRESL') : null);?>
: <?php if ($_smarty_tpl->tpl_vars['billing_address']->value != '') {
echo $_smarty_tpl->tpl_vars['billing_address']->value;
}
if ($_smarty_tpl->tpl_vars['billing_city']->value != '') {?>, <?php echo $_smarty_tpl->tpl_vars['billing_city']->value;
}
if ($_smarty_tpl->tpl_vars['billing_state']->value != '') {?>, <?php echo $_smarty_tpl->tpl_vars['billing_state']->value;
}
if ($_smarty_tpl->tpl_vars['billing_country']->value != '') {?>, <?php echo $_smarty_tpl->tpl_vars['billing_country']->value;
}?><br>
<?php if ($_smarty_tpl->tpl_vars['shipping_type']->value != '') {
echo (defined('STRING_SHIPPING_TYPE2') ? constant('STRING_SHIPPING_TYPE2') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['shipping_type']->value;
if ($_smarty_tpl->tpl_vars['shippingServiceInfo']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['shippingServiceInfo']->value;?>
)<?php }?> <?php if ($_smarty_tpl->tpl_vars['shipping_comments']->value != '') {?>(<?php echo $_smarty_tpl->tpl_vars['shipping_comments']->value;?>
)<?php }?><br><?php }
if ($_smarty_tpl->tpl_vars['payment_type']->value != '') {
echo (defined('STRING_PAYMENT_TYPE2') ? constant('STRING_PAYMENT_TYPE2') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['payment_type']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['payment_comments']->value != '') {?>(<?php echo $_smarty_tpl->tpl_vars['payment_comments']->value;?>
)<?php }?><br><?php }
if ($_smarty_tpl->tpl_vars['customer_comments']->value != '') {
echo (defined('STRING_CUSTOMER_COMMENTS') ? constant('STRING_CUSTOMER_COMMENTS') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['customer_comments']->value;?>
<br><?php }?>
<br><b><?php echo (defined('STRING_ORDER_CONTENT') ? constant('STRING_ORDER_CONTENT') : null);?>
</b><br>
---------------------------------------------------------------------------<br>
<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['content']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code']) {?>[<?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code'];?>
] <?php }
echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Quantity'];?>
 <?php echo (defined('ORDER_COUNT_F') ? constant('ORDER_COUNT_F') : null);?>
) = <?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PriceToShow'];?>
<br>
<?php if ($_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eproduct_filename']) {
echo (defined('ADMIN_DOWN_LOAD') ? constant('ADMIN_DOWN_LOAD') : null);?>
: <a href="<?php echo (defined('CONF_FULL_SHOP_URL') ? constant('CONF_FULL_SHOP_URL') : null);?>
index.php?do=get_file&amp;getFileParam=<?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['getFileParam'];?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['file_size'];?>
 MB)
<?php if ($_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eproduct_available_days']) {?>
<br>- <?php echo (defined('ADMIN_EPRODUCT_AVAILABLE_DAYS') ? constant('ADMIN_EPRODUCT_AVAILABLE_DAYS') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eproduct_available_days'];?>
 <?php echo (defined('ADMIN_DAYS') ? constant('ADMIN_DAYS') : null);?>

<?php }
if ($_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eproduct_download_times']) {?>
<br>- <?php echo (defined('ADMIN_REMANDER_EPRODUCT_DOWNLOAD_TIMES') ? constant('ADMIN_REMANDER_EPRODUCT_DOWNLOAD_TIMES') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eproduct_download_times'];?>
 <?php echo (defined('ADMIN_DOWNLOAD_TIMES') ? constant('ADMIN_DOWNLOAD_TIMES') : null);?>

<?php }
}
}
}
?>
<br>
<?php if ($_smarty_tpl->tpl_vars['discount']->value > 0) {
echo (defined('ADMIN_DISCOUNT') ? constant('ADMIN_DISCOUNT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
%: <?php echo $_smarty_tpl->tpl_vars['order_discount_ToShow']->value;?>
<br><?php }
if ($_smarty_tpl->tpl_vars['shipping_type']->value != '') {
echo (defined('ADMIN_SHIPPING_COST') ? constant('ADMIN_SHIPPING_COST') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>
<br><?php }
echo (defined('TABLE_TOTAL') ? constant('TABLE_TOTAL') : null);?>
: <?php echo $_smarty_tpl->tpl_vars['order_amount']->value;?>
<br>
<?php if ((defined('CONF_ORDER_ESCAPE') ? constant('CONF_ORDER_ESCAPE') : null) == 1) {?><br><?php echo (defined('CUSTOMER_ACTIVATE_DEACT') ? constant('CUSTOMER_ACTIVATE_DEACT') : null);?>
:<br>
<?php echo (defined('CONF_FULL_SHOP_URL') ? constant('CONF_FULL_SHOP_URL') : null);?>
index.php?deactivate=<?php echo $_smarty_tpl->tpl_vars['order_active_link']->value;?>
<br><?php }?>
<br>---<br>
<?php echo (defined('CUSTOMER_ACTIVATE_8') ? constant('CUSTOMER_ACTIVATE_8') : null);?>
 &quot;<?php echo (defined('CONF_SHOP_NAME') ? constant('CONF_SHOP_NAME') : null);?>
&quot;<br>
Http: <?php echo (defined('CONF_SHOP_URL') ? constant('CONF_SHOP_URL') : null);?>
<br>
E-mail: <?php echo (defined('CONF_GENERAL_EMAIL') ? constant('CONF_GENERAL_EMAIL') : null);?>
<br><br><?php }
}
