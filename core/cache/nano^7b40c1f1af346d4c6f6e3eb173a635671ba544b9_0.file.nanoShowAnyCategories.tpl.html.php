<?php
/* Smarty version 4.2.1, created on 2024-03-29 17:36:40
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\blocks\nanoShowAnyCategories.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6606d1f817da06_88721915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b40c1f1af346d4c6f6e3eb173a635671ba544b9' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\blocks\\nanoShowAnyCategories.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/__category_item.tpl.html' => 10,
  ),
),false)) {
function content_6606d1f817da06_88721915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['CategoriesArray']->value) {
$_smarty_tpl->_assignInScope('CategoriesArray_count', smarty_modifier_count($_smarty_tpl->tpl_vars['CategoriesArray']->value));?>

<?php if ($_smarty_tpl->tpl_vars['Caption']->value) {?>
<div class="d-none d-sm-block mb-1">
    <div class="d-flex justify-content-between align-items-baseline text-secondary"><?php echo $_smarty_tpl->tpl_vars['Caption']->value;?>
<span class="badge bg-primary opacity-75"><?php echo $_smarty_tpl->tpl_vars['CategoriesArray_count']->value;?>
</span></div>
</div>
<?php }?>
<div class="d-block d-sm-none">
        <?php $_smarty_tpl->_assignInScope('OneHalf', $_smarty_tpl->tpl_vars['CategoriesArray_count']->value/1);?>
    <?php $_smarty_tpl->_assignInScope('ItemsPerColumn', ceil($_smarty_tpl->tpl_vars['OneHalf']->value));?>
         <div class="btn-group w-100">
        <?php if ($_smarty_tpl->tpl_vars['Caption']->value) {?>
        <button type="button" class="btn btn-outline-primary">
            <div class="d-flex px-2 flex-shrink-1 justify-content-between align-items-baseline"><?php echo $_smarty_tpl->tpl_vars['Caption']->value;?>
<span class="badge bg-primary opacity-75"><?php echo $_smarty_tpl->tpl_vars['CategoriesArray_count']->value;?>
</span></div>
        </button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
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
$__section_r_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_8_start = min(0, $__section_r_8_loop);
$__section_r_8_total = min(($__section_r_8_loop - $__section_r_8_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_8_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_8_total !== 0) {
for ($__section_r_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_8_start; $__section_r_8_iteration <= $__section_r_8_total; $__section_r_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]['categoryID'] > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)],'Aclass'=>"dropdown"), 0, true);
?>
            <?php }?>
            <?php
}
}
?>
        </ul>
    </div>
</div>
<div class="d-none d-sm-block d-lg-none">
        <?php $_smarty_tpl->_assignInScope('OneHalf', $_smarty_tpl->tpl_vars['CategoriesArray_count']->value/2);?>
    <?php $_smarty_tpl->_assignInScope('ItemsPerColumn', ceil($_smarty_tpl->tpl_vars['OneHalf']->value));?>
    <div class="row row-cols-2 g-3">
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_9_start = min(0, $__section_r_9_loop);
$__section_r_9_total = min(($__section_r_9_loop - $__section_r_9_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_9_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_9_total !== 0) {
for ($__section_r_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_9_start; $__section_r_9_iteration <= $__section_r_9_total; $__section_r_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_10_start = (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value + $__section_r_10_loop) : min((int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value, $__section_r_10_loop);
$__section_r_10_total = min(($__section_r_10_loop - $__section_r_10_start), $__section_r_10_loop);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_10_total !== 0) {
for ($__section_r_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_10_start; $__section_r_10_iteration <= $__section_r_10_total; $__section_r_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</div>
<div class="d-none d-lg-block d-xxl-none">
        <?php $_smarty_tpl->_assignInScope('OneThird', $_smarty_tpl->tpl_vars['CategoriesArray_count']->value/3);?>
    <?php $_smarty_tpl->_assignInScope('ItemsPerColumn', ceil($_smarty_tpl->tpl_vars['OneThird']->value));?>
    <?php $_smarty_tpl->_assignInScope('DoubleCount', $_smarty_tpl->tpl_vars['ItemsPerColumn']->value+$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);?>
    <div class="row row-cols-3 g-2">
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_11_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_11_start = min(0, $__section_r_11_loop);
$__section_r_11_total = min(($__section_r_11_loop - $__section_r_11_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_11_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_11_total !== 0) {
for ($__section_r_11_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_11_start; $__section_r_11_iteration <= $__section_r_11_total; $__section_r_11_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_12_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_12_start = (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value + $__section_r_12_loop) : min((int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value, $__section_r_12_loop);
$__section_r_12_total = min(($__section_r_12_loop - $__section_r_12_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_12_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_12_total !== 0) {
for ($__section_r_12_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_12_start; $__section_r_12_iteration <= $__section_r_12_total; $__section_r_12_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_13_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_13_start = (int)@$_smarty_tpl->tpl_vars['DoubleCount']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['DoubleCount']->value + $__section_r_13_loop) : min((int)@$_smarty_tpl->tpl_vars['DoubleCount']->value, $__section_r_13_loop);
$__section_r_13_total = min(($__section_r_13_loop - $__section_r_13_start), $__section_r_13_loop);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_13_total !== 0) {
for ($__section_r_13_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_13_start; $__section_r_13_iteration <= $__section_r_13_total; $__section_r_13_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</div>
<div class="d-none d-xxl-block">
        <?php $_smarty_tpl->_assignInScope('OneQuarter', $_smarty_tpl->tpl_vars['CategoriesArray_count']->value/4);?>
    <?php $_smarty_tpl->_assignInScope('ItemsPerColumn', ceil($_smarty_tpl->tpl_vars['OneQuarter']->value));?>
    <?php $_smarty_tpl->_assignInScope('DoubleCount', $_smarty_tpl->tpl_vars['ItemsPerColumn']->value+$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);?>
    <?php $_smarty_tpl->_assignInScope('TripleCount', $_smarty_tpl->tpl_vars['DoubleCount']->value+$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);?>
    <div class="row row-cols-4 g-1">
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_14_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_14_start = min(0, $__section_r_14_loop);
$__section_r_14_total = min(($__section_r_14_loop - $__section_r_14_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_14_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_14_total !== 0) {
for ($__section_r_14_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_14_start; $__section_r_14_iteration <= $__section_r_14_total; $__section_r_14_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_15_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_15_start = (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value + $__section_r_15_loop) : min((int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value, $__section_r_15_loop);
$__section_r_15_total = min(($__section_r_15_loop - $__section_r_15_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_15_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_15_total !== 0) {
for ($__section_r_15_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_15_start; $__section_r_15_iteration <= $__section_r_15_total; $__section_r_15_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_16_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_16_start = (int)@$_smarty_tpl->tpl_vars['DoubleCount']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['DoubleCount']->value + $__section_r_16_loop) : min((int)@$_smarty_tpl->tpl_vars['DoubleCount']->value, $__section_r_16_loop);
$__section_r_16_total = min(($__section_r_16_loop - $__section_r_16_start), (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value < 0 ? $__section_r_16_loop : (int)@$_smarty_tpl->tpl_vars['ItemsPerColumn']->value);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_16_total !== 0) {
for ($__section_r_16_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_16_start; $__section_r_16_iteration <= $__section_r_16_total; $__section_r_16_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-group">
                <?php
$__section_r_17_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CategoriesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_17_start = (int)@$_smarty_tpl->tpl_vars['TripleCount']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['TripleCount']->value + $__section_r_17_loop) : min((int)@$_smarty_tpl->tpl_vars['TripleCount']->value, $__section_r_17_loop);
$__section_r_17_total = min(($__section_r_17_loop - $__section_r_17_start), $__section_r_17_loop);
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_17_total !== 0) {
for ($__section_r_17_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = $__section_r_17_start; $__section_r_17_iteration <= $__section_r_17_total; $__section_r_17_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                <?php $_smarty_tpl->_subTemplateRender("file:blocks/__category_item.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Item'=>$_smarty_tpl->tpl_vars['CategoriesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]), 0, true);
?>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</div>
<?php }
}
}
