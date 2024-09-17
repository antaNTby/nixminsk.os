<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:48
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\admin\default.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec60f3e354_33334691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff5d18a02b9ff75c97e778b7afdb7e7a7d08ad2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\admin\\default.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ec60f3e354_33334691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="m-3 row row-cols-1 row-cols-md-3 g-3">
    <?php
$__section_dpt_index_0_loop = (is_array(@$_loop=smarty_modifier_count($_smarty_tpl->tpl_vars['antMenu']->value)) ? count($_loop) : max(0, (int) $_loop));
$__section_dpt_index_0_total = $__section_dpt_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_dpt_index'] = new Smarty_Variable(array());
if ($__section_dpt_index_0_total !== 0) {
for ($__section_dpt_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index'] = 0; $__section_dpt_index_0_iteration <= $__section_dpt_index_0_total; $__section_dpt_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index']++){
?>
    <?php $_smarty_tpl->_assignInScope('myMenu', $_smarty_tpl->tpl_vars['antMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index'] : null)]);?>
    <div class="col">
        <div class="card h-100 border-dark">
                                                                        <div class="card-header text-bg-secondary  h5">
                    <?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_name'];?>
<sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo $_smarty_tpl->tpl_vars['myMenu']->value['dpt_id'];?>
</sub>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $_smarty_tpl->_assignInScope('mySubMenu', $_smarty_tpl->tpl_vars['myMenu']->value);?>
                    <?php
$__section_sub_index_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['mySubMenu']->value['sub_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_sub_index_1_total = $__section_sub_index_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sub_index'] = new Smarty_Variable(array());
if ($__section_sub_index_1_total !== 0) {
for ($__section_sub_index_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] = 0; $__section_sub_index_1_iteration <= $__section_sub_index_1_total; $__section_sub_index_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']++){
?>
                    <li class="list-group-item"><a class="card-link text-start text-xl-center text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_href'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
" role="button"><?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_name'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25 text-decoration-none"><?php echo $_smarty_tpl->tpl_vars['mySubMenu']->value['sub_id'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] : null)];?>
</sub></a></li>
                    <?php
}
}
?>
                </ul>
                        </div>
    </div>
    <?php
}
}
?>
</div>

<?php }
}
