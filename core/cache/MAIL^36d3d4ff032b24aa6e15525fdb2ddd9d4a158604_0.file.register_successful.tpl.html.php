<?php
/* Smarty version 4.2.1, created on 2023-12-07 15:40:54
  from 'W:\domains\nixminsk.os\core\tpl\email\register_successful.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6571bd56894355_20534902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d3d4ff032b24aa6e15525fdb2ddd9d4a158604' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\email\\register_successful.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6571bd56894355_20534902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo (defined('EMAIL_HELLO') ? constant('EMAIL_HELLO') : null);?>
!
<br><br>
<?php echo (defined('EMAIL_YOUVE_BEEN_REGISTERED_AT') ? constant('EMAIL_YOUVE_BEEN_REGISTERED_AT') : null);?>
 <?php echo (defined('CONF_SHOP_NAME') ? constant('CONF_SHOP_NAME') : null);?>

<?php if ((defined('CONF_ENABLE_REGCONFIRMATION') ? constant('CONF_ENABLE_REGCONFIRMATION') : null)) {?>
<br><br>
<?php echo smarty_modifier_replace(smarty_modifier_replace((defined('CONF_EMAIL_REGCONFIRMATION') ? constant('CONF_EMAIL_REGCONFIRMATION') : null),"[code]",$_smarty_tpl->tpl_vars['ActCode']->value),"[codeurl]",$_smarty_tpl->tpl_vars['ActURL']->value);?>

<?php }?>
<br><br><br>
<?php echo (defined('EMAIL_YOUR_REGTRATION_INFO') ? constant('EMAIL_YOUR_REGTRATION_INFO') : null);?>
<br>
---------------------------------------------------------------------------<br><br>
<?php echo (defined('CUSTOMER_LOGIN') ? constant('CUSTOMER_LOGIN') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
<br>
<?php echo (defined('CUSTOMER_PASSWORD') ? constant('CUSTOMER_PASSWORD') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['cust_password']->value;?>
<br>
<?php echo (defined('CUSTOMER_FIRST_NAME') ? constant('CUSTOMER_FIRST_NAME') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
<br>
<?php echo (defined('CUSTOMER_LAST_NAME') ? constant('CUSTOMER_LAST_NAME') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
<br>
<?php echo (defined('CUSTOMER_EMAIL') ? constant('CUSTOMER_EMAIL') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
<br>
<?php if ($_smarty_tpl->tpl_vars['additional_field_values']->value) {
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['additional_field_values']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
echo $_smarty_tpl->tpl_vars['additional_field_values']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['additional_field_values']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_value'];?>
<br>
<?php
}
}
}
if ($_smarty_tpl->tpl_vars['addresses']->value) {
echo (defined('STRING_ADDRESSES_HAS_BEEN_ADDED') ? constant('STRING_ADDRESSES_HAS_BEEN_ADDED') : null);?>
:
<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['addresses']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['addresses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addressStr'],"<br>","\n");?>

<?php
}
}
?><br>
<?php }?>
<br><br>---------------------------------------------------------------------------<br>
<?php echo (defined('CUSTOMER_ACTIVATE_8') ? constant('CUSTOMER_ACTIVATE_8') : null);?>
 &quot;<?php echo (defined('CONF_SHOP_NAME') ? constant('CONF_SHOP_NAME') : null);?>
&quot;<br>
Http: <?php echo (defined('CONF_SHOP_URL') ? constant('CONF_SHOP_URL') : null);?>
<br>
E-mail: <?php echo (defined('CONF_GENERAL_EMAIL') ? constant('CONF_GENERAL_EMAIL') : null);?>
<br><br><?php }
}
