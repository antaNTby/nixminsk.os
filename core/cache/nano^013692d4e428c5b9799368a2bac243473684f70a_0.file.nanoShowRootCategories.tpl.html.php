<?php
/* Smarty version 4.2.1, created on 2024-09-04 13:45:14
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\blocks\nanoShowRootCategories.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66d83a3a910029_81560208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '013692d4e428c5b9799368a2bac243473684f70a' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\blocks\\nanoShowRootCategories.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/__category_item.tpl.html' => 2,
  ),
),false)) {
function content_66d83a3a910029_81560208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['CategoriesArray']->value) {
$_smarty_tpl->_assignInScope('CategoriesArray_count', smarty_modifier_count($_smarty_tpl->tpl_vars['CategoriesArray']->value));
if ($_smarty_tpl->tpl_vars['CategoriesArray_count']->value) {?>
<div class="d-none d-md-flex justify-content-center">
        <nav class="my-0 pt-1 nav nav-pills flex-row">
        <?php
$__section_h_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_h_0_start = min(1, $__section_h_0_loop);
$__section_h_0_total = min(($__section_h_0_loop - $__section_h_0_start), $__section_h_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_h'] = new Smarty_Variable(array());
if ($__section_h_0_total !== 0) {
for ($__section_h_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] = $__section_h_0_start; $__section_h_0_iteration <= $__section_h_0_total; $__section_h_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']++){
?>

        <?php $_smarty_tpl->_assignInScope('cnt_h', $_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['products_count']);?>
        <?php if ($_smarty_tpl->tpl_vars['product_category_path']->value[0]['categoryID'] == $_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['categoryID']) {?>
        <?php $_smarty_tpl->_assignInScope('active', " active");?>
        <?php $_smarty_tpl->_assignInScope('aria_current', " aria-current='page'");?>
        <?php }?>
                     <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)],'Aclass'=>"nav-link",'active'=>$_smarty_tpl->tpl_vars['active']->value,'aria_current'=>$_smarty_tpl->tpl_vars['aria_current']->value), 0, true);
?>
        <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php $_smarty_tpl->_assignInScope('aria_current', '');?>
        <?php
}
}
?>
                </nav>
</div>

<div class="d-flex flex-row d-md-none justify-content-center">
        <?php $_smarty_tpl->_assignInScope('OneHalf', $_smarty_tpl->tpl_vars['CategoriesArray_count']->value/1);?>
    <?php $_smarty_tpl->_assignInScope('ItemsPerColumn', ceil($_smarty_tpl->tpl_vars['OneHalf']->value));?>
         <div class="btn-group w-100">
        <?php if ($_smarty_tpl->tpl_vars['Caption']->value) {?>
        <button type="button" class="btn btn-outline-primary flex-grow-1">
            <div class="px-2 d-flex justify-content-between align-items-baseline"><?php echo $_smarty_tpl->tpl_vars['Caption']->value;?>
<span class="badge bg-primary opacity-75"><?php echo $_smarty_tpl->tpl_vars['CategoriesArray_count']->value;?>
</span></div>
        </button>
        <button type="button" class="btn btn-primary flex-shrink-1 dropdown-toggle dropdown-toggle-split"
        id="dropdownCategoryArray"
        data-bs-toggle="dropdown"
        data-bs-auto-close="true"
        aria-expanded="false"
        data-bs-offset="0,10"
        data-bs-reference="parent"
        title="Показать список"
        >
        <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <?php }?>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownCategoryArray" style="z-index: 1030;">
            <?php if ($_smarty_tpl->tpl_vars['Caption']->value) {?><li>
                <h6 class="dropdown-header"><?php echo $_smarty_tpl->tpl_vars['Caption']->value;?>
</h6>
            </li><?php }?>
            <?php
$__section_r_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_1_start = min(0, $__section_r_1_loop);
$__section_r_1_total = min(($__section_r_1_loop - $__section_r_1_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_1_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_1_total !== 0) {
for ($__section_r_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_1_start; $__section_r_1_iteration <= $__section_r_1_total; $__section_r_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['product_category_path']->value[0]['categoryID'] == $_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]['categoryID']) {?>
            <?php $_smarty_tpl->_assignInScope('active', " active");?>
            <?php $_smarty_tpl->_assignInScope('aria_current', " aria-current='page'");?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]['categoryID'] > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)],'Aclass'=>"dropdown",'active'=>$_smarty_tpl->tpl_vars['active']->value), 0, true);
?>
            <?php }?>
            <?php
}
}
?>
        </ul>
    </div>
</div>




<?php }
} else { ?>
<div class="alert alert-danger" role="alert"><?php echo (defined('STRING_NO_CATEGORIES') ? constant('STRING_NO_CATEGORIES') : null);?>
</div>
<?php }?>


<?php }
}
