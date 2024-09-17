<?php
/* Smarty version 4.2.1, created on 2024-09-04 13:44:59
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\password.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66d83a2b3d1712_54318148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2516aebac2347e4673981a6218a13a17bc72a54' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\password.tpl.html',
      1 => 1695634229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d83a2b3d1712_54318148 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['login_was_found']->value != NULL) {?>
<div class="alert alert-success"><?php echo (defined('STRING_PASSWORD_SENT') ? constant('STRING_PASSWORD_SENT') : null);?>
</div>
<?php } else { ?>
<div class="card text-center w-25 mx-auto mt-5">
    <div class="card-header">
    Восстановление пароля
  </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo (defined('FORGOT_PASSWORD_LINK') ? constant('FORGOT_PASSWORD_LINK') : null);?>
</h5>
        <?php if ($_smarty_tpl->tpl_vars['login_wasnt_found']->value != NULL) {?>
        <div class="alert alert-danger"><?php echo (defined('STRING_CANT_FIND_USER_IN_DB') ? constant('STRING_CANT_FIND_USER_IN_DB') : null);?>
 (<?php echo $_smarty_tpl->tpl_vars['forgotpw']->value;?>
)</div>
        <?php } elseif ($_smarty_tpl->tpl_vars['wrongLoginOrPw']->value) {?>
        <div class="alert alert-danger"><?php echo (defined('ERROR_WRONG_PASSWORD') ? constant('ERROR_WRONG_PASSWORD') : null);?>
</div>
        <?php }?>
        <form action="index.php" method="post" id="mypass" role="form">
            <div class="form-group">
                <label class="form-label" for="forgotpw"><?php echo (defined('STRING_FORGOT_PASSWORD_FIX') ? constant('STRING_FORGOT_PASSWORD_FIX') : null);?>
</label>
                <input type="text" class="form-control" name="forgotpw" id="forgotpw">
            </div>
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary"><?php echo (defined('OK_BUTTON3') ? constant('OK_BUTTON3') : null);?>
</button>
            </div>
        </form>
    </div>
</div>

<?php }
}
}
