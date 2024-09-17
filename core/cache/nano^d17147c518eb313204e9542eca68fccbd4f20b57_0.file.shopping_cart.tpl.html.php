<?php
/* Smarty version 4.2.1, created on 2023-12-07 15:33:45
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\shopping_cart.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6571bba9efa3d8_58758273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd17147c518eb313204e9542eca68fccbd4f20b57' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\shopping_cart.tpl.html',
      1 => 1701857362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:quick_cart.tpl.html' => 1,
    'file:blocks/nanoContacts.tpl.html' => 1,
  ),
),false)) {
function content_6571bba9efa3d8_58758273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php if ($_smarty_tpl->tpl_vars['product_removed']->value == 1) {?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><?php echo (defined('CART_TITLE') ? constant('CART_TITLE') : null);?>
</strong> <?php echo (defined('STRING_PRODUCT_REMOVED') ? constant('STRING_PRODUCT_REMOVED') : null);?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['make_more_exact_cart_content']->value) {?>
<div class="my-1 alert alert-warning alert-dismissible fade show" role="alert">
    <span class="fw-bold">ВНИМАНИЕ </span><strong>Проверьте содержимое корзины</strong> <?php echo (defined('STRING_MAKE_MORE_EXACT_CART_CONTENT') ? constant('STRING_MAKE_MORE_EXACT_CART_CONTENT') : null);?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart_content']->value) {?>

    <?php if ((defined('CONF_CHECKSTOCK') ? constant('CONF_CHECKSTOCK') : null) == 0) {?>
    <div class="my-1 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ВНИМАНИЕ </strong> Наличие необходимого количества товара на складе подтверджается Администратором только после проверки заказа.
        <small>Вы можете указать любое нужное вам значение. </small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['cart_amount']->value < (defined('CONF_MINIMAL_ORDER_AMOUNT') ? constant('CONF_MINIMAL_ORDER_AMOUNT') : null)) {?>
    <div class="my-1 alert alert-danger alert-dismissible fade show<?php if (!$_smarty_tpl->tpl_vars['minOrder']->value) {?> d-none<?php }?>" id="id_too_small_order_amount" role="alert">
        <?php echo (defined('CART_TOO_SMALL_ORDER_AMOUNT') ? constant('CART_TOO_SMALL_ORDER_AMOUNT') : null);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['cart_min']->value;?>
</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>



        <form name="formCartContent" id="formCartContent" action="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
&amp;shopping_cart=yes" method="post" role="form">


        <?php if ($_smarty_tpl->tpl_vars['maxDeliveryDelayValue']->value > 0) {?>
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
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cart_content']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_6_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
                        <td class="text-end text-nowrap">                             <?php if ($_smarty_tpl->tpl_vars['session_items']->value) {?>
                            <div class="input-group input-group-sm mb-0">
                                <button type="button" class="btn btn-outline-dark bg-gradient" onclick="cartminus('count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
'); return false"><i class="bi bi-dash"></i></button>
                                <input type="text" name="count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" id="count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" class="form-control text-end bg-light inputCount" value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
" pattern="[0-9]{1,5}">
                                <button type="button" class="btn btn-outline-dark bg-gradient" onclick="cartplus('count_<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
'); return false" <?php if ($_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'] > 0) {?> title="доступно <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'];?>
 ШТ" <?php }?>><i class="bi bi-plus"></i></button>
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
'); return false" <?php if ($_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'] > 0) {?> title="доступно <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['in_stock'];?>
 ШТ" <?php }?>><i class="bi bi-plus"></i></button>
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
                            <?php if ($_smarty_tpl->tpl_vars['session_items']->value) {?><a class="btn btn-outline-danger btn-sm bg-gradient shadow" href="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
&amp;shopping_cart=yes&amp;remove=<?php echo $_smarty_tpl->tpl_vars['session_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><i class="bi bi-x-lg"></i></a>
                            <?php } else { ?><a class="btn btn-outline-danger btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
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
:</th>
                        <td class="text-nowrap text-end"><strong><?php echo $_smarty_tpl->tpl_vars['cart_total']->value;?>
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
        <input type="hidden" name="shopping_cart" value="1">
                <input type="hidden" name="ajax_cart" id="ajax_cart" value="1">
        
<?php if ($_smarty_tpl->tpl_vars['maxDeliveryDelayValue']->value > 0) {?>
        <input type="hidden" id="payment_terminMax" name="payment_terminMax" value="<?php echo $_smarty_tpl->tpl_vars['maxDeliveryDelayValue']->value;?>
"><?php }?>

    </form>


        <?php $_smarty_tpl->_subTemplateRender("file:quick_cart.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php } else { ?> 
    <h2><?php echo (defined('CART_EMPTY') ? constant('CART_EMPTY') : null);?>
</h2>

    Будем рады ответить на ваши вопросы<br>
    <?php $_smarty_tpl->_subTemplateRender("file:blocks/nanoContacts.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['cart_content']->value) {?>
<div class="bg-secondary bg-gradient bg-opacity-10" id="comment_all">
    <div class="p-3 mt-3">
        <label class="h4 form-label" for="comment">Комментарий</label>
        <textarea form="formCart" class="form-control" name="comment" id="comment" placeholder="Почтовый, Фактический или Адрес разгрузки, если отличается от юридического адреса, прочие данные или какой-либо комментарий" style="resize: none;"></textarea>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto my-3 my-sm-1">
    <a class="btn btn-success btn-lg text-uppercase text-justify" name="cart_submit" id="cart_submit" type="button"><?php echo (defined('CART_PROCEED_TO_CHECKOUT') ? constant('CART_PROCEED_TO_CHECKOUT') : null);?>
</a>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-start my-2" id="cart_process_buttons">
            <a class="btn btn-light" id="recalc_button" onclick="cart_content_update()"><?php echo (defined('UPDATE_BUTTON') ? constant('UPDATE_BUTTON') : null);?>
</a>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
    <?php
$__section_d_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_7_total = $__section_d_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_7_total !== 0) {
for ($__section_d_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_7_iteration <= $__section_d_7_total; $__section_d_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
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
    <a class="btn btn-light dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"><?php
$__section_d_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_8_total = $__section_d_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_8_total !== 0) {
for ($__section_d_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_8_iteration <= $__section_d_8_total; $__section_d_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
if ($_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] == $_smarty_tpl->tpl_vars['current_currency']->value) {
echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];
}
}
}
?></a>
    <ul class="dropdown-menu shadow p-2 mb-2 ms-md-2" aria-labelledby="defaultDropdown" role="menu">
        <?php
$__section_d_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['currencies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_d_9_total = $__section_d_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_d'] = new Smarty_Variable(array());
if ($__section_d_9_total !== 0) {
for ($__section_d_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] = 0; $__section_d_9_iteration <= $__section_d_9_total; $__section_d_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['CID'] != $_smarty_tpl->tpl_vars['current_currency']->value) {?>
        <a class="dropdown-item d-flex justify-content-between align-items-center" href="#" onclick="document.getElementById('Cart_ChangeCurrencyFormPrice_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null);?>
').submit(); return false"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['Name'];?>
<span class="badge bg-success"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_d']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_d']->value['index'] : null)]['code'];?>
</span></a>
        <?php }?>
        <?php
}
}
?>
    </ul>
    <?php }?>
    <a class="btn btn-outline-danger ms-md-4" href="<?php echo $_smarty_tpl->tpl_vars['cart_reguest']->value;?>
&amp;shopping_cart=yes&amp;clear_cart=yes"><?php echo (defined('CART_CLEAR') ? constant('CART_CLEAR') : null);?>
</a>
</div>
<?php }?>
    


<?php }
}
