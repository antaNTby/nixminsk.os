<?php
  #####################################
  # ShopCMS: Скрипт интернет-магазина
  # Copyright (c) by ADGroup
  # http://shopcms.ru
  #####################################

  $JsHttpRequest = new JsHttpRequest('UTF-8');

  $GLOBALS['_RESULT'] = array(
  "tgenexe"     => $_SESSION["tgenexe"],
  "tgencompile" => $_SESSION["tgencompile"],
  "tgendb"      => $_SESSION["tgendb"],
  "tgenall"     => $_SESSION["tgenall"],
  "tgensql"     => $_SESSION["tgensql"]
  );

?>