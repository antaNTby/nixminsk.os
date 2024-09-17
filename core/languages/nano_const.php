<?php
###########################
### КОНСТАНТЫ И ФУНКЦИИ ###
###########################

### ФУНКЦИИ
function set_cookie( $Name, $Value = '', $Expires = '', $Secure = false, $Path = '', $Domain = '', $HTTPOnly = false ) {
    header( 'Set-Cookie: ' . rawurlencode( $Name ) . '=' . rawurlencode( $Value )
        . ( empty( $Expires ) ? '' : ' ; expires=' . gmdate( 'D, d-M-Y H:i:s', $Expires ) . ' GMT' )
        . ( empty( $Path ) ? '' : ' ; path=' . $Path )
        . ( empty( $Domain ) ? '' : ' ; domain=' . $Domain )
        // . ( !$Secure ? '' : ';  SameSite=None; Secure ' )
         . ( !$Secure ? ' ; flavor=choco; SameSite=Lax' : ' ; SameSite=None; Secure ' )
        . ( !$HTTPOnly ? '' : '; HttpOnly' ), false );
}

function isWindows() {
    if ( isset( $_SERVER["WINDIR"] ) || isset( $_SERVER["windir"] ) ) {
        return true;
    } else {
        return false;
    }
}

$IS_WINDOWS = ( strtoupper( substr( PHP_OS, 0, 3 ) ) === 'WIN' );
function fix_directory_separator( $str ) {
    global $IS_WINDOWS;
    if ( $IS_WINDOWS ) {
        $str = str_replace( '/', DIRECTORY_SEPARATOR, $str );
    } else {
        $str = str_replace( '\\', DIRECTORY_SEPARATOR, $str );
    }

    return $str;
}

### КОНСТАНТЫ

// FROM connect.inc.php
const SLASH                  = "/";
const SITE_URL                  = "nixminsk.os";
const ADMIN_FILE                = "admin.php";
// const ADMIN_IMAGES_DEFAULT_PATH = "data/images";

const DBMS    = "mysqli";        // database system
const DB_HOST = "localhost";     // database host
const DB_USER = "nixby_dbadmin"; // username
const DB_NAME = "db_openserver"; // database name
const DB_PASS = "openserver";    // password
const DB_PRFX = "UTF_";          // database prefix


// FROM connect.inc.php

#### const DB_PASS= "658!admin";   // password
#### const DB_NAME= "nixby_UTF8";       // database name
#### const DB_PASS= "nixby_dbadmin658!!!";   // password
#### const DB_PRFX= "UTF_";     // database prefix

const ERROR_DB_INIT = SITE_URL . " :: " . "Database connection problem!";

const CONF_CHECKSTOCK   = 0; //  УЧЕТ РЕАЛЬНОГО КОЛИЧЕСТВА НА СКЛАДЕ
const QUICK_CART_ENABLE = 1; // ИСПОЛЬЗОВАНИЕ БЫСТРОЙ КОРЗИНЫ
#///////////////////
// Вывод товаров
// 0 = Таблица
// 1 = Витрина
// 2 = Галерея
#///////////////////
const CONF_INITIAL_VIEWTYPE = 1; // вид страницы по умолчанию
const CONF_DISPLAY_INFO     = 1; // показывать скорость генерации страницы

const STRING_INSTOCK_COUNT    = "&nbsp;шт.";
const STRING_INSTOCK_DIE      = "Поставка прекращена";
const STRING_INSTOCK_NO       = "Нет";
const STRING_INSTOCK_YES      = "в наличии";
const STRING_INSTOCK_NO_STOCK = "нет на складе";
const STRING_INSTOCK_TRAIN_GO = "в транзите";

const TRAIN_GO_MARK_DB = "&lt;Под_заказ&gt; ";

const STRING_INSTOCK_WAIT      = "ожидаем";
const STRING_INSTOCK_YES_STOCK = "есть на складе";
const SYMBOL_INSTOCK_DIE       = "<i class=\"bi bi-sign-dead-end-fill\"></i>";
const SYMBOL_INSTOCK_LITTLE    = "<i class=\"bi bi-brightness-alt-low\"></i>";
const SYMBOL_INSTOCK_MUCH      = "<i class=\"bi bi-brightness-high-fill\"></i>";
const SYMBOL_INSTOCK_NO        = "<i class=\"bi bi-dash-lg\"></i>";
const SYMBOL_INSTOCK_TRAIN_GO  = "<i class=\"bi bi-truck\"></i>";

const SYMBOL_INSTOCK_TRAIN_GO_2 = "<i class=\"bi bi-dice-2\"></i>";
const SYMBOL_INSTOCK_TRAIN_GO_4 = "<i class=\"bi bi-dice-4\"></i>";
const SYMBOL_INSTOCK_TRAIN_GO_6 = "<i class=\"bi bi-dice-6\"></i>";
const SYMBOL_INSTOCK_WAIT       = "<i class=\"bi bi-plus-slash-minus\"></i>";
const SYMBOL_INSTOCK_YES        = "<i class=\"bi bi-plus-lg\"></i>";

const DEFAULT_SHIPPMETHOD_ID = 3;
const DEFAULT_PAYMETHOD_ID   = 3;
const DEFAULT_VAT_RATE       = 20.00;

const ADMINER_FILE         = "adminer.php";
const DEFAULT_CHARSET_HTML = "UTF-8";
const DEFAULT_CHARSET_PHP  = "UTF8";
const DEFAULT_CHARSET      = "UTF8";


