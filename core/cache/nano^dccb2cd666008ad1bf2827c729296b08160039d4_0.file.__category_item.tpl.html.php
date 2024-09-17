<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:45
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\user\nano\blocks\__category_item.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec5d721355_80045685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dccb2cd666008ad1bf2827c729296b08160039d4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\blocks\\__category_item.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ec5d721355_80045685 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {
$_smarty_tpl->_assignInScope('ahref', "category_".((string)$_smarty_tpl->tpl_vars['Item']->value['categoryID']).".html");
} else {
$_smarty_tpl->_assignInScope('ahref', "index.php?categoryID=".((string)$_smarty_tpl->tpl_vars['Item']->value['categoryID']));
}?>

<?php if ((defined('CONF_SHOW_COUNTPROD') ? constant('CONF_SHOW_COUNTPROD') : null) == 1) {
$_smarty_tpl->_assignInScope('productCountBadge', "<span class='badge bg-primary opacity-75 text-light rounded-pill'>".((string)$_smarty_tpl->tpl_vars['Item']->value['products_count'])."</span>");
}
if ($_smarty_tpl->tpl_vars['Item']->value['parent'] == 1) {
$_smarty_tpl->_assignInScope('uppercase', " text-uppercase");
}?>

<?php if ($_smarty_tpl->tpl_vars['Aclass']->value == "dropdown") {?>
<li><a class="dropdown-item d-flex justify-content-between align-items-center <?php echo $_smarty_tpl->tpl_vars['uppercase']->value;
if ($_smarty_tpl->tpl_vars['Item']->value['categoryID'] == $_smarty_tpl->tpl_vars['categoryID']->value) {?> text-primary fw-bold<?php } else { ?> text-primary fw-lighter<?php }?>" <?php if ($_smarty_tpl->tpl_vars['Item']->value['categoryID'] == $_smarty_tpl->tpl_vars['categoryID']->value) {?> aria-current="true"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['ahref']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];
echo $_smarty_tpl->tpl_vars['productCountBadge']->value;?>
</a></li>

<?php } elseif ($_smarty_tpl->tpl_vars['Aclass']->value == "nav-link") {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['ahref']->value;?>
" class="nav-link mb-1 me-1 flex-md-fill text-md-center <?php echo $_smarty_tpl->tpl_vars['uppercase']->value;?>
 text-primary<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> fw-bolder<?php } else { ?> fw-lighter<?php }?> border border-primary item-mini" <?php echo $_smarty_tpl->tpl_vars['aria_current']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
</a>

<?php } else { ?>
<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?php echo $_smarty_tpl->tpl_vars['uppercase']->value;?>
 text-primary<?php if ($_smarty_tpl->tpl_vars['Item']->value['categoryID'] == $_smarty_tpl->tpl_vars['categoryID']->value) {?> fw-bold<?php } else { ?> fw-lighter<?php }?> item-mini" <?php if ($_smarty_tpl->tpl_vars['Item']->value['categoryID'] == $_smarty_tpl->tpl_vars['categoryID']->value) {?> aria-current="true"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['ahref']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];
echo $_smarty_tpl->tpl_vars['productCountBadge']->value;?>

</a>
<?php }
}
}
