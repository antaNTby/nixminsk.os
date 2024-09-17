<?php
/* Smarty version 4.2.1, created on 2024-03-29 17:36:40
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\blocks\nanoOffcanvasFilter.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6606d1f8187a70_06903609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '792c6c10e0c2f26b0bd570d3cf2d942d2b32079a' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\blocks\\nanoOffcanvasFilter.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/nanoBreadcrumbsVertical.tpl.html' => 1,
  ),
),false)) {
function content_6606d1f8187a70_06903609 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="offcanvas offcanvas-start bg-light bg-gradient" tabindex="-1" id="offcanvasFilter" aria-labelledby="offcanvasFilterLabel" data-bs-scroll="true" data-bs-backdrop="true">
    <div class="offcanvas-header text-dark">
        <h5 id="offcanvasFilterLabel">
            <a class="text-danger pull-start" type="button" data-action="reset-filter"><i class="bi bi-x-square text-danger" aria-hidden="true" title="Сбросить все фильтры"></i></a>
            Фильтр товаров
            <span class="badge bg-danger" id="json_data_count"><?php echo $_smarty_tpl->tpl_vars['operation_result']->value['recordsFiltered'];?>
</span>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['searchstring']->value) {?>
    <div class="col-auto mb-2 mx-1" style="padding:0 1rem;">
        <label for="staticSearchstring" class="form-label mb-0 text-dark">Строка поиска</label>
        <input type="text" readonly disabled class="form-control form-control-plaintext" id="staticSearchstring" value="<?php echo $_smarty_tpl->tpl_vars['searchstring']->value;?>
" style="padding: .375rem .75rem">
        <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "search_simple.tpl.html") {?>
        <label class="form-check-label text-dark" for="selectParentCategory">
            <a type="button" class="text-danger pull-start" data-action="reset-select"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
            Область поиска</label>
        <select class="form-select form-control-sm" name="selectParentCategory" id="selectParentCategory" data-default-value="1">
            <option value="1" selected>Весь каталог товаров</option>
            <?php
$__section_h_18_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categories_tree']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_h_18_start = min(1, $__section_h_18_loop);
$__section_h_18_total = min(($__section_h_18_loop - $__section_h_18_start), $__section_h_18_loop);
$_smarty_tpl->tpl_vars['__smarty_section_h'] = new Smarty_Variable(array());
if ($__section_h_18_total !== 0) {
for ($__section_h_18_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] = $__section_h_18_start; $__section_h_18_iteration <= $__section_h_18_total; $__section_h_18_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['categoryID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories_tree']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['name'];?>
</option>
            <?php
}
}
?>
        </select>
        <?php }?>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:blocks/nanoBreadcrumbsVertical.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class="offcanvas-body align-items-center">
        <div class="col-auto mb-4">
            <label class="form-label mb-0 text-dark" for="filter_stock">
                <a type="button" class="text-danger pull-start" data-action="reset-select"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                Наличие</label>
            <select class="form-select form-select-lg text-primary" name="filter_stock" id="filter_stock" aria-label="in_stock select" data-column="in_stock" data-default-value="2">
                <option value="0" selected>Без разницы</option>
                <option value="1">Есть на складе</option>
                <option value="2" selected>Доступно для заказа</option>
                <option value="3">Только Предзаказ</option>
                <option value="4">Ожидаем/В резерве</option>
                <option value="5">Нет на складе</option>
                <option value="6">Поставка прекращена</option>
                <option value="7">Много - больше 10шт</option>
                <option value="8">Мало - меньше 5шт</option>
                <option value="9">Под заказ менее 2-х недель</option>
                <option value="10">Под заказ более 2-х недель</option>
            </select>
        </div>
        <div class="col-auto mb-0">
            <label for="product_code" class="form-label mb-0 text-dark">
                <a type="button" class="text-danger pull-start" data-action="reset-column-filter"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                Артикул\Код товара</label>
            <div class="input-group">
                <input type="text" class="form-control column-filter" name="product_code" id="product_code" placeholder="Искать внутри артикула" data-column="product_code" value="">
                <span class="input-group-text"><i class="bi bi-funnel"></i></span>
            </div>
            <div class="form-text text-secondary mt-0 fs-7">
                содержит искомую фразу
            </div>
        </div>
        <div class="col-auto mb-0">
            <label for="product_name" class="form-label mb-0 text-dark">
                <a type="button" class="text-danger pull-start" data-action="reset-column-filter"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                Название товара</label>
            <div class="input-group">
                <input type="text" class="form-control column-filter" name="product_name" id="product_name" placeholder="Искать внутри названия" data-column="product_name" value="">
                <span class="input-group-text"><i class="bi bi-funnel"></i></span>
            </div>
            <div class="form-text text-secondary mt-0 fs-7">
                содержит искомую фразу
            </div>
        </div>
        <div class="col-auto mb-0">
            <label for="brief_description" class="form-label mb-0 text-dark">
                <a type="button" class="text-danger pull-start" data-action="reset-column-filter"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                Краткое описание</label>
            <div class="input-group">
                <input type="text" class="form-control column-filter" name="brief_description" id="brief_description" placeholder="Искать в описании" data-column="brief_description" value="">
                <span class="input-group-text"><i class="bi bi-funnel"></i></span>
            </div>
            <div class="form-text text-secondary mt-0 fs-7">
                содержит искомую фразу
            </div>
        </div>
        <div class="col-auto mb-0 mt-3">
            <label for="crosswords" class="form-label mb-0 text-dark">
                <a type="button" class="text-danger pull-start" data-action="reset-text-filter"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                Проходные слова</label>
            <input type="text" class="form-control form-control-sm text-filter" name="crosswords" id="crosswords" placeholder='Добавьте "волшебные" слова' value="">
            <div class="form-text text-secondary mt-0 fs-7">
                любое из этих слов добавляет товар в результат выбора
            </div>
        </div>
        <div class="col-auto mb-4">
            <label for="stopwords" class="form-label mb-0 text-dark">
                <a type="button" class="text-danger pull-start" data-action="reset-text-filter"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                Исключить слова</label>
            <input type="text" class="form-control form-control-sm text-filter" name="stopwords" id="stopwords" placeholder="Добавьте исключаемые слова" value="">
            <div class="form-text text-secondary mt-0 fs-7">
                исключается каждое слово
            </div>
        </div>
        <div class="col-auto mb-0 text-dark">Стоимость</div>
                <div class="row g-2 mb-1">
            <div class="col-6">
                <label for="number_price_from" class="form-label mb-0 text-dark">
                    <a type="button" class="text-danger pull-start" data-action="reset-range"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                    от <span class="form-label mb-0 text-dark" for="number_price_from"></span> <?php echo $_smarty_tpl->tpl_vars['priceUnit']->value;?>
</label>
                <input type="number" min="0" max="100000" value="0" class="form-control form-control-sm text-end" name="number_price_from" id="number_price_from" data-column="Price">
            </div>
            <div class="col-6">
                <label for="number_price_to" class="form-label mb-0 text-dark">
                    <a type="button" class="text-danger pull-start" data-action="reset-range"><i class="bi bi-x-square text-danger" aria-hidden="true"></i></a>
                    до <span class="form-label mb-0 text-dark" for="number_price_to"></span> <?php echo $_smarty_tpl->tpl_vars['priceUnit']->value;?>
</label>
                <input type="number" min="0" max="100000" value="100000" class="form-control form-control-sm text-end" name="number_price_to" id="number_price_to" data-column="Price">
            </div>
        </div>
        <div class="mb-1">
            <input type="range" min="0" max="100000" value="0" class="form-range" name="price_from" id="price_from" data-column="Price">
            <input type="range" min="0" max="100000" value="100000" class="form-range" name="price_to" id="price_to" data-column="Price">
        </div>
        <hr>
        <div class="d-flex align-items-center align-middle mb-1">
            <button type="button" id="pageFilterConfirm" class="btn btn-outline-primary btn-lg mx-auto"><i class="bi bi-funnel"></i> Применить фильтр</button>
        </div>

        <div class="my-1 d-none" id="catsList"></div>

        <hr>
        <div class="my-1">
            <?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" && (defined('CONF_SHOW_PARENCAT') ? constant('CONF_SHOW_PARENCAT') : null)) {?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" checked value="1" id="searchInSubcategories">
                <label class="form-check-label text-dark" for="searchInSubcategories">Искать в дочерних подкатегориях </label>
            </div><?php }?>
        </div>
    </div>
</div>


<?php }
}
