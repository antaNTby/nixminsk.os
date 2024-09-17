<?php
/* Smarty version 4.2.1, created on 2024-04-05 11:39:28
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\product_detailed__imageGallery.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_660fb8c097cf24_30419081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ebd4a4497171bd0c8ee1c40dc949f0c56eab70b' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\product_detailed__imageGallery.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fb8c097cf24_30419081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\nixminsk.os\\core\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if (!$_smarty_tpl->tpl_vars['product_info']->value['USE_NIX_PICTURES']) {?><div id="gallery-container"><div class="light-gallery mb-4" data-id="picture" lg-uid="lg00"><?php if ($_smarty_tpl->tpl_vars['product_info']->value['thumbnail']) {
if ($_smarty_tpl->tpl_vars['product_info']->value['big_picture']) {?><a class="gallery-link" href="/data/big/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['big_picture'];?>
"><img src="/data/medium/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="img-fluid rounded-start lg-item"></a><?php } else { ?><img src="/data/medium/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="img-fluid rounded-start lg-item"><?php }
} elseif ($_smarty_tpl->tpl_vars['product_info']->value['picture']) {
if ($_smarty_tpl->tpl_vars['product_info']->value['big_picture']) {?><a class="gallery-link" href="/data/big/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['big_picture'];?>
"><img src="/data/small/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="img-fluid rounded-start lg-item"></a><?php } else { ?><img src="/data/small/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="img-fluid rounded-start lg-item"><?php }
} else {
if ((defined('CONF_DISPLAY_NOPHOTO') ? constant('CONF_DISPLAY_NOPHOTO') : null) == 1) {?><img src="/data/images/noimage.gif" alt="no photo" class="img-thumbnail"><?php }
}?></div><?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['all_product_pictures']->value) > 0) {?><div class="light-gallery gallery-thumbs" lg-uid="lg00"><?php
$__section_i_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_product_pictures']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_10_total = $__section_i_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_10_total !== 0) {
for ($__section_i_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_10_iteration <= $__section_i_10_total; $__section_i_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlarged']) {?><a class="gallery-link" href="/data/big/<?php echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlarged'];?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['thumbnail']) {?>data/medium/<?php echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['thumbnail'];
} else { ?>data/small/<?php echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['filename'];
}?>" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="thumbnail gallery-item mb-1"></a><?php } else { ?><img src="/data/medium/<?php if ($_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['thumbnail']) {
echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['thumbnail'];
} else { ?>/data/small/<?php echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['filename'];
}?>" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="thumbnail gallery-item mb-1" style="width: 80px; height: 80px; margin: 0"><?php }
}
}
?></div><?php }?></div><?php } else { ?><div><?php if ($_smarty_tpl->tpl_vars['product_info']->value['thumbnail'] || $_smarty_tpl->tpl_vars['product_info']->value['big_picture'] || $_smarty_tpl->tpl_vars['product_info']->value['big_picture'] || smarty_modifier_count($_smarty_tpl->tpl_vars['all_product_pictures']->value) > 0) {?><div class="mb-4 pb-2 border-bottom" data-id="picture"><img src="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['big_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" class="img-fluid rounded-start lg-item startGalleryBtn" role="button"></div><?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['all_product_pictures']->value) > 0) {?><div class="light-gallery gallery-thumbs" lg-uid="lg11"><?php
$__section_i_11_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_product_pictures']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_11_total = $__section_i_11_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_11_total !== 0) {
for ($__section_i_11_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_11_iteration <= $__section_i_11_total; $__section_i_11_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?><a class="gallery-link firstGalleryItem" href="<?php echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlarged'];?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['thumbnail']) {
echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['thumbnail'];
} else {
echo $_smarty_tpl->tpl_vars['all_product_pictures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['filename'];
}?>" class="img-thubnail thumbnail gallery-item mb-1" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" style="max-width: 288px; height:64px;" data-width="180"></a><?php
}
}
?></div><?php }
} else { ?><div class="mb-4" data-id="picture"><?php if ((defined('CONF_DISPLAY_NOPHOTO') ? constant('CONF_DISPLAY_NOPHOTO') : null) == 1) {?><svg class="bi d-block mx-auto mb-1" width="400" height="400" fill-opacity="0.3" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
" role="image"><title>Фотографии товара <?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
 не готовы</title><use xlink:href="#empty_images" /></svg><?php }?></div><?php }?></div><?php }
}
}
