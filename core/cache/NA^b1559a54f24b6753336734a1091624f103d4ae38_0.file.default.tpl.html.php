<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:33
  from 'W:\domains\nixminsk.os\core\tpl\admin\default.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f8d3747d2_89864553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1559a54f24b6753336734a1091624f103d4ae38' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\default.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f8d3747d2_89864553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
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
