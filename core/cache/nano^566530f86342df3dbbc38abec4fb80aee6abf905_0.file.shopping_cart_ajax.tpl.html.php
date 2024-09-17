<?php
/* Smarty version 4.2.1, created on 2023-12-07 15:21:08
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\shopping_cart_ajax.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6571b8b4222ef6_03226297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '566530f86342df3dbbc38abec4fb80aee6abf905' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\shopping_cart_ajax.tpl.html',
      1 => 1701857457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6571b8b4222ef6_03226297 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['maxDeliveryDelayValue']->value > 0) {?>
<div class="my-1 alert alert-warning alert-dismissible fade show" role="alert">
    <span class="fw-bold">ВНИМАНИЕ </span>В корзине есть товары, поставляемые "под заказ"
    <p class="text-break mb-0">Время поставки заказа может быть увеличено, по независящим от нас обстоятельствам. Задержка поставки может составить <strong><?php echo $_smarty_tpl->tpl_vars['maxDeliveryDelayString']->value;?>
</strong></p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }?>

<div class="table-responsive-md">
    <table class="table table-sm table-borderless table-hover">
        <thead class="table-primary">
            <tr>
                <th class="text-nowrap" style="width: 0%">#</th>
                <th class="text-nowrap" style="width: 0%">Артикул</th>
                <th class="text-nowrap" style="width: 80%"><?php echo (defined('TABLE_PRODUCT_NAME') ? constant('TABLE_PRODUCT_NAME') : null);?>
</th>
                <th class="text-nowrap text-center" style="width: 10%"><?php echo (defined('TABLE_PRODUCT_QUANTITY') ? constant('TABLE_PRODUCT_QUANTITY') : null);?>
</th>
                <th class="text-nowrap text-center"><?php echo (defined('STRING_SUM') ? constant('STRING_SUM') : null);?>
</th>
                <th class="text-nowrap"><i class="bi bi-terminal"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cart_content']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <tr class="align-middle">
                <td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td>
                <th class=""><a class="btn btn-link text-end text-danger" href="<?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {?>product_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
.html<?php } else { ?>index.php?productID=<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];
}?>"><strong><?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_code'];?>
</strong></a></th>
                <td class="text-start"> <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
                <td class="text-end text-nowrap" >                     <?php if ($_smarty_tpl->tpl_vars['session_items']->value) {?>
                    <div class="input-group input-group-sm mb-0">
                        <button type="button" class="btn btn-outline-dark bg-gradient" onclick="cartminus('count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
'); return false"><i class="bi bi-dash"></i></button>
                        <input type="text" name="count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" id="count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" class="form-control text-end bg-light inputCount" value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
" pattern="[0-9]{1,5}">
                        <button type="button" class="btn btn-outline-dark bg-gradient" onclick="cartplus('count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
'); return false"<?php if ($_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'] > 0) {?> title="доступно <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'];?>
 шт" <?php }?>><i class="bi bi-plus"></i></button>
                    </div>
                    <?php } else { ?>
                                        <div class="input-group input-group-sm mb-0">
                        <button class="btn btn-secondary bg-gradient" type="button" onclick="cartminus('count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
');count_changed('#count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
');return false"><i class="bi bi-dash"></i></button>
                        <input type="text" name="count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" id="count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="form-control text-end bg-light inputCount" value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
" pattern="[0-9]{1,5}">
                        <button class="btn btn-secondary bg-gradient" type="button" onclick="cartplus('count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
');count_changed('#count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'); return false"<?php if ($_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'] > 0) {?> title="доступно <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'];?>
 шт" <?php }?>><i class="bi bi-plus"></i></button>
                    </div>

                                        <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['min_order_amount']) {?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo (defined('STRING_MIN_ORDER_AMOUNT') ? constant('STRING_MIN_ORDER_AMOUNT') : null);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['min_order_amount'];?>
</strong><?php echo (defined('STRING_ITEM') ? constant('STRING_ITEM') : null);?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php }?>
                </td>
                <td class="text-end text-nowrap"> <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cost'];?>
</td>
                <td class="text-end text-nowrap">
                    <?php if ($_smarty_tpl->tpl_vars['session_items']->value) {?><a class="btn btn-outline-danger btn-sm bg-gradient" href="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
&amp;shopping_cart=yes&amp;remove=<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><i class="bi bi-x-lg"></i></a>
                    <?php } else { ?><a class="btn btn-outline-danger btn-sm bg-gradient" href="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
&amp;shopping_cart=yes&amp;remove=<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><i class="bi bi-x-lg"></i></a><?php }?>
                </td>
            </tr>
            <?php
}
}
?>
        </tbody>
    </table>
    <table class="table table-sm table-borderless">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['discount_prompt']->value != 0) {?>
                        <?php if ($_smarty_tpl->tpl_vars['discount_prompt']->value == 1 && $_smarty_tpl->tpl_vars['discount_percent']->value != 0) {?>
            <tr>
                <th class="text-end"><?php echo (defined('ADMIN_DISCOUNT') ? constant('ADMIN_DISCOUNT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['discount_percent']->value;?>
%:</th>
                <td class="text-nowrap text-end"><?php echo $_smarty_tpl->tpl_vars['discount_value']->value;?>
</td>
            </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discount_prompt']->value == 2) {?>
                        <tr>
                <td colspan="2"><?php echo (defined('STRING_UNREGISTERED_CUSTOMER_DISCOUNT_PROMPT') ? constant('STRING_UNREGISTERED_CUSTOMER_DISCOUNT_PROMPT') : null);?>
</td>
            </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discount_prompt']->value == 3 && $_smarty_tpl->tpl_vars['discount_percent']->value != 0) {?>
                        <tr>
                <th class="text-end"><?php echo (defined('ADMIN_DISCOUNT') ? constant('ADMIN_DISCOUNT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['discount_percent']->value;?>
%:</th>
                <td class="text-nowrap text-end"><?php echo $_smarty_tpl->tpl_vars['discount_value']->value;?>
</td>
            </tr>
            <tr>
                <td colspan="2"><?php echo (defined('STRING_UNREGISTERED_CUSTOMER_COMBINED_DISCOUNT_PROMPT') ? constant('STRING_UNREGISTERED_CUSTOMER_COMBINED_DISCOUNT_PROMPT') : null);?>
</td>
            </tr>
            <?php }?>
            <?php }?>
            <tr>
                <th class="text-end"><?php echo (defined('TABLE_TOTAL') ? constant('TABLE_TOTAL') : null);?>
 ( <span id="cartItemCount" data-num="<?php echo $_smarty_tpl->tpl_vars['cartItemCount']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['cartItemCount']->value;?>
</span> шт.) :</th>
                <td class="text-nowrap text-end"><strong id="cartItemTotal"><?php echo $_smarty_tpl->tpl_vars['cart_total']->value;?>
</strong></td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['shipping_costWithoutUnits']->value) {?>
            <tr>
                <th class="text-nowrap text-end"><?php if (($_smarty_tpl->tpl_vars['shipping_cost']->value > 0) == 1) {?>Транспортные расходы<?php } else { ?>Скидка за самовывоз<?php }?></th>
                <td class="text-nowrap text-end"><?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>
</td>
            </tr>
            <tr>
                <th class="text-nowrap text-end"><?php if (($_smarty_tpl->tpl_vars['shipping_cost']->value > 0) == 1) {?>Итого с доставкой:<?php } else { ?>Итого при самовывозе:<?php }?></th>
                <td class="text-nowrap text-end"><strong><?php echo $_smarty_tpl->tpl_vars['total_cost']->value;?>
</strong></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<input type="hidden" name="update" value="1">
<input type=hidden name="shopping_cart" value="1">
<input type="hidden" name="ajax_cart" id="ajax_cart" value="1">

<?php if ($_smarty_tpl->tpl_vars['maxDeliveryDelayValue']->value > 0) {?>
<input type="hidden" id="payment_terminMax" name="payment_terminMax" value="<?php echo $_smarty_tpl->tpl_vars['maxDeliveryDelayValue']->value;?>
">
<?php }
}
}
