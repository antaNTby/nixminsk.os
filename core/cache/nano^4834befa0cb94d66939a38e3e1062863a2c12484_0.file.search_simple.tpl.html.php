<?php
/* Smarty version 4.2.1, created on 2024-03-19 16:15:18
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\search_simple.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65f98fe6444645_41061863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4834befa0cb94d66939a38e3e1062863a2c12484' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\search_simple.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f98fe6444645_41061863 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="tpl_SearchPage" value="1">


<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 0) {?>

<table class="table table-sm table-hover table-striped table-bordered mydatatable" id="simple_searchDT">
    <thead class="bg-secondary text-light"></thead>
</table>

<?php } else { ?>

    <?php if ($_smarty_tpl->tpl_vars['products_to_show']->value) {?>
        <div class="my-3 p-3 bg-light bg-gradient" id="cardsPage">
            <div class="p-2 text-center text-secondary lh-1" id="Info_string"><?php echo $_smarty_tpl->tpl_vars['Info_string']->value;?>
</div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-1 g-md-3">
                <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['products_to_show']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {?>
                <?php $_smarty_tpl->_assignInScope('_href', "product_".((string)$_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']).".html");?>
                <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('_href', "index.php?productID=".((string)$_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']));?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('goto', "index.php?productID=".((string)$_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID']));?>
                <div class="col">
                    <div class="card px-1 pt-1 h-100 shadow hover-shadow-on">
                        <picture class="p-0 p-md-2 card-img-top ratio ratio-1x1" aria-label="Products" height="1" onclick="let link=window.location='<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
'" role="button">
                        <?php if ($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_path'] != '') {?>
                            <img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" loading="lazy" style="aspect-ratio: initial!important;">
                        <?php } else { ?>
                            <svg class="img-thumbnail bi d-block mx-auto mb-1" alt="<?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" fill-opacity="0.3">
                                <title>нет фото <?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</title>
                                <use xlink:href="#empty_images">
                            </svg>
                        <?php }?>
                        </picture>
                        <div class="card-body">

                                <h5 class="h6 fw-lighter fs-lh-1 card-title"><span class="text-danger pe-none">[<?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code'];?>
]</span> <a href="<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
" class="pname"><?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></h5>

                        </div>                         <div class="card-footer bg-transparent text-center" data-id="buttonDoLoad">
                            <?php if ($_smarty_tpl->tpl_vars['currencies_count']->value != 0) {?>
                            <h5 class="mb-3 h6 text-danger text-nowrap" id="optionPrice"><?php if ($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['priceUSD'] <= 0) {
echo (defined('STRING_NOPRODUCT_IN') ? constant('STRING_NOPRODUCT_IN') : null);
} else { ?>Цена <?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['priceOUT'];
}?> </h5> <?php }?> <?php echo phpmakeBuyButtonSm($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
 <span class="mt-3 pe-none badge<?php if ($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock_qnt'] > 0) {?> bg-success<?php } elseif ($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock_qnt'] == '0') {?> bg-warning<?php } elseif ($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock_qnt'] <= -500) {?> bg-danger<?php } else { ?> bg-secondary<?php }?>" data-id="instock" title="<?php if ($_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock_qnt'] > 0) {?>Наличие на складе<?php } else { ?>Возможность поставки<?php }?>">
                                    <?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock_string'];?>

                                    </span>
                        </div>
                    </div>
                </div>
                <?php
}
}
?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['navigatorHtml']->value) {?>
            <nav aria-label="Category <?php echo $_smarty_tpl->tpl_vars['categoryID']->value;?>
 Page navigation">
                <ul class="mt-2 mb-0 pagination justify-content-center">
                    <?php echo $_smarty_tpl->tpl_vars['navigatorHtml']->value;?>

                </ul>
            </nav>
            <?php }?>
        </div>
    <?php } else { ?>
    <div class="m-0 alert alert-secondary text-center align-items-center" role="alert"><?php echo $_smarty_tpl->tpl_vars['PageH1']->value;?>
 товаров не найдено.
                <?php if ($_smarty_tpl->tpl_vars['Parent']->value['parent'] > 1) {
if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {
$_smarty_tpl->_assignInScope('ahref', "category_".((string)$_smarty_tpl->tpl_vars['Parent']->value['parent']).".html");
} else {
$_smarty_tpl->_assignInScope('ahref', "index.php?categoryID=".((string)$_smarty_tpl->tpl_vars['Parent']->value['parent']));
}?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ahref']->value;?>
" class="ms-5 alert-link"> Перейти на уровень выше <i class="bi bi-arrow-up-short" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="На уровень выше"></i></a><?php }?>
    </div>
    <?php }?>

<?php }
}
}
