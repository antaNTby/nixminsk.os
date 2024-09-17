<?php
/* Smarty version 4.2.1, created on 2024-04-05 11:39:28
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\product_detailed.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_660fb8c0948004_36694182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9f7daba80666be9029fd8e63c57bf2560df1b16' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\product_detailed.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:product_detailed__imageGallery.tpl.html' => 1,
    'file:product_detailed__adminTable.tpl.html' => 1,
  ),
),false)) {
function content_660fb8c0948004_36694182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['product_info']->value != NULL) {?>
<input type="hidden" id="ProductID" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['productID'];?>
">
<input type="hidden" id="CategoryID" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['categoryID'];?>
">


<div class="mt-3 d-flex flex-column flex-md-row justify-content-center justify-content-md-between" data-id="AAAA">

    <div class="d-flex flex-column w-100 pe-3" data-id="AABA">
        <h2 class="h4 text-danger"><?php echo (defined('STRING_PRODUCT_CODE') ? constant('STRING_PRODUCT_CODE') : null);?>
 : #<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_code'];?>

          <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
            <a class="btn btn-link text-decoration-none float-end me-1 opacity-50 adminlink" <?php if (!$_smarty_tpl->tpl_vars['product_info']->value['enabled']) {?>disabled<?php }?> href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=catalog&amp;sub=special&amp;new_offer=<?php echo $_smarty_tpl->tpl_vars['product_info']->value['productID'];?>
" title="Добавить в список на главную страницу"><i class="bi bi-balloon-fill"></i><i class="bi bi-plus"></i></a>
            <a class='btn btn-link text-decoration-none float-end me-1 opacity-50 adminlink' href='<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?dpt=catalog&amp;sub=special'><i class="bi bi-balloon-fill"></i></a>
            <small class="badge bg-success float-end me-1"> <i class="bi bi-graph-up-arrow"></i> <?php echo $_smarty_tpl->tpl_vars['product_info']->value['viewed_times'];?>
 </span> <span class="d-none d-xxl-inline"><?php echo say_to_russian($_smarty_tpl->tpl_vars['product_info']->value['viewed_times'],"просмотр","просмотра","просмотров");?>
</span></small>
          <?php }?>
        </h2>
      <?php if ($_smarty_tpl->tpl_vars['product_info']->value['nixru_options']["НОВИНКА!!!"]) {?>
        <div class="m-3 p-3 alert alert-danger alert-dismissible fade show" role="alert" data-id="is_newproduct">
            <strong>НОВИНКА!</strong> новый товар в прайсе
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php }?>
    </div>

  <?php if ($_smarty_tpl->tpl_vars['currencies_count']->value != 0) {?>
    <div class="d-flex flex-column w-100" data-id="AABB">
        <div class="shadow rounded" id="optionPrice">
          <h2 class="p-3 h4 text-danger fw-lighter text-center"><?php if ($_smarty_tpl->tpl_vars['product_info']->value['Price'] <= 0) {
echo (defined('STRING_NOPRODUCT_IN') ? constant('STRING_NOPRODUCT_IN') : null);
} else { ?>Цена <?php echo $_smarty_tpl->tpl_vars['product_info']->value['PriceWithUnit'];
}?></h2>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['product_info']->value['shipping_freightUC'] || $_smarty_tpl->tpl_vars['product_info']->value['min_order_amount'] > 1) {?>
        <div class="p-2 row g-2">
          <?php if ($_smarty_tpl->tpl_vars['product_info']->value['shipping_freightUC']) {?>
            <div class="col">
            <?php echo (defined('ADMIN_SHIPPING_FREIGHT') ? constant('ADMIN_SHIPPING_FREIGHT') : null);?>
: <span class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['shipping_freightUC'];?>
</span>
            </div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product_info']->value['min_order_amount'] > 1) {?>
            <div class="col">
            <?php echo (defined('STRING_MIN_ORDER_AMOUNT') ? constant('STRING_MIN_ORDER_AMOUNT') : null);?>
: <span class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['min_order_amount'];
echo (defined('STRING_ITEM') ? constant('STRING_ITEM') : null);?>
</span>
            </div>
          <?php }?>
        </div>
        <?php }?>
    </div>
  <?php }?>

</div>

<div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-between  mx-md-auto" data-id="BBBB">

    <div id="gallery-container" class="d-flex flex-column w-100 pe-3" data-id="BBCA">
                <?php $_smarty_tpl->_subTemplateRender("file:product_detailed__imageGallery.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="mt-5 d-flex flex-column w-100" data-id="BBCA">

        <div class="shadow rounded p-3 text-center" data-id="buttonDoLoad">
            <?php echo phpmakeBuyButtonBS5($_smarty_tpl->tpl_vars['product_info']->value);?>

        </div>

        <div class="mt-3 p-3 text-center">
            <h5 class="h5">Краткое описание: <?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
</h5>
            <p class="fst-italic lh-sm text-wrap" data-id="brief_description">
                <?php if (smarty_modifier_count(trim($_smarty_tpl->tpl_vars['product_info']->value['brief_description'])) > 5) {?>
                <?php echo $_smarty_tpl->tpl_vars['product_info']->value['brief_description'];?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product_info']->value['nixru_params']) {?>
                <?php
$__section_i_7_loop = (is_array(@$_loop=smarty_modifier_count($_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['index'])) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['title'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == "Краткое наименование" || $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['title'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == "Описание" || $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['title'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == "Наименование") {?>
                    <?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['value'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>

                    <?php }?>
                <?php
}
}
?>
            </p>
            <?php }?>
        </div>

      <?php if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?>
      <div class="mt-3 p-3 shadow rounded" data-id="adminTable">
          <?php $_smarty_tpl->_subTemplateRender("file:product_detailed__adminTable.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['product_info']->value['nixru_options']) {?>
      <div class="mt-3 p-3 shadow rounded" data-id="nixru_options">
          <ul class="list-group list-group-flush">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_info']->value['nixru_options'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
              <?php if (($_smarty_tpl->tpl_vars['v']->value) && ($_smarty_tpl->tpl_vars['k']->value != "href") && ($_smarty_tpl->tpl_vars['k']->value != "vendorID") && ($_smarty_tpl->tpl_vars['k']->value != "url") && ($_smarty_tpl->tpl_vars['k']->value != "НОВИНКА!!!")) {?>
              <li class="list-group-item"><strong><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</strong> <span class="text-end"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span></li>
              <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <li class="list-group-item" style='background-color:#F2F7FE; width:100%; text-align:center;'>
                  <a class="btn-link" href='https://www.nix.ru/' style='font-weight:bold;color:#2E448C;'>НИКС - Компьютерный Cупермаркет полный каталог описаний</a>
              </li>
          </ul>
      </div>
      <?php }?>


      <?php if ((defined('CONF_CHECKSTOCK') ? constant('CONF_CHECKSTOCK') : null) == '1') {?>
      <div class="mt-3 p-3 text-center shadow rounded" data-id="instock">
          <h3>
              <?php if ($_smarty_tpl->tpl_vars['product_info']->value['in_stock'] > 0) {?>
              Наличие на складе:
              <?php } else { ?>
              Возможность поставки:
              <?php }?>
              <span class="<?php if ((defined('CONF_INSTOCK_REPLACE_BY_SYMBOLS') ? constant('CONF_INSTOCK_REPLACE_BY_SYMBOLS') : null) || (defined('CONF_EXACT_PRODUCT_BALANCE') ? constant('CONF_EXACT_PRODUCT_BALANCE') : null) == '0') {?>text-center<?php } else { ?>text-end<?php }?> badge <?php if ($_smarty_tpl->tpl_vars['product_info']->value['in_stock'] > 0) {?>bg-success<?php } elseif ($_smarty_tpl->tpl_vars['product_info']->value['in_stock'] == '0') {?>bg-warning<?php } elseif ($_smarty_tpl->tpl_vars['product_info']->value['in_stock'] <= -500) {?>bg-danger<?php } else { ?>bg-secondary<?php }?>">
                  <?php if ((defined('CONF_EXACT_PRODUCT_BALANCE') ? constant('CONF_EXACT_PRODUCT_BALANCE') : null) == "0") {?>
                  <?php if ((defined('CONF_INSTOCK_REPLACE_BY_SYMBOLS') ? constant('CONF_INSTOCK_REPLACE_BY_SYMBOLS') : null)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['product_info']->value['in_stock_symbol'];?>

                  <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['product_info']->value['in_stock_string'];?>

                  <?php }?>
                  <?php } else { ?>
                  <?php if ((defined('CONF_INSTOCK_REPLACE_BY_SYMBOLS') ? constant('CONF_INSTOCK_REPLACE_BY_SYMBOLS') : null)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['product_info']->value['in_stock_symbol'];?>

                  <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['product_info']->value['in_stock_string'];?>

                  <?php }?>
                  <?php }?>
              </span>
          </h3>
          <p class="text-end mb-0"><small class="text-muted">Продукт добавлен <?php echo $_smarty_tpl->tpl_vars['product_info']->value['date_added'];?>
 &nbsp; Продукт обновлен <?php echo $_smarty_tpl->tpl_vars['product_info']->value['date_modified'];?>
</small></p>
          <p class="text-end mb-0">
              <?php if ($_smarty_tpl->tpl_vars['product_info']->value['date_old'] != 0) {?>
              <span class="badge bg-danger text-end" title="товар устарел">устарел <?php echo $_smarty_tpl->tpl_vars['product_info']->value['date_old'];?>
</span>
              <?php } else { ?>
              <span class="badge bg-success text-end" title="товар устарел">АКТУАЛЕН</span>
              <?php }?>
          </p>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['product_info']->value['description']) {?>
      <div class="mt-3 p-3 text-center" style="overflow-x: auto" data-id="description"><p><?php echo $_smarty_tpl->tpl_vars['product_info']->value['description'];?>
</p></div>
      <?php }?>

    </div>

</div>


<div class="mt-5 d-flex flex-column flex-md-row justify-content-center justify-content-md-between  mx-md-auto align-items-center" data-id="CCCC">
    <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_code'] && (defined('CONF_DISPLAY_PRCODE') ? constant('CONF_DISPLAY_PRCODE') : null) == 1) {?>
    <h3 class="text-danger w-100"><?php echo (defined('STRING_PRODUCT_CODE') ? constant('STRING_PRODUCT_CODE') : null);?>
 : #<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_code'];?>
</h3>
    <?php }?>
    <div class="btn-toolbar w-100 justify-content-center">
        <?php if ($_smarty_tpl->tpl_vars['product_info']->value['nixru_options']["url"]) {?>
        <a class="btn btn-outline-secondary me-3 mb-1 mb-xl-0" type="button" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_options']['url'];?>
">перейти на НИКС www.nix.ru</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['product_info']->value['nixru_options']["href"]) {?>
        <a class="btn btn-outline-secondary me-3 mb-1 mb-xl-0" type="button" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_options']['href'];?>
">перейти на НИКС www.nix.ru</a>
        <?php }?>
        <a class="btn btn-outline-secondary me-3 mb-1 mb-xl-0" type="button" target="_blank" href="https://www.google.com/search?q=<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
 nix.ru"> <i class="bi bi-google"></i> искать с помощью Google </a>
    </div>
</div>

<div class="mt-3 row justify-content-center" data-id="nixru_params" name="params_anchor">
      <h3 class=" pb-2 border-bottom">Технические характеристики <?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
</h3>
      <?php if ($_smarty_tpl->tpl_vars['product_info']->value['nixru_params']) {?>
        <div class="col col-xl-9 table-responsive-lg" style="overflow-x: auto" data-id="nixru_params">
            <table class="table table-condensed table-striped">
                <tbody>
                    <?php
$__section_i_8_loop = (is_array(@$_loop=smarty_modifier_count($_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['index'])) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <tr data-paramID="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['paramID'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
">
                        <td class="text-muted"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['index'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]+1;?>
</td>
                        <th><?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['title'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];
if ($_smarty_tpl->tpl_vars['isadmin']->value == "yes") {?><a target="_blank" class="text-decoration-none float-end me-1 opacity-50 adminlink" href="/adminer.php?username=<?php echo (defined('DB_USER') ? constant('DB_USER') : null);?>
&db=<?php echo (defined('DB_NAME') ? constant('DB_NAME') : null);?>
&edit=PRICE_Params&where%5BparamID%5D=<?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['paramID'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><img src="/adminer.php?file=favicon.ico"></a><?php }?></th>
                        <td style="width:70%"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['nixru_params']['value'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</td>
                    </tr>
                    <?php
}
}
?>
                </tbody>
            </table>
        </div>
      <?php } else { ?>

      Данные уточняются ...
      <div class="progress mb-1">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
      </div>
      <?php }?>
</div>

            <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert">
                <strong>Внимание!</strong> Xарактеристики, комплект поставки и внешний вид данного товара могут отличаться от указанных или могут быть изменены производителем без отражения в каталоге.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
<?php }?>


<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['productslinkscat']->value) > 0) {?>
<div class="card mb-3 mx-auto" data-id="productslinkscat">
    <div class="card-body">
        <h5 class="card-title"><?php echo (defined('STRING_CAT_USE_AUX') ? constant('STRING_CAT_USE_AUX') : null);?>
</h5>
        <?php
$__section_iprod_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['productslinkscat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_iprod_9_total = $__section_iprod_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_iprod'] = new Smarty_Variable(array());
if ($__section_iprod_9_total !== 0) {
for ($__section_iprod_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index'] = 0; $__section_iprod_9_iteration <= $__section_iprod_9_total; $__section_iprod_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index']++){
?>
        <a class="card-link" href="<?php if ((defined('CONF_MOD_REWRITE') ? constant('CONF_MOD_REWRITE') : null) == 1) {?>page_<?php echo $_smarty_tpl->tpl_vars['productslinkscat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index'] : null)][0];?>
.html<?php } else { ?>index.php?show_aux_page=<?php echo $_smarty_tpl->tpl_vars['productslinkscat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index'] : null)][0];
}?>"><?php echo $_smarty_tpl->tpl_vars['productslinkscat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iprod']->value['index'] : null)][1];?>
</a>
        <br>
        <?php
}
}
?>
    </div>
</div>
<?php }
}
}
