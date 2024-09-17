<?php
/* Smarty version 4.2.1, created on 2024-03-28 07:04:45
  from 'C:\OSPanel\domains\nixminsk.os\core\tpl\user\nano\home.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6604ec5d780137_95052646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988914e2e3b429357887204c5011cc490d3bb764' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\home.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ec5d780137_95052646 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="display-6 text-center">Приветствуем вас на сайте <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['rand_products']->value) {?>
<h4 class="fw-lighter">Случайно выбранные товары</h4>
<div class="row row-cols-1 row-cols-md-3 row-cols-xl-4 g-1 mb-1 mb-md-3">
    <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rand_products']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_6_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {?>
    <?php $_smarty_tpl->_assignInScope('_href', "product_".((string)$_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']).".html");?>
    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('_href', "index.php?productID=".((string)$_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('goto', "index.php?productID=".((string)$_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']));?>
    <div class="col">
        <div class="card h-100" role="button" onclick="let link=window.location='<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
'">
                            <?php if ($_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_path'] != '') {?>
                <picture class="p-0 p-md-2 overflow-hidden align-middle position-relative" style="height: 300px;aspect-ratio: initial!important; background-image: url('<?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_path'];?>
');box-shadow: 0 0 32px 32px white inset;" role="img" loading="lazy" aria-label="Random Products">
                                        <svg class="bi position-absolute top-0 start-0 p-1 bg-white text-danger" width="40" height="32" role="img" aria-label="Random Products">
                        <title><?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 купить в Минске</title>
                        <text id="rand-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
-title"><?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['brief_description'];?>
</text>
                        <use xlink:href="#shuffle">
                    </svg>
                </picture>
                <?php } else { ?>
                <picture class="p-0 p-md-2 overflow-hidden align-middle position-relative" style="height: 300px;padding: 1rem" role="image">
                    <svg class="bi d-block h-100" alt="<?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" fill-opacity="0.3">
                        <title>нет фото <?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</title>
                        <use xlink:href="#empty_images">
                    </svg>
                    <svg class="bi position-absolute top-0 start-0 p-1 bg-white text-danger" width="40" height="32" role="img" aria-label="Random Products">
                        <title><?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 купить в Минске</title>
                        <text id="rand-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
-title"><?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['brief_description'];?>
</text>
                        <use xlink:href="#shuffle">
                    </svg>
                </picture>
                <?php }?>
                            <div class="card-body">
                <h5 class="card-title fw-lighter" role="button"><span class="text-danger">[<?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code'];?>
]</span> <?php echo $_smarty_tpl->tpl_vars['rand_products']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</h5>
                            </div>
        </div>
    </div>
    <?php
}
}
?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['special_offers']->value) {?>
<h4 class="fw-lighter">Мы рекомендуем<?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?><a class='float-end me-1 opacity-50 adminlink' href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=catalog&amp;sub=special' title="Cписок рекомендованных на главной странице"><i class="bi bi-balloon-fill"></i></a><?php }?></h4>
<div class="row row-cols-1 row-cols-md-3 row-cols-xl-4 g-1 mb-1 mb-md-3">
    <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['special_offers']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_7_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {?>
    <?php $_smarty_tpl->_assignInScope('_href', "product_".((string)$_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']).".html");?>
    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('_href', "index.php?productID=".((string)$_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('goto', "index.php?productID=".((string)$_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']));?>
    <div class="col">
        <div class="card h-100" role="button" onclick="let link=window.location='<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
'">
                            <?php if ($_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_path'] != '') {?>
                <picture class="p-0 p-md-2 overflow-hidden align-middle position-relative" style="height: 300px;aspect-ratio: initial!important; background-image: url('<?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_path'];?>
');box-shadow: 0 0 32px 32px white inset;" role="img" aria-label="Recomended Products">
                                        <svg class="bi position-absolute top-0 start-0 p-1 bg-white text-danger" width="40" height="32" role="img" aria-label="Recomended Products">
                        <title><?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 купить в Минске</title>
                        <text id="rand-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
-title"><?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['brief_description'];?>
</text>
                        <use xlink:href="#activity">
                    </svg>
                </picture>
                <?php } else { ?>
                <picture class="p-0 p-md-2 overflow-hidden align-middle position-relative" style="height: 300px;padding: 1rem" role="image">
                    <svg class="bi d-block h-100" alt="<?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" fill-opacity="0.3">
                        <title>нет фото <?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</title>
                        <use xlink:href="#empty_images">
                    </svg>
                    <svg class="bi position-absolute top-0 start-0 p-1 bg-white text-danger" width="40" height="32" role="img" aria-label="Random Products">
                        <title><?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 купить в Минске</title>
                                                <use xlink:href="#activity">
                    </svg>
                </picture>
                <?php }?>
                            <div class="card-body">
                <h5 class="card-title fw-lighter" role="button"><span class="text-danger">[<?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code'];?>
]</span> <?php echo $_smarty_tpl->tpl_vars['special_offers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</h5>
                            </div>
        </div>
    </div>
    <?php
}
}
?>
</div>
<?php }
}
}
