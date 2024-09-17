<?php
/* Smarty version 4.2.1, created on 2024-02-19 10:36:43
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\modules_shipping.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65d3050b0d7606_52522824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ac03456fe196fb1cb7067ed39afe3ec5271e47' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\modules_shipping.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d3050b0d7606_52522824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['constant_managment']->value) {?>
<h2 class="fw-lighter"><?php echo $_smarty_tpl->tpl_vars['shipping_module']->value->title;?>
<sup class="text-danger"><?php echo $_smarty_tpl->tpl_vars['shipping_module']->value->myClassName;?>
</sup></h2>
<?php if ($_smarty_tpl->tpl_vars['settings']->value) {?>
<form action="" method=POST name="formmodule" id="formmodule">
    <div class="my-3 table-responsive-md">
        <table class="table align-middle bg-body">
            <caption><?php echo $_smarty_tpl->tpl_vars['shipping_module']->value->title;?>
</caption>
            <thead>
                <tr>
                    <th width="40%">Значение</th>
                    <th class="text-center">Описание</th>
                    <th class="text-center">
                        <button onclick="document.getElementById('save').name='save';document.getElementById('formmodule').submit(); return false" class="btn btn-success btn-sm text-nowrap"><?php echo (defined('STRING_DO_SAVE') ? constant('STRING_DO_SAVE') : null);?>
&nbsp;<i class="bi bi-save2"></i></button>
                        <a role="button" href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=modules&amp;sub=shipping' class="btn btn-dark btn-sm"><?php echo (defined('GOBACK_BUTTON') ? constant('GOBACK_BUTTON') : null);?>
&nbsp;<i class="bi bi-arrow-return-left"></i></a>
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['settings']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr>
                    <td class="text-start" width="40%"><?php echo $_smarty_tpl->tpl_vars['controls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</td>
                    <td class="text-start" colspan=3><b><?php echo $_smarty_tpl->tpl_vars['settings']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['settings_title'];?>
</b> <sub class="text-danger"><var><?php echo $_smarty_tpl->tpl_vars['settings']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['settings_constant_name'];?>
</var><sub><?php echo $_smarty_tpl->tpl_vars['settings']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['settingsID'];?>
:<?php echo $_smarty_tpl->tpl_vars['settings']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['settings_groupID'];?>
</sub></sub><br><?php echo $_smarty_tpl->tpl_vars['settings']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['settings_description'];?>
</td>
                </tr>
                <?php
}
}
?>
            </tbody>
        </table>
    </div>
    <input type="hidden" name="name" value="1" id="save">
    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
        <button onclick="document.getElementById('save').name='save';document.getElementById('formmodule').submit(); return false" class="btn btn-success btn-lg"><?php echo (defined('STRING_DO_SAVE') ? constant('STRING_DO_SAVE') : null);?>
&nbsp;<i class="bi bi-save2"></i></button>
        <a role="button" href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=modules&amp;sub=shipping' class="btn btn-dark btn-lg"><?php echo (defined('GOBACK_BUTTON') ? constant('GOBACK_BUTTON') : null);?>
&nbsp;<i class="bi bi-arrow-return-left"></i></a>
    </div>
</form>
<?php } else { ?>
<h3 class="text-danger text-uppercase"> Модуль не имеет настроек </h3>
<div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
    <a role="button" href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=modules&amp;sub=shipping' class="btn btn-dark btn-lg"><?php echo (defined('GOBACK_BUTTON') ? constant('GOBACK_BUTTON') : null);?>
&nbsp;<i class="bi bi-arrow-return-left"></i></a>
</div>
<?php }
} else { ?>
<hr>
<h4>Установленные Модули доставки <span class="ms-2 badge bg-primary opacity-50"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['shipping_configs']->value);?>
</span></h4>
<div class="mb-3 table-responsive">
    <table class="table table-hover align-middle bg-white">
        <caption>Установленные Модули доставки</caption>
        <thead>
            <tr>
                <th class="text-start"><?php echo (defined('SHMODULES_INSTALLED_CONFIGS') ? constant('SHMODULES_INSTALLED_CONFIGS') : null);?>
</th>
                <th class="text-center"><?php echo (defined('STRING_MODULE_ACTIONS') ? constant('STRING_MODULE_ACTIONS') : null);?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_configs']->value, '_shConfig');
$_smarty_tpl->tpl_vars['_shConfig']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_shConfig']->value) {
$_smarty_tpl->tpl_vars['_shConfig']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('InstalledModuleConfigs', 1);?>
            <tr>
                <td width="50%"><?php echo $_smarty_tpl->tpl_vars['_shConfig']->value['ConfigName'];?>
<sup class="text-danger"><?php echo $_smarty_tpl->tpl_vars['_shConfig']->value['ConfigClassName'];?>
</sup></td>
                <td class="d-grid gap-2 d-md-flex justify-content-end">
                    <a role="button" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=modules&sub=shipping&setting_up=<?php echo $_smarty_tpl->tpl_vars['_shConfig']->value['ConfigID'];?>
" class="btn btn-outline-primary">Настроить&nbsp;<i class="bi bi-gear-wide"></i></a>
                    <button role="button" onclick="confirmDelete(<?php echo $_smarty_tpl->tpl_vars['_shConfig']->value['ConfigID'];?>
,'<?php echo (defined('QUESTION_DELETE_CONFIRMATION') ? constant('QUESTION_DELETE_CONFIRMATION') : null);?>
', '<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=modules&sub=shipping&uninstall='); return false;" class="btn btn-danger" title="Деинсталлировать"><i class="bi bi-x"></i></button>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if (!$_smarty_tpl->tpl_vars['InstalledModuleConfigs']->value) {?>
            <tr class="text-bg-danger">
                <td class="text-center" colspan="2"><?php echo (defined('ADMIN_NO_INSTALLED_MODULE_CONFS') ? constant('ADMIN_NO_INSTALLED_MODULE_CONFS') : null);?>
</td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<hr>
<h4>Доступные Модули доставки <span class="ms-2 badge bg-secondary opacity-50"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['shipping_modules']->value);?>
</span></h4>
<div class="mb-3 row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
    <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shipping_modules']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <div class="col">
        <div class="card h-100 border-primary">
            <svg class="m-3 card-img-top d-block mx-auto mb-1 text-primary" width="64" height="64">
                <use xlink:href="#ship" /></svg>
            <div class="card-body">
                <h5 class="card-title text-primary text-center"><?php echo $_smarty_tpl->tpl_vars['shipping_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->title;?>
</h5>
                <p class="h-50 card-text"><?php echo $_smarty_tpl->tpl_vars['shipping_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->description;?>

                    <br>
                    <small class="badge bg-danger"><?php echo $_smarty_tpl->tpl_vars['shipping_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->myClassName;?>
</small>
                </p>
            </div>
            <div class="card-footer text-end bg-transparent">
                <?php if ($_smarty_tpl->tpl_vars['shipping_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->ModuleType || !$_smarty_tpl->tpl_vars['shipping_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->is_installed()) {?>
                <a role="button" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=modules&amp;sub=shipping&amp;install=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" class="btn btn-outline-primary"><?php echo (defined('STRING_MODULE_INSTALL') ? constant('STRING_MODULE_INSTALL') : null);?>
&nbsp;<i class="bi bi-download"></i></a>
                <?php }?>
            </div>
        </div>
    </div>
    <?php
}
}
?>
</div>
<?php }?>
<div class="my-5 alert alert-info alert-dismissible fade show" role="alert">
    <span class="fw-bold"><?php echo (defined('USEFUL_FOR_YOU') ? constant('USEFUL_FOR_YOU') : null);?>
</span>
    <?php echo (defined('ALERT_ADMIN19') ? constant('ALERT_ADMIN19') : null);?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }
}
