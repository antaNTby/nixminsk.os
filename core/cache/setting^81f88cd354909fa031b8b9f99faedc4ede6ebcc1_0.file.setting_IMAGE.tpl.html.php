<?php
/* Smarty version 4.2.1, created on 2024-02-20 11:30:17
  from 'C:\OSPanel\domains\nixminsk.os\core\modules\tpl\setting_templates\setting_IMAGE.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65d463199aec94_50700712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f88cd354909fa031b8b9f99faedc4ede6ebcc1' => 
    array (
      0 => 'C:\\OSPanel\\domains\\nixminsk.os\\core\\modules\\tpl\\setting_templates\\setting_IMAGE.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d463199aec94_50700712 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-1">
        <div class="row mb-1 align-items-end">
        <div class="col-sm-3">
            <?php if ($_smarty_tpl->tpl_vars['constantValue']->value) {?>
            <svg style="height:96px;width:96px" class="img-thumbnail  border-danger text-danger d-none mx-auto" alt="Изображение отсутствует" fill-opacity="0.3" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                <title>нет фото <?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</title>
                <use xlink:href="#empty_images">
            </svg>
            <img src="<?php echo $_smarty_tpl->tpl_vars['image_fullpath']->value;?>
" id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['constantValue']->value;?>
" alt="IMAGE ID<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" class="img-thumbnail" style="height:96px;width:96px" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
            <?php } else { ?>
            <svg style="height:96px;width:96px" class="img-thumbnail border-danger text-danger d-block mx-auto" alt="Изображение отсутствует" fill-opacity="0.3" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                <title>нет фото <?php echo $_smarty_tpl->tpl_vars['products_to_show']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</title>
                <use xlink:href="#empty_images">
            </svg>
            <img src="<?php echo $_smarty_tpl->tpl_vars['image_fullpath']->value;?>
" id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['constantValue']->value;?>
" alt="IMAGE ID<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" class="img-thumbnail d-none" style="height:96px;width:96px" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
            <?php }?>
        </div>
        <div class="col-sm-9">
            <div class="table-responsive tableinfo" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                <table class="table table-sm text-secondary table-bordered border-light">
                    <tbody>
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['constantValue']->value) {?>
                            <td><?php echo $_smarty_tpl->tpl_vars['W']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['H']->value;?>
 (<span id="infosize_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fileSize']->value;?>
</span>)</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['bits']->value;?>
bits <?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['image_fullpath']->value;?>
</td>
                            <?php } else { ?>
                            <td class="table-danger text-center text-danger lead">значение не установлено</td>
                            <?php }?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="row mb-1 align-items-end">
        <div class="col-sm-4">
            <label for="subfolder_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" class="text-secondary text-center">Выбрать папку</label>
            <select class="form-select form-select-sm" id="subfolder_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" name="subfolder_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" onchange="let bt=document.querySelector('button#doModal_'+<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
+''); bt.attributes.dataSubfolder.value=this.value;return false;" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                <option <?php echo $_smarty_tpl->tpl_vars['is_selected']->value;?>
 value="\"><?php echo (defined('ADMIN_IMAGES_DEFAULT_PATH') ? constant('ADMIN_IMAGES_DEFAULT_PATH') : null);?>
 - корень</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subfolders']->value, 'dir');
$_smarty_tpl->tpl_vars['dir']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('is_selected', '');?>
                <?php if ($_smarty_tpl->tpl_vars['dir']->value == $_smarty_tpl->tpl_vars['dir_is_selected']->value) {
$_smarty_tpl->_assignInScope('is_selected', "selected");
}?>
                <option <?php echo $_smarty_tpl->tpl_vars['is_selected']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col-sm-8">
            <button type="button" class="btn btn-primary btn-lg" id="doModal_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" data-bs-toggle="modal" title="выбрать из картинок на сервере" data-bs-target="#myModal" data-bs-whatever="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" dataName="<?php echo $_smarty_tpl->tpl_vars['constantName']->value;?>
" dataValue="<?php echo $_smarty_tpl->tpl_vars['constantValue']->value;?>
" dataSubfolder="<?php echo $_smarty_tpl->tpl_vars['dir_is_selected']->value;?>
" title="Выбрать на сервере" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">Выбрать <i class="bi bi-images"></i></button>
        </div>
    </div>
        <div class="row">
        <div class="col-sm-12">
            <label class="text-secondary text-center" for="fileElem_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">перетяните сюда новую картинку</label>
            <div class="p-2 bg-secondary bg-opacity-10 text-bg-primary rounded-3 myDroparea" style="cursor: grab;border:2px dashed black;min-height: 4rem;height: 6rem;" id="myDroparea_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" constantName="<?php echo $_smarty_tpl->tpl_vars['constantName']->value;?>
" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                <input class="form-control form-control-sm d-none myUploader"  type="file" id="fileElem_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" accept=".jpg, .png, .gif, .bmp"  onchange="handleFiles(this.files)" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                <div class="progress d-none" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                    <div class="progress-bar progress-bar-striped bg-success" max="100" value="0" role="progressbar" aria-label="Success striped example" style="width: 2%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
"></div>
                </div>
                <div id="gallery_<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
" class="p-4 align-middle gallery" dataID="<?php echo $_smarty_tpl->tpl_vars['settingID']->value;?>
">
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
