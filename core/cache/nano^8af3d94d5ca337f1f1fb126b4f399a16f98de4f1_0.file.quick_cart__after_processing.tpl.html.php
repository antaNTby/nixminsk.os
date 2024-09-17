<?php
/* Smarty version 4.2.1, created on 2023-11-22 16:07:13
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\quick_cart__after_processing.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_655dfd016ea820_42703558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8af3d94d5ca337f1f1fb126b4f399a16f98de4f1' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\quick_cart__after_processing.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655dfd016ea820_42703558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('cm', $_smarty_tpl->tpl_vars['data']->value['iso_3']);
$_smarty_tpl->_assignInScope('order_content', $_smarty_tpl->tpl_vars['data']->value['order_content']);
$_smarty_tpl->_assignInScope('order_qty', $_smarty_tpl->tpl_vars['data']->value['order_qty']);
$_smarty_tpl->_assignInScope('VAT_rate', $_smarty_tpl->tpl_vars['data']->value['VAT_rate']);
$_smarty_tpl->_assignInScope('TOTALwithOutVAT', $_smarty_tpl->tpl_vars['data']->value['TOTALwithOutVAT']);
$_smarty_tpl->_assignInScope('TOTALamountVAT', $_smarty_tpl->tpl_vars['data']->value['TOTALamountVAT']);
$_smarty_tpl->_assignInScope('TOTALwithVAT', $_smarty_tpl->tpl_vars['data']->value['TOTALwithVAT']);
$_smarty_tpl->_assignInScope('TOTALwithOutVAT_USD', $_smarty_tpl->tpl_vars['data']->value['TOTALwithOutVAT_USD']);
$_smarty_tpl->_assignInScope('TOTALamountVAT_USD', $_smarty_tpl->tpl_vars['data']->value['TOTALamountVAT_USD']);
$_smarty_tpl->_assignInScope('TOTALwithVAT_USD', $_smarty_tpl->tpl_vars['data']->value['TOTALwithVAT_USD']);
$_smarty_tpl->_assignInScope('TOTALamountVAT_withUnit', $_smarty_tpl->tpl_vars['data']->value['TOTALamountVAT_withUnit']);
$_smarty_tpl->_assignInScope('TOTALamountVAT_STRING', $_smarty_tpl->tpl_vars['data']->value['strings']['TOTALamountVAT_STRING']);
$_smarty_tpl->_assignInScope('TOTALwithVAT_withUnit', $_smarty_tpl->tpl_vars['data']->value['TOTALwithVAT_withUnit']);
$_smarty_tpl->_assignInScope('TOTALwithVAT_STRING', $_smarty_tpl->tpl_vars['data']->value['strings']['TOTALwithVAT_STRING']);?>
    <h3>Данные заказчика</h3>
    <table class="table table-bordered border-primary">
        <tbody>
            <tr>
                <th>Заказчик</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['customer_firstname'];?>
</td>
            </tr>
            <tr>
                <th>Контакты заказчика</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['customer_lastname'];?>

<?php if ($_smarty_tpl->tpl_vars['Order']->value['reg_fields_values']) {?>
            <br/>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['Order']->value['reg_fields_values']) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php echo $_smarty_tpl->tpl_vars['Order']->value['reg_fields_values'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_name'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['Order']->value['reg_fields_values'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_field_value'];?>
</b>
            <br/>
            <?php
}
}
}?>
                </td>
            </tr>
            <tr>
                <th>email Заказчика</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['customer_email'];?>
</td>
            </tr>
            <tr>
                <th>Адресс Заказчика</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['shipping_address'];?>
</td>
            </tr>
            <tr>
                <th>Время заказа</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['order_time_mysql'];?>
</td>
            </tr>
            <tr>
                <th>Статус заказа</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['status_name'];?>
</td>
            </tr>
            <tr>
                <th>Время выставления счета</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['invoice_time'];?>
</td>
            </tr>
            <tr>
                <th>Доставка</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['shipping_type'];?>
</td>
            </tr>
            <tr>
                <th>Оплата</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['payment_type'];?>
: <?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['invoice_string'];?>
 <?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['ff4'];?>
 <?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['invoice_time_RU'];?>
</td>
            </tr>
            <tr>
                <th>Плательщик</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['buyer_data'];?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['Order']->value['customers_comment'] != '') {?>
            <tr>
                <th>Комментарий к заказу</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Order']->value['customers_comment'];?>
</td>
            </tr>
            <?php }?>
            <tr>
                <th>Скачать счет</th>
                <td><a class="btn-link" href="<?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['btnlink'];?>
"><i class="bi bi-file-pdf"></i><?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['invoice_string'];?>
 <?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['ff4'];?>
 <?php echo $_smarty_tpl->tpl_vars['Order']->value['invoice'][0]['invoice_time_RU'];?>
</a></td>
            </tr>
        </tbody>
    </table>

<?php if ($_smarty_tpl->tpl_vars['order_content']->value) {?>

    <h3>Товарная часть</h3>
    <div class="table-responsive">
        <span class="label label-info hidden control-debug"><?php echo $_smarty_tpl->tpl_vars['CONTROL']->value->controlName;?>
</span>
        <table class="table table-condensed table-bordered ordercart">            <thead>
                <tr>
                    <th class="text-nowrap text-center">№</th>
                    <th class="text-nowrap text-center">Наименование*</th>
                    <th class="text-nowrap text-center">                        Ед.
                        <br />
                        изм.&nbsp;
                    </th>
                    <th class="text-nowrap text-center">Кол-во</th>
                    <th class="text-nowrap text-center">
                        Цена,
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>

                    </th>
                    <th class="text-nowrap text-center">
                        Сумма,&nbsp;
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>

                    </th>
                    <th class="text-nowrap text-center">
                        Ставка&nbsp;НДС,&nbsp;
                        <br />
                        %
                    </th>
                    <?php if ($_smarty_tpl->tpl_vars['VAT_rate']->value > 0) {?>
                    <th class="text-nowrap text-center">
                        Сумма&nbsp;НДС,&nbsp;
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>

                    </th>
                    <th class="text-nowrap text-center">
                        Всего с НДС,&nbsp;
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>

                    </th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order_content']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr style="border-top:none;">
                    <td class="text-nowrap text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td>
                    <td class="text-start name"><?php echo $_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
                    <td class="text-nowrap text-center"><?php echo $_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['itemUnit'];?>
</td>
                    <td class="text-nowrap text-end"><?php echo $_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Quantity'];?>
</td>
                    <td class="text-nowrap text-end"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Price_OUT'],",",".")," ","&nbsp;");?>
</td>
                    <td class="text-nowrap text-end"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Cost_OUT'],",",".")," ","&nbsp;");?>
</td>
                    <td class="text-nowrap text-end">
                        <?php if ($_smarty_tpl->tpl_vars['VAT_rate']->value > 0) {
echo $_smarty_tpl->tpl_vars['VAT_rate']->value;
} else { ?>Без&nbsp;НДС<?php }?>
                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['VAT_rate']->value > 0) {?>
                    <td class="text-nowrap text-end"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['VATsumm_OUT'],",",".");?>
</td>
                    <td class="text-nowrap text-end"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Total_OUT'],",",".")," ","&nbsp;");?>
</td>
                    <?php }?>
                </tr>
                <?php }} else {
 ?>
                <?php
$_smarty_tpl->tpl_vars['__smarty_section_nn'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_nn']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_nn']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_nn']->value['iteration'] <= 2; $_smarty_tpl->tpl_vars['__smarty_section_nn']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_nn']->value['index']++){
?>
                <tr style="border-top:none;">
                    <td class="text-nowrap text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_nn']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_nn']->value['iteration'] : null);?>
</td>
                    <td class="text-start name" style="padding:2.5mm 40mm !important;">&nbsp;</td>
                    <td class="text-nowrap text-center">&nbsp;</td>
                    <td class="text-nowrap text-end">&nbsp;</td>
                    <td class="text-nowrap text-end">&nbsp;</td>
                    <td class="text-nowrap text-end">&nbsp;</td>
                    <td class="text-nowrap text-end">&nbsp;</td>
                    <?php if ($_smarty_tpl->tpl_vars['VAT_rate']->value > 0) {?>
                    <td class="text-nowrap text-end">&nbsp;</td>
                    <td class="text-nowrap text-end">&nbsp;</td>
                    <?php }?>
                </tr>
                <?php
}
}
?>
                <?php
}
?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="lead text-end" colspan=3 style="border-left:none;border-bottom:none;"><b>ИТОГО&nbsp;&nbsp; </b></th>
                                        <th class="text-nowrap text-end"><?php if ($_smarty_tpl->tpl_vars['order_qty']->value > 0) {
echo $_smarty_tpl->tpl_vars['order_qty']->value;
}?></th>
                    <th class="text-nowrap text-center">x</th>
                    <th class="text-nowrap text-end"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['TOTALwithOutVAT']->value,",",".");?>
</th>
                    <th class="text-nowrap text-center">x</th>
                    <?php if ($_smarty_tpl->tpl_vars['VAT_rate']->value > 0) {?>
                    <th class="text-nowrap text-end"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['TOTALamountVAT']->value,",",".");?>
</th>
                    <th class="text-nowrap text-end"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['TOTALwithVAT']->value,",",".");?>
</th>
                    <?php }?>
                </tr>
            </tfoot>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['order_qty']->value > 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['VAT_rate']->value > 0) {?>
        <div style="text-align: left; padding-top:0.25mm; color:#333;">
            Сумма НДС: <em><strong><?php echo $_smarty_tpl->tpl_vars['TOTALamountVAT']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['TOTALamountVAT_STRING']->value;?>
).</em>
        </div>
        <div style="text-align: left; font-size: 1.0em; padding-top:0.25mm; color:#333;">
                        Всего на сумму с НДС: <em><strong><?php echo $_smarty_tpl->tpl_vars['TOTALwithVAT']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['TOTALwithVAT_STRING']->value;?>
).</em>
        </div>
        <?php } else { ?>
        <div style="text-align: left; font-size: 1.0em; padding-top:0.25mm; color:#333;">
                        Всего на сумму: <em><strong><?php echo $_smarty_tpl->tpl_vars['TOTALwithVAT']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cm']->value;?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['TOTALwithVAT_STRING']->value;?>
)&nbsp;без&nbsp;НДС.</em>
        </div>
        <?php }?>
        <?php }?>
    </div>
<?php }
}
}
