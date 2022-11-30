<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

//добвление учатсника в список
$el = new CIBlockElement;

$arLoadProductArray = array(
  "MODIFIED_BY"    => 1, // элемент изменен текущим пользователем
  // "IBLOCK_SECTION_ID" => true,          // элемент лежит в корне раздела
  "IBLOCK_ID"      => 32,
  // "PROPERTY_VALUES" => $PROP,
  "NAME"           => 'история ' . time(),
  "DETAIL_TEXT"    => $_GET['story'],
  "ACTIVE"         => "N"            // активен
);

if ($PRODUCT_ID = $el->Add($arLoadProductArray))
  echo "New ID: " . $PRODUCT_ID;
else
  echo "Error: " . $el->LAST_ERROR;