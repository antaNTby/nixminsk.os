<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:45
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\user\nano\index__header_dashboard.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec5d739dc3_99818937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0daa855e66a6e56ba4637263e59bbb36dae4c8c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\index__header_dashboard.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ec5d739dc3_99818937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="px-3 py-2 text-white bg-navbar">
    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex d-inline-flex my-2 my-md-0 me-md-auto align-items-center text-decoration-none">
                <img alt="nix.by logo" src="/<?php echo (defined('ADMIN_IMAGES_DEFAULT_PATH') ? constant('ADMIN_IMAGES_DEFAULT_PATH') : null);?>
/<?php echo (defined('CONF_LOGO_FILE') ? constant('CONF_LOGO_FILE') : null);?>
" height="64" />
                <span class="d-none d-md-flex px-3 nix-brand">nix.by</span>
            </a>
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 ms-md-5 text-small">
                <li class="d-none d-md-block me-md-5 pe-md-5 navbar-text">
                    <span class="lh-1" data-bs-toggle="collapse" data-bs-target="#navbarToggleContacts" aria-controls="navbarToggleContacts" aria-expanded="false" role="button" aria-label="Toggle Contacts">
                        <i class="bi bi-telephone"></i> tel. +375 (17) 2708895<br>
                        <i class="bi bi-envelope"></i> e-mail: 2842895@gmail.com
                    </span>
                </li>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
                <li>
                    <a class="nav-link dropdown-toggle text-white pb-0" role="button" id="currencytopDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?><svg class="bi d-block mx-auto mb-1" width="32" height="32">
                            <use xlink:href="#coin">
                        </svg>
                        <?php } else { ?><svg class="bi d-block mx-auto mb-1" width="32" height="32">
                            <use xlink:href="#calculator">
                        </svg><?php }?>
                        <?php
$__section_d_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_2_total = $__section_d_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_2_total !== 0) {
for ($__section_d_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_2_iteration <= $__section_d_2_total; $__section_d_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
if ($_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] == $_smarty_tpl->tpl_vars['current_currency']->value) {
echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];
}
}
}
?></a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="currencytopDropdown" role="menu" style="z-index: 2000;">
                        <?php
$__section_d_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_3_total = $__section_d_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_3_total !== 0) {
for ($__section_d_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_3_iteration <= $__section_d_3_total; $__section_d_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
?>
                        <?php if (($_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] != $_smarty_tpl->tpl_vars['current_currency']->value)) {?>
                        <?php if (($_smarty_tpl->tpl_vars['log']->value == '' && !(($_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] == 4) || ($_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] == 5)))) {?>
                        <a class="dropdown-item d-flex justify-content-between align-items-center disabled" aria-disabled="true"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];?>
<span class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['code'];?>
</span></a>
                        <?php } else { ?>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="#" onclick="document.getElementById('Cart_ChangeCurrencyFormPrice_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null);?>
').submit(); return false"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];?>
<span class="badge bg-success"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['code'];?>
</span></a>
                        <?php }?>
                        <?php }?>
                        <?php
}
}
?>
                    </ul>
                </li>
                <?php
$__section_d_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_4_total = $__section_d_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_4_total !== 0) {
for ($__section_d_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_4_iteration <= $__section_d_4_total; $__section_d_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
?>
                <form method="post" name='ChangeCurrencyForm' id='Cart_ChangeCurrencyFormPrice_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null);?>
' role="form" style="display: inline"><input type="hidden" name='current_currency' value="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value) {?><input type="hidden" name="InvId" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['orderID'];?>
"><?php }?>
                </form>
                <?php
}
}
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['log']->value != '') {?>
                <li>
                    <a class="nav-link dropdown-toggle text-white pb-0" role="button" id="cabinetDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
                        <svg class="bi d-block mx-auto mb-1" width="32" height="32">
                            <use xlink:href="#isadmin" /></svg>
                        Admin
                        <?php } else { ?>
                        <svg class="bi d-block mx-auto mb-1" width="32" height="32">
                            <use xlink:href="#people-circle" /></svg>
                        Кабинет
                        <?php }?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="cabinetDropdown" role="menu" style="z-index: 2000;">
                        <li><span class="dropdown-item-text"><?php echo $_smarty_tpl->tpl_vars['log']->value;?>
</span></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href='index.php?contact_info=yes'><?php echo (defined('STRING_CONTACT_INFORMATION_DOWN_CASE') ? constant('STRING_CONTACT_INFORMATION_DOWN_CASE') : null);?>
</a></li>
                        <li><a class="dropdown-item" href='index.php?address_book=yes'><?php echo (defined('STRING_ADDRESS_BOOK') ? constant('STRING_ADDRESS_BOOK') : null);?>
</a></li>
                        <li><a class="dropdown-item" href='index.php?order_history=yes'><?php echo (defined('STRING_ORDER_HISTORY') ? constant('STRING_ORDER_HISTORY') : null);?>
</a></li>
                        <li><a class="dropdown-item" href='index.php?visit_history=yes'><?php echo (defined('STRING_VISIT_HISTORY') ? constant('STRING_VISIT_HISTORY') : null);?>
</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item adminlink" href='admin.php'>Администрирование</a></li>
                        <?php }?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php?logout=yes"><?php echo (defined('LOGOUT_LINK') ? constant('LOGOUT_LINK') : null);?>
</a>
                    </ul>
                </li>
                <?php } else { ?>
                <li>
                    <a class="nav-link opacity-50 text-white login" href="#" data-bs-toggle="modal" data-bs-target="#modalAuth" title="<?php echo (defined('AUTH_TH') ? constant('AUTH_TH') : null);?>
">
                        <svg class="bi d-block mx-auto mb-1" width="32" height="32">
                            <use xlink:href="#people-circle" /></svg>
                        Кабинет
                    </a>
                </li>
                <?php }?>
                            </ul>
        </div>
    </div>
</div><?php }
}
