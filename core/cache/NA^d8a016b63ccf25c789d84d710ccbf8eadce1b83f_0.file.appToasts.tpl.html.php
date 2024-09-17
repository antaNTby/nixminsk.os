<?php
/* Smarty version 4.2.1, created on 2024-09-17 16:09:43
  from 'W:\domains\nixminsk.os\core\tpl\admin\apps\Toasts\appToasts.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66e97f9770af73_88728757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a016b63ccf25c789d84d710ccbf8eadce1b83f' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\admin\\apps\\Toasts\\appToasts.tpl.html',
      1 => 1708526820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e97f9770af73_88728757 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="toast-container position-fixed top-0 end-0 p-5">
    <div class="toast success-toast" id="mySuccess" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-bg-success bg-opacity-75">
                        <strong class="me-auto"><i class="bi bi-hand-thumbs-up-fill"></i> Данные сохранены</strong>
            <small class="showTime">10 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="message-body toast-body text-success bg-opacity-50">
            Запрос выполнен успешно         </div>
    </div>

    <div class="toast error-toast" id="myError" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-bg-danger bg-opacity-75">
                        <strong class="me-auto"><i class="bi bi-bug-fill"></i> Что-то пошло не так</strong>
            <small class="showTime">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="message-body toast-body text-danger bg-opacity-50">
            Ошибка при выполнении запроса к серверу
        </div>
    </div>

    <div class="toast" id="myInvalid" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-danger bg-opacity-75">
                        <strong class="me-auto"><i class="bi bi-bug-fill"></i> Проверьте введенные данные</strong>
            <small class="showTime">10 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="message-body toast-body text-danger bg-opacity-50">
            Неверно заполнены данные формы
        </div>
    </div>
</div> 


<?php }
}
