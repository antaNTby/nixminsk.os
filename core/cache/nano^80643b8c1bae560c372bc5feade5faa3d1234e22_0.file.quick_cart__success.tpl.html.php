<?php
/* Smarty version 4.2.1, created on 2024-02-08 11:52:23
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\quick_cart__success.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65c49647326160_28274408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80643b8c1bae560c372bc5feade5faa3d1234e22' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\quick_cart__success.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c49647326160_28274408 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="display-2">
    <?php if ((defined('CONF_DISP_ORDERNUM') ? constant('CONF_DISP_ORDERNUM') : null) == 1) {?>
    <?php echo (defined('STRING_ORDER_NUMBER') ? constant('STRING_ORDER_NUMBER') : null);?>
: <span class="text-success fw-bolder">#<?php echo zeroFill($_GET['quick_cart_success']);?>
</span>
    <?php }?>
</h1>
<div class="m-2 p-3 bg-success bg-gradient bg-opacity-25">
    <h2 id="QUICK_CART"><?php echo (defined('STRING_ORDER_RESULT_SUCCESS') ? constant('STRING_ORDER_RESULT_SUCCESS') : null);?>

    <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == 'yes') {?>
    <small class="float-end"><a id='adminEditOrder' class='btn btn-link' href='admin.php?dpt=custord&sub=orders&orders_detailed=yes&orderID=<?php echo $_GET['quick_cart_success'];?>
'><i class="bi bi-gear"></i></a></small><?php }?>
</h2>

    <p>
        <?php if ((defined('CONF_ACTIVATE_ORDER') ? constant('CONF_ACTIVATE_ORDER') : null) == 1) {?>
        <?php echo (defined('STRING_ORDER_PLACED_ACTIVATE') ? constant('STRING_ORDER_PLACED_ACTIVATE') : null);?>

        <?php } else { ?>
        <?php echo (defined('STRING_ORDER_PLACED') ? constant('STRING_ORDER_PLACED') : null);?>

        <?php }?>
    </p>
</div>
<div class="p-2">
    <?php if ($_smarty_tpl->tpl_vars['after_processing_html']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['after_processing_html']->value;?>

    <?php }?>
</div><?php }
}
